<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexPageStyle.css" media="screen" />
    <title>Aula</title>
</head>

<body>
    <header class="headerPage">
        <h1 class="title">Conversão de números</h1>
    </header>
    <section class="Conversor">
        <form class="Form" method="POST">
            <h2 class="title_form">Converter Decimal para Binário</h2>
            <div class="input_Number">
                <input type="number" name="numeroNaBaseDez">
            </div>
            <div class="button_Send">
                <button type="submit">Converter para Binário</button>
            </div>
        </form>
    </section>
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




    <section class="Resposta">
    </section>
</body>

</html>