<?php namespace Northamericanweb\Pages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebPages extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_pages_', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_pages_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
