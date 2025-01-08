In PHP, a common yet subtle error arises when dealing with references and objects.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = &$obj1; // $obj2 is now a reference to $obj1

$obj2->value = 10;

echo $obj1->value; // Outputs 10, as expected

$obj2 = new MyClass(); // This line is problematic!

echo $obj1->value; // Still outputs 10!  Unexpected.
```

The issue lies in re-assigning `$obj2`.  While it was initially a reference to `$obj1`, reassigning it to a *new* `MyClass` object breaks the reference, but doesn't alter `$obj1`'s value.  This can lead to unexpected behavior if not carefully considered, especially in complex applications where references are extensively used.