<?php
namespace Application;

use Zend\Diactoros\Response\JsonResponse;

class Employee extends BaseEntity {

   function getEmployee() {
     $this->createMysqlConnection();
     $query = 'SELECT * FROM employee';
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
