<!-- 
    Q:["35","37","43","30","24","47","27"];
    A:Create array with 3(n) values like [ ["35","37","43"], ["30","24"]] using function 
-->

<?php
    
    $original_array = ["35","37","43","30","24","47","27"];
    
    $new_array = array_chunk($original_array, 3);
    
    echo "<pre>";
    print_r($new_array);
    
?>