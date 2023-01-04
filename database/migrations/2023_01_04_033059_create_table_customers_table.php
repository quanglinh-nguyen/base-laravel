<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomersTable extends Migration
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

            $table->string('industry');
            $table->string('sub_industry')->nullable();
            $table->string('geo_code')->nullable();
            $table->string('hq_or_br')->nullable();
            $table->string('scale')->nullable();

            $table->string('organization_eng')->nullable();
            $table->string('organization_viet')->nullable();
            $table->string('website')->nullable();

            $table->string('prefix')->nullable()->default('Ông/Bà');
            $table->string('name')->nullable();
            $table->string('title_department_eng')->nullable();
            $table->string('title_department_viet')->nullable();
            $table->string('professional')->nullable();
            $table->string('title_level')->nullable();
            $table->string('directphone_extension')->nullable();
            $table->char('mobile')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('company_email')->nullable();
            $table->string('business_email')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('address')->nullable();

            $table->string('outdate_business_email')->nullable();
            $table->string('outdate_personal_email')->nullable();
            $table->string('attendance')->nullable();
            $table->date('last_updated_date')->nullable();
            $table->text('note')->nullable()->default('');

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
        Schema::dropIfExists('customers');
    }
}
