<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('campaign_id');
            $table->bigInteger('contestant_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('country');
            $table->string('city');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('birth_month');
            $table->string('day');
            $table->string('gender');
            $table->string('facebook')->default(0);
            $table->string('instagram')->default(0);
            $table->string('twitter')->default(0);
            $table->string('youtube')->default(0);
            $table->bigInteger('total_social_votes')->default(0);
            $table->string('judge_1')->default(0);
            $table->string('judge_2')->default(0);
            $table->string('judge_3')->default(0);
            $table->bigInteger('total_judge_votes')->default(0);
            $table->bigInteger('tally_vote')->default(0);
            $table->bigInteger('total_tally_votes')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('disqualified')->default(0);
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
        Schema::dropIfExists('contestants');
    }
}
