<?php
namespace Controller;

class ViewController
{
    public function getView($url) {
        if ($url === 'home') {
            echo 'This is Home';
        } else if ($url === 'employees') {
            echo 'This is the employees\' list';
        }
    }
}