<?php namespace Northamericanweb\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebReviews3 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->string('email', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_reviews_', function($table)
        {
            $table->smallInteger('email')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
