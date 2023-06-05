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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("link")->nullable();
            $table->string("packageName")->nullable();
            $table->text("description")->nullable();
            $table->string("adType")->nullable();
            $table->string("duration")->nullable();
            $table->string("adstartTime")->nullable();
            $table->string("adservicetype")->nullable();
            $table->string("image")->nullable();
            $table->string("profile_image")->nullable();
            $table->string("profile_status")->default(0);
            $table->integer("packageId")->nullable();
            $table->integer("customerId")->nullable();
            $table->integer("resubstatus")->default(0);
            $table->integer("renewstatus")->default(0);
            $table->integer("status")->default(0);
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
        Schema::dropIfExists('ads');
    }
};
