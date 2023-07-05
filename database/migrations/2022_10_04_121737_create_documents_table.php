<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->index();
            $table->string('slug')->nullable()->index();
            $table->string('code')->index()->nullable()->index();
            $table->string('description')->nullable();
            $table->foreignId('enteredBy')->nullable()->constrained('users')->index();
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
        Schema::dropIfExists('documents');
    }
}
