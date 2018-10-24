<?php
namespace Controller;
require_once('config/entityManager.php');

use Model\Entity\Employee;

class EmployeeController
{
    public function getAll() {
        $employeeRepo = $entityManager->getRepository(Employee::class);
        $emArray = $employeeRepo->findAll();
    }

    public function getOne($id) {
        $employeeRepo = $entityManager->getRepository(Employee::class);
        $employee = $employeeRepo->find($id);
    }

    public function create() {
        $employee = new Employee();
        // FORM 
    }
    
}