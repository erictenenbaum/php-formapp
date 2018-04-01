<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->string('customer_address1');
            $table->string('customer_address2');
            $table->string('customer_city');
            $table->string('customer_state');
            $table->string('customer_zip');            
            $table->timestamps();
        });


        Schema::table('customers', function($table){
             $table->string('customer_address2')->nullable()->change();
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
