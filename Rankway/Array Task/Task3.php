<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["PETER"=>"35","BEN"=>"37","JOE"=>"43"]; 
-->

<?php
    
    $array = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
    $newArray = array();

    // convert key uppercase
    foreach ($array as $key => $value) {
        $newKey = "";
        // echo "demo";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = substr($key, $i, 1); // ("Peter",0,1) // return P
            
                $char = strtoupper($char);
            
            $newKey .= $char;
        }
        $newArray[$newKey] = $value;
        // $upper_key = strtoupper($key);
        // $upper_keys[] = $upper_key;
    }

    print_r($newArray);
?>