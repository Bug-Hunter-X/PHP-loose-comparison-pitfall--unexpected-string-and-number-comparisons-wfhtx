The solution lies in consistently using the strict comparison operator (`===`) instead of the loose comparison operator (`==`) when comparing strings and numbers in PHP.  This ensures that both the value and type of the operands are compared, eliminating the potential for unexpected type coercion.

Here's the corrected code:
```php
$string1 = '10';
$string2 = '10.0';

if ($string1 === $string2) {
  echo "Strings are equal (strict comparison)";
} else {
  echo "Strings are NOT equal (strict comparison)";
}
```
This version will correctly print "Strings are NOT equal (strict comparison)", reflecting the fact that although the values are numerically equivalent, their types differ.  This approach enhances code predictability and prevents subtle bugs arising from PHP's type juggling.