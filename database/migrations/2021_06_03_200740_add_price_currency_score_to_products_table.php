<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceCurrencyScoreToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price_old')->nullable()->after('top');
            $table->integer('discount')->nullable()->after('top');
            $table->integer('score')->nullable()->after('top');
            $table->enum('currency', ['DOLAR', 'PEN', 'EURO'])->nullable()->after('top');
            $table->decimal('price')->nullable()->after('top');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price_old');
            $table->dropColumn('discount');
            $table->dropColumn('score');
            $table->dropColumn('currency');
            $table->dropColumn('price');
        });
    }
}
