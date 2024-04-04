<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_addresses', function (Blueprint $table) {
            $table->primary("userId", "addressId");
            $table->unsignedInteger("userId");
            $table->unsignedInteger("addressId");

            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('addressId')->references('addressId')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_addresses');
    }
};
