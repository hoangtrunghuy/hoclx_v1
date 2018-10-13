<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('id_question');*/
            $table->integer('question_type');
            $table->text('question_content');
            $table->string('question_img')->nullable();
            $table->string('question_ansA');
            $table->string('question_ansB');
            $table->string('question_ansC')->nullable();
            $table->string('question_ansD')->nullable();
            $table->string('question_answerTrue');
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
        Schema::dropIfExists('questions');
    }
}
