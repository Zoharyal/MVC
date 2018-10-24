<?php
namespace Controller;

use Model\Entity\Employee;

class ViewController
{
    public function getView($url) {
        if ($url === 'home') {
            echo 'This is Home';
        } 
    }

    public function display($url) {
        if ($url === 'employees') {
            echo 'TEST';
        }
    }
}