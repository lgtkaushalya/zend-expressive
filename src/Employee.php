<?php
namespace Application;

use Zend\Diactoros\Response\JsonResponse;

class Employee extends BaseEntity {

   function getEmployee($id = null) {
     $this->createMysqlConnection();
     $query = 'SELECT * FROM employee';

     if ($id) {
       $query .= ' WHERE `id`=\''.$id.'\'';
     }
     $result = $this->getData($this->executeQuery($query));
     $this->closeConnection();
     return $result;
   }

   function addEmployee($firstName = '', $lastName = '', $phone = '', $address = '') {
       $this->createMysqlConnection();
       $query = 'INSERT INTO employee(`first_name`, `last_name`, `phone`, `address`) VALUES(\''.$firstName.'\', \''.$lastName.'\', \''.$phone.'\', \''.$address.'\')';
       $result = $this->executeQuery($query);
       $this->closeConnection();
       return $result;
   }
}
