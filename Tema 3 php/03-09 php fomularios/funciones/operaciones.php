<?php
function fibonacci($n){
    if($n==1){
        return 0;
    }
    else if($n==2){
        return 1;
    }
    else{
        return fibonacci($n-1)+fibonacci($n-2);
    }
}
function factorial($n){
    if($n==0){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }
}
?>