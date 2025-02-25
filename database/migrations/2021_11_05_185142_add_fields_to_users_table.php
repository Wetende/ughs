<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('school_id')->nullable()->constrained();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('denomination')->nullable();
            $table->boolean('account_locked')->default(false);
            $table->boolean('must_change_password')->default(true);
        });

        // Set default school for all users
        $defaultSchool = DB::table('schools')->first();
        if ($defaultSchool) {
            DB::table('users')->update(['school_id' => $defaultSchool->id]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropColumn('school_id');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('address');
        });
    }
};
