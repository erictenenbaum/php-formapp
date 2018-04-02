<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_zip');
            $table->string('company_phone');
            $table->string('invoice');
            $table->timestamps();
        });

    //     Schema::table('companies', function($table){
    //         $table->string('user_id')->nullable()->change();
    //    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
