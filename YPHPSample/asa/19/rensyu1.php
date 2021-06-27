<?php

$games = [
  1 => [1,3,'W','L'],
  2 => [2,1,'W','L'],
  3 => [2,3,'W','L'],
];

?>

<table border='1'>
	<?php for($i=1; $i<=count($games); $i++){ ?>
	<tr>
		<?php for($j=1; $j<=count($games); $j++){ ?>
			<td>
				<?php var_dump($i,$j); ?>
				<?php if($i === $j){ ?>
					-
				<?php }else if($i == $games[$i][0] && $j == $games[$i][1]){ ?>
					<?php echo $games[$i][2]; ?>
				<?php }else if($j == $games[$i][0] && $i == $games[$i][1]){ ?>
					<?php echo $games[$i][3]; ?>
				<?php } ?>
			</td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>


<!-->
