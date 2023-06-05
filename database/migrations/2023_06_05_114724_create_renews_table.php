<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renews', function (Blueprint $table) {
            $table->id();
            $table->integer("adsid");
            $table->string("packageName")->nullable();
            $table->string("price")->nullable();
            $table->string("duration")->nullable();
            $table->string("paymentMethod")->nullable();
            $table->string("paymentGetway")->nullable();
            $table->integer("prepareby")->nullable();
            $table->integer("customerId")->nullable();
            $table->integer("payment")->default(0);
            $table->integer("adstatus")->default(1);
            $table->integer("status")->default(1);
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
        Schema::dropIfExists('renews');
    }
};
