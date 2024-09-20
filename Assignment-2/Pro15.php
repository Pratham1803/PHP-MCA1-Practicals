<?php 
    $start = 10;
    $end = 1;
    $forward = "R";


    if($forward =="F" ){
        if($start < $end){
            for($i=$start;$i<=$end;$i++){
                echo "$i ";
            }
        }else{
            echo "Start number should be less than End number.";
        }
    }elseif($forward == "R"){
    if($start > $end){
        for($i=$start;$i>=$end;$i--){
            echo "$i ";
        }
    }else{
        echo "End number should be less than Start number.";
        }}
    else{
        echo "Please provide a Proper Input";
    }
    ?>