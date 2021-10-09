<?php
$r=array('a','a','a');
$b=array('a','a','a');
$score=0;
for($i=0;$i<3;$i++)
			{
					if($r[$i]==$b[$i])
						$score++;
			}
	echo $score;
?>