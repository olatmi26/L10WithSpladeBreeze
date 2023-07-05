<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfficiencySetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('efficiency_setups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('department_id')->nullable()->constrained();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->foreignId('setupBy')->nullable()->constrained('users');
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
        Schema::dropIfExists('efficiency_setups');
    }
}
