<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedSmallInteger('role')->nullable()->after('password');
        });

        \Illuminate\Support\Facades\DB::table('users')->update([
            'role' => \App\User::ROLE_USER,
        ]);

        \Illuminate\Support\Facades\DB::table('users')->insert(
            array(
                'name' => 'Admin',
                'email' => 'admin@mail.ru',
                'password' => Hash::make('11111111'),
                'militaryUnit_id' => 1,
                'role' => 1,
                'status' => 1,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
