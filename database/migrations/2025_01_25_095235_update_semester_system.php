<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('semesters') && !Schema::hasTable('terms')) {
            // Rename the semesters table to terms if it exists and terms doesn't
            DB::statement('RENAME TABLE semesters TO terms');
        }
        
        // Rename semester_id columns to term_id in other tables if they exist
        if (Schema::hasColumn('schools', 'semester_id')) {
            DB::statement('ALTER TABLE schools CHANGE semester_id term_id BIGINT UNSIGNED NULL');
        }
        
        if (Schema::hasColumn('exams', 'semester_id')) {
            DB::statement('ALTER TABLE exams CHANGE semester_id term_id BIGINT UNSIGNED NULL');
        }
        
        // Update foreign key constraints
        DB::statement('ALTER TABLE schools DROP FOREIGN KEY IF EXISTS schools_semester_id_foreign');
        DB::statement('ALTER TABLE schools ADD CONSTRAINT schools_term_id_foreign FOREIGN KEY (term_id) REFERENCES terms(id) ON DELETE CASCADE');
        
        DB::statement('ALTER TABLE exams DROP FOREIGN KEY IF EXISTS exams_semester_id_foreign');
        DB::statement('ALTER TABLE exams ADD CONSTRAINT exams_term_id_foreign FOREIGN KEY (term_id) REFERENCES terms(id) ON DELETE CASCADE');
    }

    public function down()
    {
        if (Schema::hasTable('terms') && !Schema::hasTable('semesters')) {
            // Revert foreign key constraints
            DB::statement('ALTER TABLE schools DROP FOREIGN KEY IF EXISTS schools_term_id_foreign');
            DB::statement('ALTER TABLE schools ADD CONSTRAINT schools_semester_id_foreign FOREIGN KEY (term_id) REFERENCES semesters(id)');
            
            DB::statement('ALTER TABLE exams DROP FOREIGN KEY IF EXISTS exams_term_id_foreign');
            DB::statement('ALTER TABLE exams ADD CONSTRAINT exams_semester_id_foreign FOREIGN KEY (term_id) REFERENCES semesters(id)');
            
            // Rename term_id columns back to semester_id
            if (Schema::hasColumn('schools', 'term_id')) {
                DB::statement('ALTER TABLE schools CHANGE term_id semester_id BIGINT UNSIGNED NULL');
            }
            
            if (Schema::hasColumn('exams', 'term_id')) {
                DB::statement('ALTER TABLE exams CHANGE term_id semester_id BIGINT UNSIGNED NULL');
            }
            
            // Rename the terms table back to semesters
            DB::statement('RENAME TABLE terms TO semesters');
        }
    }
};
