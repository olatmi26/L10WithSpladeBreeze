<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillPaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bill_payment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->nullable()->constrained();
            $table->foreignId('vendor_id')->nullable()->constrained();
            $table->foreignId('debitedAccount')->nullable()->constrained('company_account');
            $table->foreignId('creditedAccount')->nullable()->constrained('vendor_account');
            $table->float('amountToPay', 8, 2)->nullable();
            $table->float('amountProcessed', 8, 2)->nullable();
            $table->float('balanceToPay', 8, 2)->nullable();
            $table->timestamp('dateProcessed')->nullable();
            $table->foreignId('paidBy')->nullable()->constrained('users');
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
        Schema::dropIfExists('bill_payment_details');
    }
}
