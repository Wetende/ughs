<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ConvertSemesterSystemToTerms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

        // 2. Copy data from semesters to terms if the table exists
        if (Schema::hasTable('semesters')) {
            DB::statement('INSERT INTO terms (id, name, school_id, academic_year_id, created_at, updated_at) 
                          SELECT id, name, school_id, academic_year_id, created_at, updated_at FROM semesters');
        }

        // 3. Update foreign keys in related tables
        if (Schema::hasTable('syllabi')) {
            Schema::table('syllabi', function (Blueprint $table) {
                $table->dropForeign(['semester_id']);
                $table->renameColumn('semester_id', 'term_id');
                $table->foreign('term_id')->references('id')->on('terms');
            });
        }

        if (Schema::hasTable('timetables')) {
            Schema::table('timetables', function (Blueprint $table) {
                $table->dropForeign(['semester_id']);
                $table->renameColumn('semester_id', 'term_id');
                $table->foreign('term_id')->references('id')->on('terms');
            });
        }

        if (Schema::hasTable('exams')) {
            Schema::table('exams', function (Blueprint $table) {
                $table->dropForeign(['semester_id']);
                $table->renameColumn('semester_id', 'term_id');
                $table->foreign('term_id')->references('id')->on('terms');
            });
        }

        // 4. Drop the old semesters table
        Schema::dropIfExists('semesters');

        // 5. Update permissions in the database
        DB::table('permissions')
            ->where('name', 'like', '%semester%')
            ->get()
            ->each(function ($permission) {
                DB::table('permissions')
                    ->where('id', $permission->id)
                    ->update([
                        'name' => str_replace('semester', 'term', $permission->name)
                    ]);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 1. Create semesters table
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('school_id')->constrained();
            $table->foreignId('academic_year_id')->constrained();
            $table->timestamps();
        });

        // 2. Copy data from terms to semesters
        DB::statement('INSERT INTO semesters (id, name, school_id, academic_year_id, created_at, updated_at) 
                      SELECT id, name, school_id, academic_year_id, created_at, updated_at FROM terms');

        // 3. Update foreign keys back in related tables
        Schema::table('syllabi', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters');
        });

        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters');
        });

        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign(['term_id']);
            $table->renameColumn('term_id', 'semester_id');
            $table->foreign('semester_id')->references('id')->on('semesters');
        });

        // 4. Drop the terms table
        Schema::dropIfExists('terms');

        // 5. Revert permissions in the database
        DB::table('permissions')
            ->where('name', 'like', '%term%')
            ->get()
            ->each(function ($permission) {
                DB::table('permissions')
                    ->where('id', $permission->id)
                    ->update([
                        'name' => str_replace('term', 'semester', $permission->name)
                    ]);
            });
    }
}
