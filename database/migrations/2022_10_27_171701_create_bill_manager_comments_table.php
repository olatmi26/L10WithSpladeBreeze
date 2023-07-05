<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillManagerCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bill_manager_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->nullable()->constrained();
            $table->foreignId('commentBy')->nullable()->constrained('users');
            $table->foreignId('commenterReplyBy')->nullable()->constrained('users');
            $table->string('commentMsg')->nullable();
            $table->string('replyMsg')->nullable();
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
        Schema::dropIfExists('bill_manager_comments');
    }
}
