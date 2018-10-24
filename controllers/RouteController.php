<?php
namespace Controller;

class RouteController
{
    static public function home() {
        echo '<h1>This is home</h1>';
    }
    static public function employeesList() {
        echo '<h1>Employees List</h1>';
    }
    static public function employee() {
        echo '<h1>An employee\'s page</h1>';
    }
}