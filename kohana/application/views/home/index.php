<div class="col-md-10">
	Welcome <?php echo $user->username; ?>! <br>
	What about some <a href="
	<?php 
	echo Route::get('default')->uri(array(
	'controller' => 'match',
	'action' => 'index'
	)); 
	?>
	">matches?</a>
</div>

<div class="col-md-2">Your points: <?php echo $user->points;?></div>
