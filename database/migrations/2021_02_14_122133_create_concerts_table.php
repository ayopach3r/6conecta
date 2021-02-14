<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Concert', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('promoter_id');
            $table->foreignId('precint_id');
            $table->string('name', 100);
            $table->integer('total_viewers');
            $table->dateTime('date');
            $table->double('profit');
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
        Schema::dropIfExists('Concert');
    }
}
