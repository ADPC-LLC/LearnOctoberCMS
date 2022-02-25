<?php namespace Watchlearn\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnMovieMovies extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_movie_movies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('year')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_movie_movies');
    }
}
