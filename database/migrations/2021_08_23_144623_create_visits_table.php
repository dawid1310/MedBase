<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('user_id');
            $table->date('day');
            $table->time('time');
            $table->unsignedBigInteger('visit_type_id')->nullable();
            $table->unsignedBigInteger('treatment_id')->nullable();
            $table->boolean('done')->nullable();
            $table->longText('patient_desc')->nullable();
            $table->longText('doctor_desc')->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctors')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('visit_type_id')
            ->references('id')
            ->on('visit_types')
            ->onDelete('cascade');

            $table->foreign('treatment_id')
            ->references('id')
            ->on('treatments')
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
        Schema::dropIfExists('visits');
    }
}
