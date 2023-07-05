<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bill_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->nullable()->constrained();
            $table->foreignId('vendor_id')->nullable()->constrained();
            $table->foreignId('bank_id')->nullable()->constrained();
            $table->string('BankName')->nullable();
            $table->string('AccountNo')->nullable()->nullable();
            $table->float('Amount', 8, 2)->nullable();
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
        Schema::dropIfExists('bill_details');
    }
}
