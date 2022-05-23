<!DOCTYPE html>
<html>
<body>

<?php
for($i=1;$i<=50;$i++){
if($i % 3 == 0){
// kelipatan 3
echo 'foo<br>';
}
else if($i % 5 == 0){
// kelipatan 5
echo 'bar<br>';
}
else if($i % 3 == 0 && $i % 5 == 0){
// kelipatan keduanya
echo 'foobar<br>';
}
else{
echo "$i<br>";
}
}

?>

</body>
</html>