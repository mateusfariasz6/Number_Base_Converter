<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexPageStyle.css" media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
    
    <title>Conversor de bases numéricas</title>
</head>

<body>
    <?php 
        require('Views/header/header.php');
        require('Views/nav/nav.php');
        require('Components/CompDecBin.php')
    ?>
    
    
    
    
    <?php
       $numDecimal = $_POST['numeroNaBaseDez'];
        $i = 0;
        $numDecimal = intval($numDecimal);
        
        while($numDecimal > 0){
            if($numDecimal % 2 == 0){
                $binario[$i] = $numDecimal % 2;
                $numDecimal = $numDecimal / 2;
                $i++;
            }
            else if($numDecimal % 2 != 0){
                $binario[$i] = $numDecimal % 2;
                $numDecimal = floor($numDecimal / 2);
                $i++;
            }
        }
        $binario = array_reverse($binario, false);

        for($i=0; $i < count($binario); $i++){
            echo $binario[$i];
        }

        
    
    ?>




    <?php
        require('Views/footer/footer.php');
    ?>
</body>

</html>