# PHP Reference Reassignment Bug

This repository demonstrates a subtle yet important bug in PHP concerning object references and reassignment.  When an object reference is reassigned to a new object, the original object remains unaffected.  This can lead to unexpected behavior and hard-to-debug issues in your PHP code.

The `bug.php` file shows the problematic code, while `bugSolution.php` offers a solution and explains how to avoid this issue.

## Bug Description
The code unexpectedly fails to update the original object when the reference is reassigned.  This happens because reassignment breaks the reference, and any changes made after the reassignment are only reflected on the newly assigned object.