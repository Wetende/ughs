<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table('timetable_time_slot_weekday', static function (Blueprint $table) {
            $table->string('timetable_time_slot_weekdayable_type')->after('subject_id');
            // Copy data from old column
            DB::statement('ALTER TABLE timetable_time_slot_weekday ADD COLUMN timetable_time_slot_weekdayable_id BIGINT UNSIGNED AFTER subject_id');
            DB::statement('UPDATE timetable_time_slot_weekday SET timetable_time_slot_weekdayable_id = subject_id');
            
            $table->dropForeign(['subject_id']);
            $table->dropColumn('subject_id');
        });

        //update all existing columns
        DB::update("UPDATE timetable_time_slot_weekday SET timetable_time_slot_weekdayable_type = 'App\Models\Subjects'");
    }

    public function down(): void
    {
        //I'm too tired to comment on this
        DB::table('timetable_time_slot_weekday')->where('timetable_time_slot_weekdayable_type', '!=', 'App\Models\Subjects')->delete();

        Schema::table('timetable_time_slot_weekday', static function (Blueprint $table) {
            // Add back the original column
            $table->unsignedBigInteger('subject_id')->after('timetable_time_slot_weekdayable_type');
            // Copy data back
            DB::statement('UPDATE timetable_time_slot_weekday SET subject_id = timetable_time_slot_weekdayable_id');
            
            $table->dropColumn('timetable_time_slot_weekdayable_type');
            $table->dropColumn('timetable_time_slot_weekdayable_id');
            
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
