<?php
class Employee
{
    public $empID;
    public $name;
    public $salary;

    function __construct($id, $name, $salary)
    {
        $this->empID = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    function displayEmployee()
    {
        echo "Employee ID: $this->empID <br>";
        echo "Name: $this->name <br>";
        echo "Salary: Rs. $this->salary <br><br>";
    }
}

$e1 = new Employee(101, "Rita", 35000);
$e2 = new Employee(102, "Sima", 30000);
$e3 = new Employee(103, "Nima", 45000);

$e1->displayEmployee();
$e2->displayEmployee();
$e3->displayEmployee();
?>