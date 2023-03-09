<!-- 
1. Write a PHP script to:
• transform a string to all uppercase letters.
• transform a string to all lowercase letters.
• make a string’s first character uppercase. 
• make a string’s first character of all the words uppercase.
-->

<?php
    echo strtoupper("Dhruvesh")."<br>";
    echo strtolower("Dhruvesh")."<br>";
    echo ucfirst("dhruvesh")."<br>";
    echo ucwords("dhruvesh vora");
?>