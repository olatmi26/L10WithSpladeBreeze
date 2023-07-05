<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('expirations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->nullable()->index()->constrained()->refrences('id')->on('documents')->onDelete('cascade');
            $table->foreignId('vehicle_id')->nullable()->index()->constrained()->refrences('id')->on('vehicles')->onDelete('cascade');
            $table->foreignId('ownBy')->nullable()->constrained()->refrences('id')->on('users')->onDelete('cascade');
            $table->foreignId('company_id')->nullable()->index()->constrained()->refrences('id')->on('companies')->onDelete('cascade');
            $table->date('dateRenew')->nullable()->index();
            $table->date('expireDate')->nullable()->index();
            $table->date('nextRenewal')->nullable()->index();
            $table->unsignedInteger('notificationPeriod')->default(30);
            $table->boolean('expirationStatus')->nullable()->default(false)->index();
            $table->foreignId('enteredBy')->nullable()->index()->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('expirations');
    }
}