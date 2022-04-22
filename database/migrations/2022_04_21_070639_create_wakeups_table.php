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
        Schema::create('wakeups', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->datetime('wakeup_at');
            $table->integer('feeling')->nullable();
            $table->string('comment')->nullable();
            $table->integer('manual');
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
        Schema::dropIfExists('wakeups');
    }
};
