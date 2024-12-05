function myFunction() {
  // This function demonstrates an uncommon PHP bug related to object references.
  class MyClass {
    public $value;
  }

  $obj1 = new MyClass();
  $obj1->value = 10;

  $obj2 = $obj1; // Assign by reference

  $obj2->value = 20; // Modifying $obj2 also modifies $obj1

  echo "\$obj1->value: " . $obj1->value; // Output: 20
  echo "\$obj2->value: " . $obj2->value; // Output: 20
}

myFunction();
