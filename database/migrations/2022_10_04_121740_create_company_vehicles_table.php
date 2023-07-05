<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();

        Schema::create('company_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->nullable()->index()->constrained()->refrences('id')->on('vehicles')->onDelete('cascade');
            $table->foreignId('company_id')->nullable()->index()->constrained()->refrences('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('company_vehicles');
    }
}