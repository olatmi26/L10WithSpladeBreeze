<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('ApprovalId')->unique()->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('dept_id')->nullable();
            $table->foreignId('vendor_id')->nullable()->constrained();
            $table->text('purpose')->nullable();
            $table->foreignId('bill_type_id')->nullable()->constrained();
            $table->foreignId('bill_category_id')->nullable()->constrained();
            $table->float('totalAmountOnBill', 8, 2)->nullable();
            $table->float('amountPartlyPaid', 8, 2)->nullable();
            $table->date('dateDue')->nullable();
            $table->date('overdueDate')->nullable();
            $table->foreignId('pendingWithDept')->nullable()->constrained('departments');
            $table->foreignId('pendingWithPerson')->nullable()->constrained('users');
            $table->integer('reminderCount')->nullable()->default(0);
            $table->boolean('paymentStatus')->nullable()->default();
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
        Schema::dropIfExists('bills');
    }
}