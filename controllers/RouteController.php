<?php
namespace Controller;
use Controller\EmployeeController;

class RouteController
{
    static public function home() {
        echo '<h1>This is home</h1>';
    }
    static public function employeesList() {
        $employees = new EmployeeController;
        $employees->getAll();
    }
    static public function employee($id) {
        $employee = new employeeController;
        $employee->getOne($id);
    }
}