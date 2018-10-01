<?php
	
	echo "<h2>Even Odd check</h2><br>";
	for($i=0;$i<10;$i++)
	{
		if($i%2 ==0 || $i%3==0 || $i%5==0)
		{
			echo $i."->Odd<br>";
		}
		if($i%2==0)
		{
			echo $i."->Even<br>";
		}
	}
	echo "<h2>Prime check :</h2><br>";
	
		for($i=0;$i<10;$i++)
	{
	$f=0;
	for($j = 2; $j <= $i/2; $j++)
    {
       
        if($i%$j == 0)
        {
            $f = 1;
            break;
        }
    }
	if($f==1)
	{
		echo $i." ->Not Prime<br>";
	}
	else
	{
		echo $i." ->Prime<br>";
	}
	}
?>