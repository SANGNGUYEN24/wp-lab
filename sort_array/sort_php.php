<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                margin-left: 48px;
            }
        </style>
    </head>
<body>

<?php
$numbers = array(93, 82, 93, 92, 90, 84, 81, 83, 89, 76, 86, 86, 92, 93, 88, 88, 98, 89, 82, 80, 90, 80, 98, 77, 96);
?>
<h2>Using PHP to sort a sequence of numbers</h2> <br>
<h3>Original sequence:</h3>
<p id="origin"> <?php
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo " -> ";
  echo $numbers[$x];
}
?></p>
<h3>Minimum value: </h3>
<p id = "minimum">
    <?php echo (min($numbers))?>
</p>
<h3>Maximum value: </h3>
<p id = "maximum">
        <?php echo (max($numbers))?>
</p>

<h3>After sorting (ascending):</h3>

<?php $result = sort($numbers); ?>

<p id="asc"> <?php
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
echo " -> ";
  echo $numbers[$x];
}
?></p>
<h3>After sorting (descending):</h3>

<?php $result = rsort($numbers); ?>

<p>
<?php
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo " -> ";
  echo $numbers[$x];
}
?>
</p>

</body>
</html>
