<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Stagiu</title>
        <link rel="stylesheet" type="text/css" href="public/reset.css"/>
        <link rel="stylesheet" type="text/css" href="public/style.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div class="line center bold">
                <h1>PHPentaStagiu 2018</h1>
                <h2>M01.03 <span class="fun"> The Fun One</span></h2>
                <h3>
                    <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank">M01.02</a>
                </h3>
            </div>
            <div class="line">
                <ol class="ml20">
                    <li>Generati un array de numere
                        <ul>
                            <li>cuprins intre <span class="bold">Numar de pornire</span> si <span class="bold">Numar de sfarsit</span> excluzand cele doua numere</li>
                            <li>numarul maxim de elemente este <span class="bold">Numar de elemente</span></li>
                        </ul>
                    </li>
                    <li>Afisati toate numerele multiplu de 3</li>
                    <li>Numar de numere multiplu de 4</li>
                    <li>Suma numerelor multiplu de 5</li>
                </ol>
            </div>
            <div class="line">
                <form method="POST" class="center">
                    <p class="label">Numar de pornire</p>
                    <input type="text" name="startPoint"/>

                    <p class="label">Numar de sfarsit</p>
                    <input type="text" name="endPoint"/>

                    <p class="label">Numar de elemente</p>
                    <input type="text" name="iterations"/>

                    <br/><br/>
                    <input type="submit"/>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </body>
</html>

<?php
if (!$_POST) {
    exit;
}
$primul=$_POST['startPoint'];
$ultimul=$_POST['endPoint'];
$elemente=$_POST['iterations'];
if($primul<0||empty($ultimul)||empty($elemente)){
    echo "Trebuie sa introduceti numerele";
    exit;


}
if (!empty($elemente)&&($elemente<1)){
    echo "Introduceti numere pozitive";
    exit;
}

function afisare_multiplu($sirul,$numar){
        foreach ($sirul as $value){
            if($value%$numar==0){
                var_dump($value);
            }
        }
   }
function numar_multiplu($sirul,$numar){
    $count=0;
    foreach ($sirul as $value){
        if($value%$numar==0){
            $count++;
        }

    }echo $count."<br/>";
}

function suma_multiplu($sirul,$numar){
    $sum=0;
    foreach ($sirul as $value){
        if($value%$numar==0){
            $sum=$sum+$value;
        }

    }echo $sum."<br/>";
}


echo "<pre>";
print_r($_POST);

$sir=range($primul+1,$ultimul-1);
$sir_maxim=array_slice($sir,0,$elemente);
echo "<pre>";
var_dump($sir_maxim);
echo "Numerele multiplu de 3: <br/>";
afisare_multiplu($sir_maxim,3);
echo "Numarul de numere  multiplu de 4: <br/>";
numar_multiplu($sir_maxim,4);
echo "Suma numerelor multiplu de 5: <br/>";
suma_multiplu($sir_maxim,5);
echo "dffdggf";
echo 'ffsdfd0';
echo 'adaugare';
echo "dddd";


