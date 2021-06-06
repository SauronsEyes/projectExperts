<?php namespace Northamericanweb\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebReviews extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->boolean('visible');
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->dropColumn('visible');
        });
    }
}
