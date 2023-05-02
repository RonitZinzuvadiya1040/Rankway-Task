<!-- 
    Q:['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];
    A: sort arrays into single array 
-->

<?php

    $arr = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];

    $mergedArr = [];
    
    foreach ($arr as $item) {
        if (is_array($item)) {
            $mergedArr = array_merge($mergedArr, $item);
        } else {
            $mergedArr[] = $item;
        }
    }
    echo "<pre>";
    print_r($mergedArr);
    
?>