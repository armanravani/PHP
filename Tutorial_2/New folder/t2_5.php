<?php
    $text="my name is disha makati";
    $s_char='m';
    $count=0;
    for($x=0;$x<strlen($text);$x++)
    {
        if(substr($text,$x,1)==$s_char)
        {
            $count=$count+1;
        }
    }
    echo $count."\n";
?>    