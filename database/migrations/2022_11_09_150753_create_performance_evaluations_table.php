<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('performance_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('trackNo')->unique()->index()->nullable();
            $table->foreignId('userToEvaluate')->nullable()->constrained('users');
            $table->dateTime('monthEvaluated')->nullable();
            $table->foreignId('efficiency_setup_id')->nullable()->constrained();
            $table->foreignId('main_objective_id')->nullable()->constrained();
            $table->foreignId('sub_objective_id')->nullable()->constrained();
            $table->unsignedInteger('rating')->nullable();
            $table->unsignedInteger('totalScore')->nullable();
            $table->foreignId('gradedBy')->nullable()->constrained('users');
            $table->text('accessibleTO')->nullable();
            $table->dateTime('dateSubmitted')->nullable();
            $table->boolean('paymentStatus')->nullable()->default(false);
            $table->boolean('approvalStatus')->nullable()->default(false);
            $table->foreignId('approvedBy')->nullable()->constrained('users');
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
        Schema::dropIfExists('performance_evaluations');
    }
}