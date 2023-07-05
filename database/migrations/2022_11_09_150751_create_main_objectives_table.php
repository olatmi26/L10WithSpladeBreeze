<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('main_objectives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('efficiency_setup_id')->nullable()->constrained();
            $table->string('majorCriterial')->nullable();
            $table->unsignedInteger('totalWeightedPoint')->nullable()->default(1);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_objectives');
    }
}
