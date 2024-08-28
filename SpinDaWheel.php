<?php
$outCome = ['A' =>"A", 'B'=>"B", 'C'=>"C"];
$totalarray = [];
$temp = "";
$space =" ";
$i = 0;
$t = 0;
$return = 0;
$total = 0;
while ($total < 500 && $t<20){
    for ($i=0; $i < 3; $i++ )
    {
        $temp .= array_rand($outCome);
    }
    $return_value = match ($temp) {
        "AAA","BBB", "CCC"=> 100,
        "AAB", "ABA", "BAA", "ABB", "BBA", "BAB", "BCC", "CBC", "CCB", "ACC", "CAC", "CCA", "CAA", "BBC", "CBB", "AAC", "BCB", "ACA"=> 50,
        "ABC", "CAB", "BAC", "ACB", "CBA", "BCA" => 0,
    };
    $temp = "";
}
echo($total);
