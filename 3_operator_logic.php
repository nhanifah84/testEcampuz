<html>
<head>
</head>
<body>
<form name="form1" action="" method="post">
                Input Angka <input type="text" name="angka1">
                Input Angka <input type="text" name="angka2">
                <input type="submit">
            </form>                
            <?php  
            if (isset($_POST["angka1"])) {
                $angka1 = $_POST["angka1"];
                $angka2 = $_POST["angka2"];
                $hasil = $angka1 / $angka2;
                echo $hasil;                            
            }          
            ?>
<body>
</html>