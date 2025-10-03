<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->dateTime('datetime');
            $table->tinyInteger('payment_method');
            $table->string('postal_code');
            $table->string('address');
            $table->string('building')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
