<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_id');
            $table->string('stage');
            $table->string('title');
            $table->string('description');
            $table->text('rules_&_regulations');
            $table->string('facebook')->default(0.00);
            $table->string('instagram')->default(0.00);
            $table->string('twitter')->default(0.00);
            $table->string('youtube')->default(0.00);
            $table->bigInteger('total_social_votes')->default(0.00);
            $table->string('judge_1')->default(0.00);
            $table->string('judge_2')->default(0.00);
            $table->string('judge_3')->default(0.00);
            $table->bigInteger('total_judge_votes')->default(0.00);
            $table->bigInteger('tally_vote')->default(0.00);
            $table->bigInteger('total_tally_votes')->default(0.00);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('contests');
    }
}
