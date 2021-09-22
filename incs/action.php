<?php

session_start();

$x = $_POST['radios'];
$y = $_POST['inputY'];
$r = $_POST['check'];


 if (isset($_POST['sendButton'])) {
     $today = date("Y-m-d H:i:s");
     $start = microtime(true);

     foreach ($r as $item) {
         if ($x >= 0 and $y >= 0 and $y <= -($x) + $item/2 or
             $x >= 0 and $x <= $item and $y <= 0 and $y >= -($item/2) or
             ($x) <= 0 and ($y) <= 0 and sqrt(($x) ** 2 + ($y) ** 2) <= $item/2) {
             $bool = 'true';
         } else {
             $bool = 'false';
         }
         $totalTime = round(microtime(true) - $start, 5);

         $_SESSION['table'] .= "<tr>" .
             "<td>" . $x . "</td>" .
             "<td>" . $y . "</td>" .
             "<td>" . $item . "</td>" .
             "<td>" . $today . "</td>" .
             "<td>" . $totalTime . "</td>" .
             "<td>" . $bool . "</td>" .
             "</tr>";
     }
     header("Location: ../index.php");

 } else if (isset($_POST['resetButton'])) {
     unset($_SESSION['table']);
     header("Location: ../index.php");
 }


