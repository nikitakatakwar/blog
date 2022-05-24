<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('users');
            // $table->bigInteger('customer_id');
            $table->text('address');
            $table->text('address_opt');
            $table->text('business_category_id');
            $table->text('requirements');
            $table->bigInteger('product_category_id');
            $table->text('services');
            $table->string('store_name');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->string('gstin');
            $table->string('pos');
            $table->bigInteger('package_id');
            $table->smallInteger('verification');
            $table->smallInteger('payment_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_details');
    }
}
