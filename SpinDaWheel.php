<?php
$outCome = ['A' =>"A", 'B'=>"B", 'C'=>"C"];
$temp = "";
$i = 0;
$t = 0;
$return = 0;
$total = 0;
while ($total < 500 && $t<21){
    for ($i=0; $i < 3; $i++ )
    {
        $temp .= array_rand($outCome);
    }
    $t++;
    $return_value = match ($temp) {
        "AAA","BBB", "CCC"=> 100,
        "AAB", "ABA", "BAA", "ABB", "BBA", "BAB", "BCC", "CBC", "CCB", "ACC", "CAC", "CCA", "CAA", "BBC", "CBB", "AAC", "BCB", "ACA"=> 50,
        "ABC", "CAB", "BAC", "ACB", "CBA", "BCA" => 0,
    };
    $total += $return_value;
    $totalarray[$temp] = $return_value;
    $temp = "";
    $return_value = 0;
}
foreach ($totalarray as $x => $y) {
    echo "$x : $y\n";    
}
echo("You Won: " . $total . "$\n");