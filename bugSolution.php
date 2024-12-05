function myFunction() {
  // This function demonstrates the solution to the object reference problem.
  class MyClass {
    public $value;
  }

  $obj1 = new MyClass();
  $obj1->value = 10;

  $obj2 = clone $obj1; // Create a copy using clone

  $obj2->value = 20; // Modify $obj2 without affecting $obj1

  echo "\$obj1->value: " . $obj1->value; // Output: 10
  echo "\$obj2->value: " . $obj2->value; // Output: 20
}

myFunction();