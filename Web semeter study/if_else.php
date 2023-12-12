<?php 



        $to =rand(0,100); //rand(); 
        $be =rand(0,100); 
        echo $to." ---- ".$be;


        
        if ($to > $be)
        {
        echo "<br>To is Higher, ";
        echo "value is ".$to;
        }
        elseif ($to == $be)
        {
        echo "<br>Be is Higher ";
        echo "value is ".$be;
        }
        elseif ($to < $be )
        {
        echo "<br>Smaller ".$to;
        }  
        else 
        echo "<br>Out of range"; 


?>