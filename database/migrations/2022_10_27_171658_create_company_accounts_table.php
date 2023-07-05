<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('company_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('accountName')->nullable();
            $table->foreignId('bank_id')->nullable()->constrained();
            $table->string('AccountNo', 10)->nullable();
            $table->string('accountSwiftCode')->nullable();
            $table->float('balanceCredited', 8, 2)->nullable();
            $table->float('balanceDebited', 8, 2)->nullable();
            $table->float('balance', 8, 2)->nullable();
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
        Schema::dropIfExists('company_accounts');
    }
}
