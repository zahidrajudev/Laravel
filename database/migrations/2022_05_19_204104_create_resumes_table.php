<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            //Contact (Present Address)
            $table->string('care_of')->nullable();
            $table->string('village')->nullable();
            $table->string('post_office')->nullable();
            $table->string('upazila')->nullable();
            $table->string('district')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('career')->nullable();
            $table->string('contact_status')->default('start');
            //Career Object


            //Education Data
            $table->string('honours_institue')->nullable();
            $table->string('honours_versity')->nullable();
            $table->string('honours_subject')->nullable();
            $table->string('honours_result')->nullable();
            $table->string('honours_passing')->nullable();

            $table->string('hsc_institue')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('hsc_passing')->nullable();

            $table->string('ssc_institue')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('ssc_passing')->nullable();
            $table->string('education_status')->default('complete');

            //Computer Skill and English Skill
            $table->string('computer_ms', 200)->nullable();
            $table->string('internet', 200)->nullable();

            $table->string('english', 200)->nullable();
            $table->string('bangla', 200)->nullable();
            $table->string('computer_status')->default('complete');

            //personal Information
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('nid')->nullable();
            $table->string('blood_group')->nullable();


            $table->string('pa_care_of')->nullable();
            $table->string('pa_village')->nullable();
            $table->string('pa_post_office')->nullable();
            $table->string('pa_upazila')->nullable();
            $table->string('pa_district')->nullable();
            $table->string('personal_status')->default('complete');
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
        Schema::dropIfExists('resumes');
    }
};