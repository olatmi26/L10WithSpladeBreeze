<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulatedPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('regulated_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('performance_evaluation_id')->nullable()->constrained();
            $table->foreignId('main_objective_id')->nullable()->constrained();
            $table->unsignedInteger('regulatedPoint')->nullable()->default(null);
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
        Schema::dropIfExists('regulated_points');
    }
}
