<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_urls', function (Blueprint $table) {
            $table->increments('id');

            $table->string('token')->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('creator_ip_address')->nullable();
            $table->string('full_url', 2048);

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
        Schema::dropIfExists('short_urls');
    }
}
