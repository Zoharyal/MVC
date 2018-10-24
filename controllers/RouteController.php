<?php
namespace Controller;
// use Controller\EmployeeController;
use Model\Entity\Employee;
// use Doctrine\ORM\EntityManager;
// require_once('config/entityManager.php');

class RouteController
{
    protected $em;
  
    public function __construct() {
        $this->em = require_once('./config/entityManager.php');
    }
    
    static public function home() {
        echo '<h1>This is home</h1>';
    }
    public function employeesList() {
        // $entityManager = $this->getDoctrine()->getManager();
        $employeeRepo = $this->em->getRepository(Employee::class);
        $emArray = $employeeRepo->findAll();
        var_dump($emArray);die;
    }
    static public function employee() {
        // $employee = new employeeController;
        // $employee->getOne();
    }
}