<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1574342481_createNews
    extends Migration
{

    public function up()
    {
    	$this->createTable('news', [
    		'title' => ['type' => 'string'],
    		'lead' => ['type' => 'text']
	    ]);
    }

    public function down()
    {
    	$this->dropTable('news');
    }
    
}