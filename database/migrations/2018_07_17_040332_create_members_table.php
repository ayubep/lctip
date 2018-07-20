<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_team')->unsigned();
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('foto_kartupelajar');
            $table->string('foto_formal');
            $table->string('peran');

            $table->foreign('id_team')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
