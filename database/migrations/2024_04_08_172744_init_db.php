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
        Schema::create('languages', function (Blueprint $table) {
            $table->id("id");
            $table->string("description");
            $table->timestamps();
        });
        Schema::create('settings', function (Blueprint $table) {
            $table->id("settingId");
            $table->string("code");
            $table->string("key");
            $table->string("value");
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->id('roleId');
            $table->unsignedInteger('roleDescriptionId');
            $table->timestamps();
        });
        Schema::create('roleDescriptions', function (Blueprint $table) {
            $table->id('roleDescriptionId');
            $table->unsignedInteger('languageId');
            $table->string('description');
            $table->timestamps();

            $table->foreign('languageId')->references('id')->on('languages');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->foreign('roleDescriptionId')->references('roleDescriptionId')->on('roleDescriptions');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id("userId");
            $table->string("userName");
            $table->string("password");
            $table->foreignId("roleId");
            $table->timestamps();

            //la relazione
            $table->foreign('roleId')->references('roleId')->on('roles');
            //$table->foreign('userId')->references('userId')->on('user_addresses');
        });

        Schema::create('user_profiles', function (Blueprint $table) {
            $table->unsignedInteger("userId");
            $table->string("name");
            $table->string("lastName");
            $table->string("email");
            $table->double("credits");
            $table->unsignedInteger("languageId");
            $table->timestamps();

            $table->foreign('languageId')->references('languageId')->on('languages');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id("cityId");
            $table->string("name");
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id("addressId");
            $table->unsignedInteger("cityId");
            $table->string("address");
            $table->string("postalCode");
            $table->string("state");
            $table->timestamps();

            $table->foreign('cityId')->references('cityId')->on('cities');
            //$table->foreign('addressId')->references('addressId')->on('users_addresses');
        });

        Schema::create('users_addresses', function (Blueprint $table) {
            $table->unsignedInteger("userId");
            $table->unsignedInteger("addressId");

            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('addressId')->references('addressId')->on('addresses');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id("categoryId");
            $table->unsignedInteger('categoryDescriptionId');
            $table->timestamps();

            //$table->foreign('translationId')->references('translationId')->on('translations');
        });

        Schema::create('categoryDescriptions', function (Blueprint $table) {
            $table->id('categoryDescriptionId');
            $table->unsignedInteger('languageId');
            $table->string('description');
            $table->timestamps();

            $table->foreign('languageId')->references('languageId')->on('languages');
        });

        Schema::create('films', function (Blueprint $table) {
            $table->id("filmId");
            $table->foreignId('categoryId');
            $table->string('title');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('rating');
            $table->timestamps();

            $table->foreign('categoryId')->references('categoryId')->on('categories');
        });

        Schema::create('series', function (Blueprint $table) {
            $table->id('serieId');
            $table->foreignId('categoryId');
            $table->string('title');
            $table->unsignedInteger('rating');
            $table->timestamps();

            $table->foreign('categoryId')->references('categoryId')->on('categories');
        });

        Schema::create('seasons', function (Blueprint $table) {
            $table->id('seasonId');
            $table->foreignId('serieId');
            $table->string('title');
            $table->timestamps();

            $table->foreign('serieId')->references('serieId')->on('series');
        });

        Schema::create('episodes', function (Blueprint $table) {
            $table->id('episodeId');
            $table->foreignId('seasonId');
            $table->string('title');
            $table->unsignedInteger('duration');
            $table->timestamps();


            $table->foreign('seasonId')->references('seasonId')->on('seasons');
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
