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

class Exceptii extends Exception {
  public  function tratare_exceptii(){
        echo "Trebuie sa introduceti numerele";
    }
    public  function tratare_exceptii2(){
        echo "Introduceti numere pozitive";
    }
}
try{
if($primul<0||empty($ultimul)||empty($elemente)) {
    throw new Exceptii();
    exit;

}
}catch (Exceptii $e){
    $e->tratare_exceptii();
}
try {
    if (!empty($elemente) && ($elemente < 1)) {
        throw new Exceptii();
        exit;
    }
}catch (Exceptii $exceptii){
    $exceptii->tratare_exceptii2();
}
class Exemplu
{
   public function afisare_multiplu($sirul, $numar)
    {
        foreach ($sirul as $value) {
            if ($value % $numar == 0) {
                var_dump($value);
            }
        }
    }

   public function numar_multiplu($sirul, $numar)
    {
        $count = 0;
        foreach ($sirul as $value) {
            if ($value % $numar == 0) {
                $count++;
            }

        }
        echo $count . "<br/>";
    }

   public function suma_multiplu($sirul, $numar)
    {
        $sum = 0;
        foreach ($sirul as $value) {
            if ($value % $numar == 0) {
                $sum = $sum + $value;
            }

        }
        echo $sum . "<br/>";
    }

}
echo "<pre>";
print_r($_POST);

$sir=range($primul+1,$ultimul-1);
$sir_maxim=array_slice($sir,0,$elemente);
echo "<pre>";
var_dump($sir_maxim);

$var=new Exemplu();
$var->afisare_multiplu($sir_maxim,3);
$var->numar_multiplu($sir_maxim,4);
$var->suma_multiplu($sir_maxim,5);


