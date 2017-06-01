<?php 

        session_start();  


function drawBoard() 
{ 
            global $cBoard; 

                    $R = "<img blackPiece.gif>"; //Red piece 
                    $B = "<img blackPiece.gif>";     //black piece 
                    $ES = "<img src=blank.gif>"; //black square image 
                    $IS = "<img src=blank1.gif>"; //red square image 





    $cBoard = array( 
              array($IS, $R, $IS, $R, $IS, $R, $IS, $R), 
              array($R, $IS, $R, $IS, $R, $IS, $R, $IS), 
              array($IS, $R, $IS, $R, $IS, $R, $IS, $R), 
              array($ES, $IS, $ES, $IS, $ES, $IS, $ES, $IS), 
              array($IS, $ES, $IS, $ES, $IS, $ES, $IS, $ES), 
              array($B, $IS, $B, $IS, $B, $IS, $B, $IS), 
              array($IS, $B, $IS, $B, $IS, $B, $IS, $B), 
              array($B, $IS, $B, $IS, $B, $IS, $B, $IS) 
    ); 



            echo "<table border='3' width='200'>\n"; 
            foreach ($cBoard as $row) 
            { 
                  switch($row) 
                  { 
                      case "8": $row = 0; break; 
                      case "7": $row = 1; break; 
                      case "6": $row = 2; break; 
                      case "5": $row = 3; break; 
                      case "4": $row = 4; break; 
                      case "3": $row = 5; break; 
                      case "2": $row = 6; break; 
                      case "1": $row = 7; break; 

                  } 

                   







}
}
?>

