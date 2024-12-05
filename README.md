# PHP Object Reference Bug

This repository demonstrates a subtle bug in PHP related to object references.  When objects are assigned using the assignment operator (=), a reference is created rather than a copy.  Modifying one object will unexpectedly modify the other.

The `bug.php` file contains the buggy code. The `bugSolution.php` demonstrates how to avoid this issue using cloning. 

## How to Reproduce

1. Clone the repository.
2. Run `bug.php` from your command line using PHP.
3. Observe the unexpected output. 

## Solution

To avoid this issue, use `clone` to create a new object and avoid unintended changes to the original object.  See `bugSolution.php` for the corrected code.