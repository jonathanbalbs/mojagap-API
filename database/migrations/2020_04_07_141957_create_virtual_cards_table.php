<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('card_number')->unique();
            $table->enum('card_type',['user', 'company'])->default('user');
            $table->enum('card_category', [0,1,2]);//1 week, 2 weeks, 4 weeks
            $table->enum('card_state', ['deleted', 'expired', 'deactivated', 'active'])->default('active');
            $table->dateTime('last_state_change');
            $table->bigInteger('card_owner');
            $table->bigInteger('card_balance');
            $table->bigInteger('card_limit');
            $table->dateTime('expiry_date');
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
        Schema::dropIfExists('virtual_cards');
    }
}
