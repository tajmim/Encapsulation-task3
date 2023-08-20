<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Salary must be greater than 0";
        }
    }
}


    $employee = new Employee("John Doe", 50000);
    echo "Employee: " . $employee->getName() . "<br>";
    echo "Salary: $" . $employee->getSalary() . "<br>";

    $employee->setSalary(-1000);


    $employee103->getname();


?>