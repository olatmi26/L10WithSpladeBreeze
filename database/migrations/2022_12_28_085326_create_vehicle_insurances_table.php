<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('vehicle_insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->nullable()->index();
            $table->string('certificateNo')->nullable()->index();
            $table->string('naicomId')->nullable()->index();
            $table->string('policyNo')->nullable()->index();
            $table->string('VehicleRegN0')->nullable()->index();
            $table->foreignId('vehicleType')->nullable()->constrained('vehicle_types');
            $table->string('holderNameNo')->nullable()->index();
            $table->date('insurancePeriodStart')->index()->nullable();
            $table->date('insurancePeriodEnd')->index()->nullable();
            $table->string('insuranceCertTemplate')->nullable()->index();
            $table->foreignId('issuedTo')->nullable()->constrained('users');
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
        Schema::dropIfExists('vehicle_insurances');
    }
}