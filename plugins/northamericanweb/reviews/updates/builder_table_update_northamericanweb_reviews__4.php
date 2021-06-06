<?php namespace Northamericanweb\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebReviews4 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->string('email', 191)->change();
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->string('email', 10)->change();
        });
    }
}
