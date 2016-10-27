<?php
namespace Custom;

use Zend\Diactoros\Response\JsonResponse;
use Application;

class CustomEmployee extends Application\Employee {

   function addEmployee($firstName = '', $lastName = '', $phone = '', $address = '', $dateOfBirth = '') {
       $this->createMysqlConnection();
       $query = 'INSERT INTO employee(`first_name`, `last_name`, `phone`, `address`, `date_of_birth`) VALUES(\''.$firstName.'\', \''.$lastName.'\', \''.$phone.'\', \''.$address.'\',\''. $dateOfBirth . '\')';
       $result = $this->executeQuery($query);
       $this->closeConnection();
       return $result;
   }
}
