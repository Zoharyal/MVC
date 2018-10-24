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
    public function employee($id) {
        $employeeRepo = $this->em->getRepository(Employee::class);
        $employee = $employeeRepo->find($id);
        var_dump($employee);
    }

    public function delete($id) {
        $entityManager = $this->em;
        $employeeRepo = $entityManager->getRepository(Employee::class);
        $employee = $employeeRepo->find($id);
        $entityManager->remove($employee);
        $entityManager->flush($employee);
    }

    public function create() {
        // wait for form data
        $newEmployee = new Employee();
        $newEmployee->setFirstname("Testez5");
        $newEmployee->setLastname("Allo");
        $newEmployee->setRole("Collabo");
        $this->em->persist($newEmployee);
        $this->em->flush();
    }

}