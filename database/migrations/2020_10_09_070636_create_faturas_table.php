<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sony_id');
            $table->enum('type', [2, 4]);	
            $table->decimal('price',9,3);
            $table->timestamp('start', 0);
            $table->integer('minutes');	
            $table->timestamp('finish', 0)->nullable();
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('sony_id')->references('id')->on('sony');
            $table->foreign('user_id')->references('id')->on('users');
		
        });

        Schema::create('fatura_pije', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pije_id');
            $table->decimal('price',9,3);
            $table->boolean('paguar')->default(0);	
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('pije_id')->references('id')->on('pijet');
            $table->foreign('user_id')->references('id')->on('users');
		
        });

        Schema::create('sony_active', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sony_id');
            $table->enum('type', [2, 4]);	
            $table->timestamp('start', 0);
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
            $table->foreign('sony_id')->references('id')->on('sony');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faturas');
    }
}
