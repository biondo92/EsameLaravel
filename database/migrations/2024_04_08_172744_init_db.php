<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // tabelle generiche
        Schema::create('languages', function (Blueprint $table) {
            $table->id("id");
            $table->string("description");
            $table->timestamps();
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->id("id");
            $table->string("code");
            $table->string("key");
            $table->string("value");
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id("id");
            $table->timestamps();
        });

        // tabelle descrittive
        Schema::create('role_descriptions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('languageId');
            $table->unsignedBigInteger('roleId');
            $table->string('description');
            $table->timestamps();

            $table->foreign('languageId')->references('id')->on('languages');
            $table->foreign('roleId')->references('id')->on('roles');
        });

        Schema::create('category_descriptions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('languageId');
            $table->unsignedBigInteger('categoryId');
            $table->string('description');
            $table->timestamps();

            $table->foreign('languageId')->references('id')->on('languages');
            $table->foreign('categoryId')->references('id')->on('categories');
        });


        // tabelle utenti
        Schema::create('users', function (Blueprint $table) {
            $table->id("id");
            $table->string("userName");
            $table->string("password");
            $table->unsignedBigInteger("roleId");
            $table->string("name");
            $table->string("lastName");
            $table->string("email");
            $table->double("credits");
            $table->unsignedBigInteger("languageId");
            $table->timestamps();

            //la relazione
            $table->foreign('roleId')->references('id')->on('roles');
            $table->foreign('languageId')->references('id')->on('languages');
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("cityId");
            $table->string("address");
            $table->string("postalCode");
            $table->string("state");
            $table->timestamps();

            $table->foreign('cityId')->references('id')->on('cities');
        });

        Schema::create('users_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("addressId");

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('addressId')->references('id')->on('addresses');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id')->references('userId')->on('users_addresses');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('id')->references('addressId')->on('users_addresses');
        });

        Schema::create('films', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger('categoryId');
            $table->string('title');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('rating');
            $table->timestamps();

            $table->foreign('categoryId')->references('id')->on('categories');
        });

        Schema::create('series', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('categoryId');
            $table->string('title');
            $table->unsignedInteger('rating');
            $table->timestamps();

            $table->foreign('categoryId')->references('id')->on('categories');
        });

        Schema::create('seasons', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('serieId');
            $table->string('title');
            $table->timestamps();

            $table->foreign('serieId')->references('id')->on('series');
        });

        Schema::create('episodes', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('seasonId');
            $table->string('title');
            $table->unsignedBigInteger('duration');
            $table->timestamps();


            $table->foreign('seasonId')->references('id')->on('seasons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
        Schema::dropIfExists('seasons');
        Schema::dropIfExists('series');
        Schema::dropIfExists('films');
        Schema::dropIfExists('categoryDescriptions');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('user_profiles');
        Schema::dropIfExists('users_addresses');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roleDescriptions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('languages');
    }
};
