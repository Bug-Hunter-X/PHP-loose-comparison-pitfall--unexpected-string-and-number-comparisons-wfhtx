# PHP Loose Comparison Pitfall
This repository demonstrates a common yet subtle bug in PHP related to loose comparison (`==`) when comparing strings and numbers.  The loose comparison operator can lead to unexpected results due to PHP's type juggling behavior, whereas the strict comparison operator (`===`) offers more reliable comparisons.

## The Problem
PHP's loose comparison (`==`) performs type coercion before comparison, leading to unexpected truthy values in some cases. Strict comparison (`===`) checks for both value and type equality, avoiding such ambiguity.

## The Code
The `bug.php` file contains example code that highlights the issue.  The `bugSolution.php` file presents a corrected version utilizing strict comparison.

## How to reproduce
1. Clone this repository.
2. Run `bug.php` and observe the output.
3. Run `bugSolution.php` to see the corrected behavior.

## Solution
Always use strict comparison (`===`) in PHP to prevent unexpected results from type juggling, unless type coercion is explicitly needed for a specific reason. This avoids subtle errors that can be extremely difficult to track down.