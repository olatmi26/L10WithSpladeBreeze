<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sub_objectives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('efficiency_setup_id')->nullable()->constrained();
            $table->foreignId('main_objective_id')->nullable()->constrained();
            $table->text('subObjectives')->nullable();
            $table->unsignedInteger('pointAlloted')->nullable();
            $table->text('whoCanAccessIt')->nullable();
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
        Schema::dropIfExists('sub_objectives');
    }
}
