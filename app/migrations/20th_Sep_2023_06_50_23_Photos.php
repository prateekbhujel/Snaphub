<?php

namespace Thunder;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Photos class
 */
class Photos extends Migration
{


    /** For Creating an Table **/
    public function up()
    {
        /** Creating an Table **/
        $this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
        $this->addColumn('user_id int(11) DEFAULT 0 NOT NULL');
        $this->addColumn('title varchar(100) NULL');
        $this->addColumn('image varchar(1024) NULL');
        $this->addColumn('date_created datetime NULL');
        $this->addColumn('date_updated datetime NULL');
        $this->addPrimaryKey('id');
        $this->addKey('user_id');
        /*
        $this->addUniqueKey();
        */
        
        $this->createTable('photos');
        

    } // End Method


    /** For Droping an Table **/
    public function down()
    {
        $this->dropTable('photos');
    } // End Method

}