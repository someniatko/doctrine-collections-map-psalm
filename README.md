Reproduction of doctrine/collection `ArrayCollection#map()` psalm annotation bug.

## How to use

1. execute `composer update`
2. execute `vendor/bin/psalm`

**Expected:**
Psalm reports no errors

**Actual:**

```
ERROR: InvalidScalarArgument - bug.php:23:10 - Argument 1 of Bug\showInts expects array<array-key, int>, array<array-key, string(aa)|string(bbbb)> provided
showInts($lengths);
```

Notice, how `/** @var Collection $collection */` annotation in the
`no-bug.php` fixes the psalm error.
