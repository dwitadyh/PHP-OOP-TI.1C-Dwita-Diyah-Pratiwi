<!DOCTYPE html>
<html>
<body>

<?php
function printIterable(iterable $x) {
  foreach($x as $item) {
    echo $item;
  }
}

// Called with an array:
printIterable(["d", "w", "i"]);

// Called with an object:
$iterator = new ArrayIterator(["t", "a"]);
printIterable($iterator);
?>

</body>
</html>