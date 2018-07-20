<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_team')->unsigned();
            $table->string('nama_pembimbing');
            $table->string('nip');
            $table->string('foto_ktp');
            $table->string('foto_formal');
            $table->string('nomor_hp');
            $table->string('email');

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
        Schema::dropIfExists('supervisors');
    }
}
