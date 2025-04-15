<?php 
    $Sop = ["S" => "Soto", "R" => "Rawon", "K" => "Kimlo"];
    echo "<ol>";
    foreach ($Sop as $key => $value) {
        echo "<li>".$k.' - ' . $v ."</li>" ;
    }
    echo "</ol>";
    sort ($Sop);

?>