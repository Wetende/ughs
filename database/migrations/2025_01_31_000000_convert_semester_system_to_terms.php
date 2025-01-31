<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            // Then rename the column
            $table->renameColumn('semester_id', 'term_id');
            // Add the new foreign key constraint
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign(['semester_id']);
            $table->renameColumn('semester_id', 'term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['semester_id']);
            $table->renameColumn('semester_id', 'term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign(['semester_id']);
            $table->renameColumn('semester_id', 'term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });

        // 4. Finally drop the semesters table
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

        // 3. Update foreign keys in related tables back to semester_id
        Schema::table('syllabi', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
        });

        // 4. Finally drop the terms table
        Schema::dropIfExists('terms');
    }
};
