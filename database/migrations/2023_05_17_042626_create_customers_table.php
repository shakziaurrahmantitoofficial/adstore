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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("mailPhone")->nullable();
            $table->string("nid")->nullable();
            $table->text("address")->nullable();
            $table->string("customerType")->nullable();
            $table->string("password")->nullable();
            $table->string("companyName")->nullable();
            $table->string("image")->nullable();
            $table->string("businessType")->nullable();
            $table->string("tradelince")->nullable();
            $table->integer("status")->default(1);            
            $table->string("remember_token")->nullable();            
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
};
