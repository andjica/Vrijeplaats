<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_signatures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contactperson');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('adress');
            $table->string('post_code');
            $table->text('signature');
            $table->timestamp('date');
           
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
        Schema::dropIfExists('user_signatures');
    }
}
