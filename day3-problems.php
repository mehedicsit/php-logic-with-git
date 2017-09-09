<?php
// problem one
// find a output like below
// 1*5 =5 1*6 =6 1*7 =7 1*8 =8 2*5 =10 2*6 =12 2*7 =14 2*8 =16 3*5 =15 3*6 =18 3*7 =21 3*8 =24 4*5 =20 4*6 =24 4*7 =28 4*8 =32 

for ($i=1;$i<=4;$i++){
    for($j=5;$j<=8;$j++){
        $sum="$i*$j =". $i*$j." "."+"."1 ";
       echo  substr($sum, 0, -1);
       echo "<br>";
        
        
    }

}


// Problem two
// create a output like 
/**

*
*
*
*
*
**************

*/
/*for ($row=0; $row<=6; $row++)
{
  for ($column=0; $column<=6; $column++)
	{

  if ($column == 1 or $row == 6 )
            echo "*"."  ";    
             
	}    

echo "<br>";
}*/