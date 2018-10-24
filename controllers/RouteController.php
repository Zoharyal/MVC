<?php
namespace Controller;
use Controller\EmployeeController;
require_once('config/entityManager.php');

class RouteController
{
    static public function home() {
        echo '<h1>This is home</h1>';
    }
    static public function employeesList() {
        $employeeRepo = $entityManager->getRepository(Employee::class);
        $emArray = $employeeRepo->findAll();
    }
    static public function employee() {
        $employee = new employeeController;
        $employee->getOne();
    }
}