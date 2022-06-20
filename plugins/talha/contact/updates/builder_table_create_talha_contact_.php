<?php namespace Talha\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTalhaContact extends Migration
{
    public function up()
    {
        Schema::create('talha_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('member_name');
            $table->integer('phone_number');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('talha_contact_');
    }
}
