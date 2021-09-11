<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_chefs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('participant_id')->unsigned();
            $table->bigInteger('formation_id')->unsigned();
            $table->bigInteger('chef_id')->unsigned();
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('q6');
            $table->string('q7');
            $table->string('q8');
            $table->string('q9');
            $table->string('q10');
            
            $table->foreign('participant_id')
                ->references("id")->on("participants")->onDelete("cascade");
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
        Schema::dropIfExists('rep_chefs');
    }
}
