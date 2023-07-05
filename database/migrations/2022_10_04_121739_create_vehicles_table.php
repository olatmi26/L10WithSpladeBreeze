<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plateNo', 12)->unique()->nullable()->index();
            $table->boolean('dueStatus')->nullable()->default(false);
            $table->foreignId('enteredBy')->nullable()->index()->constrained()->refrences('id')->on('users')->onDelete('cascade');
            $table->string('chassesN0', 120)->unique()->nullable()->index();
            $table->string('color', 50)->nullable();
            $table->foreignId('vehicle_type_id')->nullable()->index()->constrained()->refrences('id')->on('vehicle_types')->onDelete('cascade');;
            $table->timestamps();
        });

        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}