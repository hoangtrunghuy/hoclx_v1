<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('exam_id');
            $table->integer('question_id');
            $table->string('exam_type');
            $table->integer('exam_score')->nullable();
            $table->string('exam_status')->nullable();
            $table->string('user_ans')->nullable();
            $table->timestamps();
            $table->primary(['exam_id','question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
