<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMkmBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mkm_bots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('no_limit');
            $table->integer('sleep');
            $table->string('pair',10);
            $table->double('usd_price');
            $table->integer('user_id');
            $table->double('multiplier');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mkm_bots');
    }
}
