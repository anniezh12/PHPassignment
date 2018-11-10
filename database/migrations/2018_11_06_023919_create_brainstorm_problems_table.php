<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrainstormProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brainstorm_problems', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('brain_id');
            $table->mediumtext('prob');
            $table->mediumtext('category');
            $table->mediumtext('source');
            $table->mediumtext('title');
            $table->mediumtext('status');
            $table->date('last_edit');

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
        Schema::dropIfExists('brainstorm_problems');
    }
}
