<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('ModelType')->nullable()->after('plateNo');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes()->nullable();
        });
    }

    /**w
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_models_to_vehicles');
    }
};