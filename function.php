<?php

function generatePsw($caratteri, $lenght) {
    // $password = ' aaaa ' . $lenght;

    

    $pswrandom = '';
    if($lenght >=8 && $lenght <= 30){
        for($i = 0; $i < $lenght; $i++) {

            $random_index = rand(0, 2);
            $list = $caratteri[$random_index];

            $random_item = rand(0, count($list) - 1);
            if (is_string($list[$random_item])) {
                $pswrandom .= strtoupper($list[$random_item]);
            } else {
                $pswrandom .= $list[$random_item];
            }
        }
        } else {
            $pswrandom = 'no';
        }
      
        return $pswrandom;
      var_dump($pswrandom);
        
}
?>