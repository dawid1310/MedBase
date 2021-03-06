<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSickLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sick_leaves', function (Blueprint $table) {
            $table->id();
            $table->date('start');
            $table->date('end');
            $table->unsignedBigInteger('visit_id');
            $table->integer('code');
            $table->timestamps();
            
            $table->foreign('visit_id')
            ->references('id')
            ->on('visits')
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
        Schema::dropIfExists('sick_leaves');
    }
}
