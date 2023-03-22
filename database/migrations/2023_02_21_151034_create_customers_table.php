<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('fullname')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('letter')->nullable();
            $table->double('amount')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('agency')->nullable();
            $table->string('state')->nullable();
            $table->date('date')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('code')->nullable();
            $table->string('payment_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
