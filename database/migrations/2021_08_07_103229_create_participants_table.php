<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('poste');
            $table->string('region');
            $table->string('email');
            $table->bigInteger('formation_id')->unsigned();
            $table->bigInteger('chef_id')->unsigned();
            $table->foreign('formation_id')
                ->references("id")->on("formations")->onDelete("cascade");
            $table->foreign('chef_id')
                ->references("id")->on("chef")->onDelete("cascade");
            
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
        Schema::dropIfExists('participants');
    }
}
