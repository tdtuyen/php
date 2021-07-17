<?php echo "xin chao tuyen"; ?><br>
<?php echo "xin chao tuyen"; ?><br>
<?php
for ($x = 0; $x <= 2; $x++) {
    echo "xin chao tuyen <br>";
}
?>

<?php
$x = 1;
while ( $x <= 10) {
    $x++;
    echo "toi dang hoc vong lap <br>";
}
?>

<?php
$web = array("PHP", "ASP.NET");

foreach( $web as $lang ) {
    echo "$lang <br>";
}
?>
