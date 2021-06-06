<?php namespace Northamericanweb\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebReviews2 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->smallInteger('email');
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
