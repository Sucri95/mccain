<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mccaindb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accelerators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //accelerator's title
            $table->string('about'); //accelerator's description
            $table->string('image'); //accelerator's image
            $table->string('logo');  //accelerator's logo
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');         //benefit's title
            $table->string('about');         //benefit's description
            $table->integer('id_category');  //filter by category
            $table->string('image');         //benefit's image
            $table->string('href');          //links
            $table->string('location');      //filter by zone
            $table->string('type');          //benefit's type
            $table->string('logo');          //benefit's logo
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');  //category's type
            $table->string('image'); //category's image
            $table->string('about'); //category's description
            $table->string('logo');  //category's logo
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //dealers's name
            $table->string('tlf');  //dealers's phone number
            $table->string('mail'); //dealers's mail
            $table->string('web');  //dealers's website
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('demos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //demo's title
            $table->string('image'); //demo's image
            $table->string('about'); //demo's description
            $table->string('logo');  //demo's logo
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question'); //question
            $table->string('answer');   //answer
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); //news' title
            $table->string('image'); //news' image
            $table->string('about'); //news' description
            $table->string('logo');  //news' logo
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');   //product's name
            $table->string('image');  //product's image
            $table->string('about');  //product's description
            $table->integer('price'); //product's cost
            $table->integer('point'); //quantity of points earned
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('wins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');  //title of the activity
            $table->string('image');  //image shown 
            $table->string('about');  //description of the activity
            $table->string('logo');   //logo
            $table->string('href');   //link to the trivias
            $table->string('button'); //text of the button
            $table->string('item');   // product won
            $table->string('point');  //quantity of points earned
            $table->string('type');   //play or buy
            $table->string('principal')->nullable();  //if it's the one on the home or not
            $table->rememberToken();
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
        Schema::dropIfExists('accelerators');
        Schema::dropIfExists('benefits');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('dealers');
        Schema::dropIfExists('demos');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('news');
        Schema::dropIfExists('products');
        Schema::dropIfExists('wins');
    }
}
