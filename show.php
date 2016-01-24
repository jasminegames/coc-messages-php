<?php
	$file = file('messages.txt');
	foreach($file as $line){
		echo '<p>'.$line.'</p>';
	}