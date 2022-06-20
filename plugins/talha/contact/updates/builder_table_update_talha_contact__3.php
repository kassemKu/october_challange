<?php namespace Talha\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalhaContact3 extends Migration
{
    public function up()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->date('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('talha_contact_', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
