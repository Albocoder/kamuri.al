<?php
    $lastpage = $_SERVER['HTTP_REFERER'];
    session_start(); session_unset(); session_destroy();
    $headingTo = 'index_al';
    if(strpos($lastpage,'_al')!== false /*|| strpos($lastpage,'_al')!== false*/)
        $headingTo = 'index_al';
    else
        $headingTo = 'index';
    echo '<!DOCTYPE html><head><meta http-equiv="refresh" content="0;url='.$headingTo.'.php" /></head>';
?>