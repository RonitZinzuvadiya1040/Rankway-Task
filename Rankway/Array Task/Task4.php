<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["peter"=>"35","ben"=>"37","joe"=>"43"]; 
-->

<?php
    
    $myArray = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
    $newArray = array();

    // convert key lowercase
    foreach ($myArray as $key => $value) {
        $newKey = "";
        // echo "$key";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = substr($key, $i, 1); // ("Peter",0,1) // return p
            $char = strtolower($char); // convert string in lower case
            $newKey .= $char;
        }
        $newArray[$newKey] = $value;
        // $upper_key = strtoupper($key);
        // $upper_keys[] = $upper_key;
    }
    echo "<pre>";
    print_r($newArray);
    
?>
