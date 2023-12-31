<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('username', 40);
            $table->string('nama_lengkap',40);
	        $table->string('no_tlp',40);
            $table->string('email', 40);
            $table->string('password', 80);
            $table->enum('role',['mahasiswa', 'admin', 'biro2'])->default('mahasiswa');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
