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
        Schema::table('users', function (Blueprint $table) {
            // Drop old columns
            $table->dropColumn(['nationality', 'state']);

            // Add new columns if they don't exist
            if (!Schema::hasColumn('users', 'id_number')) {
                $table->string('id_number')->nullable();
            }
            if (!Schema::hasColumn('users', 'passport_number')) {
                $table->string('passport_number')->nullable();
            }
            if (!Schema::hasColumn('users', 'county_id')) {
                $table->foreignId('county_id')->nullable()->constrained('counties');
            }
            if (!Schema::hasColumn('users', 'denomination')) {
                $table->enum('denomination', ['Christianity', 'Muslim', 'Hindu', 'None'])->default('None');
            }
            
            // Existing columns that we'll keep
            // 'email', 'password', 'first_name', 'last_name', 'username', 'address',
            // 'birthday', 'city', 'blood_group', 'gender', 'phone'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            
            $table->dropForeign(['county_id']);
            $table->dropColumn(['id_number', 'passport_number', 'county_id', 'denomination']);
        });
    }
};
