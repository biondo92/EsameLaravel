<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id("addressId");
            $table->unsignedInteger("cityId");
            $table->string("address");
            $table->string("postalCode");
            $table->string("state");
            $table->timestamps();

            $table->foreign('cityId')->references('cityId')->on('cities');
            $table->foreign('addressId')->references('addressId')->on('users_addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
