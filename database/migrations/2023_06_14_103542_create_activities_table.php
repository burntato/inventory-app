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
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id_activity');
            // foreign key id_item
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id_item')->on('items');
            // foreign key id_user
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users');
            // timestamp_activity
            $table->timestamp('timestamp_activity');
            // timestamp_returned
            $table->timestamp('timestamp_returned')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
