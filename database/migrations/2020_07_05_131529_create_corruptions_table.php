<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorruptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corruptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rotation_id')->index();
            $table->string('name', 100);
            $table->string('description');
            $table->string('corr_cost');
            $table->unsignedSmallInteger('echo_cost')->nullable();
            $table->unsignedMediumInteger('blizz_item_id')->unique();
            $table->string('wowhead_link');
            $table->timestamps();
            $table->foreign('rotation_id')->references('id')->on('rotations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corruptions');
    }
}
