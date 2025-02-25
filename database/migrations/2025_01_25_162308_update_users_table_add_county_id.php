<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\County;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add county_id column
            $table->foreignId('county_id')->nullable()->constrained();
            
            // If there are existing users with 'state' matching a county name,
            // we'll update their county_id in a separate query
        });

        // Get the default county (Uasin Gishu)
        $defaultCounty = County::where('name', 'Uasin Gishu')->first();

        if ($defaultCounty) {
            // Update existing users: match their state with county names
            DB::table('users')
                ->join('counties', 'users.state', 'like', DB::raw('counties.name'))
                ->update(['users.county_id' => DB::raw('counties.id')]);

            // Set default county for users without a match
            DB::table('users')
                ->whereNull('county_id')
                ->update(['county_id' => $defaultCounty->id]);
        }

        Schema::table('users', function (Blueprint $table) {
            // Remove old columns
            $table->dropColumn(['nationality', 'state']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add back old columns
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();

            // Copy county names back to state column
            DB::table('users')
                ->join('counties', 'users.county_id', '=', 'counties.id')
                ->update(['users.state' => DB::raw('counties.name')]);

            // Set default nationality
            DB::table('users')
                ->update(['nationality' => 'Kenyan']);

            // Drop the new column
            $table->dropForeign(['county_id']);
            $table->dropColumn('county_id');
        });
    }
};
