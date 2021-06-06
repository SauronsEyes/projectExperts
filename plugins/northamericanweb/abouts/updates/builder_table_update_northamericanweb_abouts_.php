<?php namespace Northamericanweb\Abouts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNorthamericanwebAbouts extends Migration
{
    public function up()
    {
        Schema::table('northamericanweb_abouts_', function($table)
        {
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('northamericanweb_abouts_', function($table)
        {
            $table->string('description', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
