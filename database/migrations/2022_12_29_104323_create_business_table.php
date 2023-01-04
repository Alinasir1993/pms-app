<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('business_owner_firstname');
            $table->string('business_owner_lastname')->nullable();
            $table->string('business_name');
            $table->string('business_contact_number');
            $table->string('business_email');
            $table->string('business_address');
            $table->string('business_address2')->nullable();
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_postal_code')->nullable();
            $table->string('business_country');
            $table->integer('business_type');
            $table->text('business_message')->nullable();
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
        Schema::dropIfExists('business');
    }
}
