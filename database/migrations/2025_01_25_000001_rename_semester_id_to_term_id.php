<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Rename semester_id to term_id in schools table
        Schema::table('schools', function (Blueprint $table) {
            $table->renameColumn('semester_id', 'term_id');
        });

        // Rename semester_id to term_id in exams table
        Schema::table('exams', function (Blueprint $table) {
            $table->renameColumn('semester_id', 'term_id');
        });

        // Rename semester_id to term_id in syllabi table
        Schema::table('syllabi', function (Blueprint $table) {
            $table->renameColumn('semester_id', 'term_id');
        });

        // Rename semester_id to term_id in timetables table
        Schema::table('timetables', function (Blueprint $table) {
            $table->renameColumn('semester_id', 'term_id');
        });

        // Rename semesters table to terms
        Schema::rename('semesters', 'terms');
    }

    public function down(): void
    {
        // Rename terms table back to semesters
        Schema::rename('terms', 'semesters');

        // Rename term_id back to semester_id in schools table
        Schema::table('schools', function (Blueprint $table) {
            $table->renameColumn('term_id', 'semester_id');
        });

        // Rename term_id back to semester_id in exams table
        Schema::table('exams', function (Blueprint $table) {
            $table->renameColumn('term_id', 'semester_id');
        });

        // Rename term_id back to semester_id in syllabi table
        Schema::table('syllabi', function (Blueprint $table) {
            $table->renameColumn('term_id', 'semester_id');
        });

        // Rename term_id back to semester_id in timetables table
        Schema::table('timetables', function (Blueprint $table) {
            $table->renameColumn('term_id', 'semester_id');
        });
    }
};
