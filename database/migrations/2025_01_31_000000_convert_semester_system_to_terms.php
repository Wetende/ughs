<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Create terms table
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('school_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('academic_year_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('check_result')->default(false);
            $table->timestamps();
        });

        // 2. Copy data from semesters to terms
        DB::table('semesters')->orderBy('id')->each(function ($semester) {
            DB::table('terms')->insert([
                'id' => $semester->id,
                'name' => $semester->name,
                'school_id' => $semester->school_id,
                'academic_year_id' => $semester->academic_year_id,
                'check_result' => $semester->check_result,
                'created_at' => $semester->created_at,
                'updated_at' => $semester->updated_at,
            ]);
        });

        // 3. Update foreign keys in related tables to use term_id
        Schema::table('syllabi', function (Blueprint $table) {
            // First drop the foreign key constraint
            $table->dropForeign(['semester_id']);
        });
        
        // Add new column and copy data
        DB::statement('ALTER TABLE syllabi ADD COLUMN term_id BIGINT UNSIGNED AFTER semester_id');
        DB::statement('UPDATE syllabi SET term_id = semester_id');
        DB::statement('ALTER TABLE syllabi DROP COLUMN semester_id');
        
        Schema::table('syllabi', function (Blueprint $table) {
            // Add the new foreign key constraint
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle timetables table
        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign(['semester_id']);
        });
        
        DB::statement('ALTER TABLE timetables ADD COLUMN term_id BIGINT UNSIGNED AFTER semester_id');
        DB::statement('UPDATE timetables SET term_id = semester_id');
        DB::statement('ALTER TABLE timetables DROP COLUMN semester_id');
        
        Schema::table('timetables', function (Blueprint $table) {
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle exams table
        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['semester_id']);
        });
        
        DB::statement('ALTER TABLE exams ADD COLUMN term_id BIGINT UNSIGNED AFTER semester_id');
        DB::statement('UPDATE exams SET term_id = semester_id');
        DB::statement('ALTER TABLE exams DROP COLUMN semester_id');
        
        Schema::table('exams', function (Blueprint $table) {
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle schools table
        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign('schools_semester_id_foreign');
        });
        
        DB::statement('ALTER TABLE schools ADD COLUMN term_id BIGINT UNSIGNED AFTER semester_id');
        DB::statement('UPDATE schools SET term_id = semester_id');
        DB::statement('ALTER TABLE schools DROP COLUMN semester_id');
        
        Schema::table('schools', function (Blueprint $table) {
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('set null')->onUpdate('set null');
        });

        // 4. Drop the semesters table
        Schema::dropIfExists('semesters');
    }

    public function down(): void
    {
        // 1. Recreate semesters table
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('school_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('academic_year_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('check_result')->default(false);
            $table->timestamps();
        });

        // 2. Copy data back from terms to semesters
        DB::table('terms')->orderBy('id')->each(function ($term) {
            DB::table('semesters')->insert([
                'id' => $term->id,
                'name' => $term->name,
                'school_id' => $term->school_id,
                'academic_year_id' => $term->academic_year_id,
                'check_result' => $term->check_result,
                'created_at' => $term->created_at,
                'updated_at' => $term->updated_at,
            ]);
        });

        // 3. Revert foreign keys in related tables back to semester_id
        // Handle syllabi table
        Schema::table('syllabi', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
        });
        
        DB::statement('ALTER TABLE syllabi ADD COLUMN semester_id BIGINT UNSIGNED AFTER term_id');
        DB::statement('UPDATE syllabi SET semester_id = term_id');
        DB::statement('ALTER TABLE syllabi DROP COLUMN term_id');
        
        Schema::table('syllabi', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle timetables table
        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
        });
        
        DB::statement('ALTER TABLE timetables ADD COLUMN semester_id BIGINT UNSIGNED AFTER term_id');
        DB::statement('UPDATE timetables SET semester_id = term_id');
        DB::statement('ALTER TABLE timetables DROP COLUMN term_id');
        
        Schema::table('timetables', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle exams table
        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
        });
        
        DB::statement('ALTER TABLE exams ADD COLUMN semester_id BIGINT UNSIGNED AFTER term_id');
        DB::statement('UPDATE exams SET semester_id = term_id');
        DB::statement('ALTER TABLE exams DROP COLUMN term_id');
        
        Schema::table('exams', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        // Handle schools table
        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
        });
        
        DB::statement('ALTER TABLE schools ADD COLUMN semester_id BIGINT UNSIGNED AFTER term_id');
        DB::statement('UPDATE schools SET semester_id = term_id');
        DB::statement('ALTER TABLE schools DROP COLUMN term_id');
        
        Schema::table('schools', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('set null')->onUpdate('set null');
        });

        // 4. Drop the terms table
        Schema::dropIfExists('terms');
    }
};
