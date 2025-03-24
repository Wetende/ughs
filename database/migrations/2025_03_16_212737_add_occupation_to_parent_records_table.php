<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add relationship column to the pivot table
        Schema::table('parent_record_user', function (Blueprint $table) {
            $table->string('relationship')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parent_record_user', function (Blueprint $table) {
            $table->dropColumn('relationship');
        });
    }
};
