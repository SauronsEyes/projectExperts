<?php namespace Northamericanweb\Pages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebPages2 extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_pages_', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_pages_', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
