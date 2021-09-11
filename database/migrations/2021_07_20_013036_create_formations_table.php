<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('nom_formation');
                $table->string('question1');
                $table->string('question2');
                $table->string('question3');
                $table->string('question4');
                $table->string('question5');
                $table->string('question6');
                $table->string('question7');
                $table->string('question8');
                $table->string('question9');
                $table->string('question10');
    
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
