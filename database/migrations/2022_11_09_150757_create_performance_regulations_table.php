<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('performance_regulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('performance_evaluation_id')->nullable()->constrained();
            $table->foreignId('main_objective_id')->nullable()->constrained();
            $table->unsignedInteger('regulatedPoint')->nullable()->default(null);
            $table->string('comment')->nullable();
            $table->foreignId('regulatedBy')->nullable()->constrained('users');
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
        Schema::dropIfExists('performance_regulations');
    }
}
