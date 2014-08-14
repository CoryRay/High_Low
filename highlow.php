<?php

// cpu picks a random number
// prompt to pick a number
// user sees higher/lower according to guess
// correct guess leads to game over

$answer = mt_rand(1, 100);
$guesses = 1;
//

fwrite(STDOUT, "Let's play a game. Guess what number I am thinking of.\n");

$user_guess = fgets(STDIN);

while ($user_guess != $answer) {

	// prompt user for another answer
	// capture stdin
	fwrite(STDOUT, " Guess again.\n");
	$user_guess = fgets(STDIN);
	$guesses++; //tracks guesses for use later

	if ($user_guess > $answer) {
		echo "Lower.";
	}
	
	elseif ($user_guess < $answer) {
		echo "Higher.";
	}

	elseif ($user_guess == $answer) {
		echo "Good guess!\n";
		echo "It took you $guesses tries to figure me out.";
		exit(0);
	}


} // end while statement

?>