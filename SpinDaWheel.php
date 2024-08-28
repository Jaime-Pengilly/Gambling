<?php
$outCome = ['a' =>"A", 'b'=>"B", 'c'=>"C"];
$roll = "";
$temp = "";
$i = 0;
$total = 0;
while ($total < 500 && $i<21){
    for ($i=0; $i < 21;$i++ )
    {

        $temp = array_rand($outCome);
        $roll = $roll . $outCome[$temp];
        $temp = array_rand($outCome);
        $roll = $roll . $outCome[$temp];
        $temp = array_rand($outCome);
        $roll = $roll . $outCome[$temp];
        echo($roll . " : ");
        $return_value = match ($roll) {
            "AAA","BBB", "CCC"=> 100,
            "AAB", "ABA", "BAA", "ABB", "BBA", "BAB", "BCC", "CBC", "CCB", "ACC", "CAC", "CCA" => 50
        }
        $total =+ $return_value;

        $roll = "";
        
    }
}