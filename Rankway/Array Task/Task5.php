<!-- 
    Q: ["35","37","43","30","24","47","27"];
    A: lower to upper;
    A: upper to lower;
    A: lower and upper using function;
-->

<?php    
    
    $myArray = array("35","37","43","30","24","47","27");
    sort($myArray);
    
    echo "Lower to Upper: ";
    $arrlength = count($myArray);
    
    // for($x = 0; $x < $arrlength; $x++) {
    //     echo "<pre>";
    //     //echo "$myArray[$x], ";
    //     //echo "<br>";
	// }
    echo "<pre>";
	print_r($myArray);

?>

<?php 

    $myArray = array("35","37","43","30","24","47","27");
    rsort($myArray);
  	
    echo "Upper to Lower: ";
    $arrlength = count($myArray);
    
    // for($x = 0; $x < $arrlength; $x++) {
    //     echo "<pre>";
    //     //echo "$myArray[$x], ";
    //     //echo "<br>";
	// }
    echo "<pre>";
    print_r($myArray);
    
?>  
