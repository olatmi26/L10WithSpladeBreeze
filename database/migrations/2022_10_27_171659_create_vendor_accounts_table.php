<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('vendor_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->nullable()->constrained();
            $table->foreignId('bank_id')->nullable()->constrained();
            $table->string('accountName')->nullable();
            $table->string('AccountNo', 10)->nullable();
            $table->float('balance', 8, 2)->nullable();
            $table->string('otherDescription')->nullable();
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
        Schema::dropIfExists('vendor_accounts');
    }
}
