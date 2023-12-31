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
        Schema::disableForeignKeyConstraints();
        Schema::create('location_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->nullable()->index()->constrained()->refrences('id')->on('locations')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->index()->constrained()->refrences('id')->on('users')->onDelete('cascade');
            //$table->primaryKey(['company_id', 'user_id']);
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
        Schema::dropIfExists('location_user');
    }
};