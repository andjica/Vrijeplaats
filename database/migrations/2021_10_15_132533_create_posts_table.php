<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('phone')->nullable();
            $table->integer('city_id');
            $table->string('geo_city_latitude');
            $table->string('geo_city_longlatitude');
            $table->string('full_address');
            $table->string('geo_address_latitude');
            $table->string('geo_address_longlatitude');
            $table->decimal('price_discount');
            $table->decimal('price_first')->nullable();
            $table->integer('count_of_ticket');
            $table->string('is_expired')->default('NO');
            $table->timestamp('valid_until');
            $table->text('website')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();

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
        Schema::dropIfExists('posts');
    }
}
