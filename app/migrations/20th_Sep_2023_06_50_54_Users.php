<?php

namespace Thunder;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Users class
 */
class Users extends Migration
{


    /** For Creating an Table **/
    public function up()
    {
        /** Creating an Table **/
        $this->addColumn('id int(11) NOT NULL AUTO_INCREMENT');
        $this->addColumn('username varchar(30) NULL');
        $this->addColumn('email varchar(101) NULL');
        $this->addColumn('role varchar(21) NULL');
        $this->addColumn('password varchar(255) NULL');
        $this->addColumn('date_created datetime NULL');
        $this->addColumn('date_updated datetime NULL');
        $this->addPrimaryKey('id');
        /**
        $this->addUniqueKey();
        $this->addKey();
        */
        
        $this->createTable('users');
        
        /** Inserting an Data **/
        $this->addData('username', 'Admin');
        $this->addData('email', 'email@email.com');
        $this->addData('password', password_hash('password', PASSWORD_DEFAULT));
        $this->addData('role', 'admin');
        $this->addData('date_created', date("Y-m-d H:i:s"));
        $this->addData('date_updated', date("Y-m-d H:i:s"));
        $this->insertData('users');
       

    } // End Method


    /** For Droping an Table **/
    public function down()
    {
        $this->dropTable('users');
    } // End Method

}