<html>
<head>
</head>
<body>
    <form name="form1" action="" method="post">
        Angka 1 <input type="text" value="7">
        Angka 2 <input type="text" value="2">
    </form>                
        <?php 
        function bagi($a,$b){
        $x = 0;
        while($a>1){
        $a=$a-$b;
        $x++;
        }
        return $x;
        }
        $hasil=bagi(7,2);
        echo $hasil;
    ?>
<body>
</html>