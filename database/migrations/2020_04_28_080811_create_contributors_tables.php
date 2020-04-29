<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContributorsTables extends Migration
{
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            // $table->string('title', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            // $table->text('description')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('twitter')->nullable();
            $table->string('portfolio_link')->nullable();
            $table->string('linkedin')->nullable();
        });

        Schema::create('contributor_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'contributor');
        });
    }

    public function down()
    {

        Schema::dropIfExists('contributor_slugs');
        Schema::dropIfExists('contributors');
    }
}
