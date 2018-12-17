


<html>
	<head>
		</head>
	<body>


		<form action="/FMCoachCalculator/Calculator.php" method="post">
			Determination:<input type ="text" name="determination" size="2" maxlength="2" required><br>
			Level of Discipline:<input type ="text" name="levelOfDiscipline" size="2" maxlength="2" required><br>
			Motivating:<input type ="text" name="motivating" size="2" maxlength="2" required><br>
			Fitness:<input type ="text" name="fitness" size="2" maxlength="2" required><br>
			Goalkeeping:<input type ="text" name="goalkeeping"size="2" maxlength="2"  required><br>
			Attacking:<input type ="text" name="attacking" size="2" maxlength="2" required><br>
			Defending:<input type ="text" name="defending" size="2" maxlength="2" required><br>
			Tactical:<input type ="text" name="tactical"size="2" maxlength="2"  required><br>
			Technical:<input type ="text" name="technical" size="2" maxlength="2" required><br>
			Mental:<input type ="text" name="mental"size="2" maxlength="2"  required><br>
		<input type="submit" name="submit" value="Submit">
		</form>
<?php


if (isset($_POST['submit'])) 
{ 
	$determination = $_POST['determination'];
	$levelOfDiscipline = $_POST['levelOfDiscipline'];
	$motivating = $_POST['motivating'];
	$fitness = $_POST['fitness'];
	$goalkeeping = $_POST['goalkeeping'];
	$tactical = $_POST['tactical'];
	$technical = $_POST['technical'];
	$mental = $_POST['mental'];
	$attacking = $_POST['attacking'];
	$defending = $_POST['defending'];


$fitnessvalue = ($fitness * 9) + (($determination + $levelOfDiscipline + $motivating) *2);
$keepingvalue = ($goalkeeping * 8) + ($tactical * 3) + (($determination + $levelOfDiscipline + $motivating) * 2);
$attackingvalue = ($attacking * 6) + ($tactical * 3) + (($determination + $levelOfDiscipline + $motivating)*2);
$techniquevalue = ($technical * 6) + ($mental * 3) + (($determination + $levelOfDiscipline + $motivating)*2);
$defendingvalue = ($defending * 8) + ($tactical * 3) + (($determination + $levelOfDiscipline + $motivating) * 3);
$shootingvalue = ($technical * 6) + ($attacking * 3) + (($determination + $levelOfDiscipline + $motivating)*2);
$tacticsvalue = ($tactical * 2) + ($determination + $levelOfDiscipline + $motivating);




	$fitStars = "";
	if ($fitnessvalue < 29) {
		$fitStars = 0.5;
	} else if ($fitnessvalue >= 30 && $fitnessvalue < 59  ) {
		$fitStars = 1;
	} else if ($fitnessvalue >= 60 && $fitnessvalue <= 89  ) {
		$fitStars = 1.5;
	} else if ($fitnessvalue >= 90 && $fitnessvalue <= 119  ) {
		$fitStars = 2;
	} else if ($fitnessvalue >= 120 && $fitnessvalue <= 149  ) {
		$fitStars = 2.5;
	} else if ($fitnessvalue >= 150 && $fitnessvalue <= 179  ) {
		$fitStars = 3;
	} else if ($fitnessvalue >= 180 && $fitnessvalue <= 209  ) {
		$fitStars = 3.5;
	} else if ($fitnessvalue >= 210 && $fitnessvalue <= 239  ) {
		$fitStars = 4;
	} else if ($fitnessvalue >= 240 && $fitnessvalue <= 269 ) {
		$fitStars = 4.5;
	} else if ($fitnessvalue >= 270) {
		$fitStars = 5;
	}
	
	$keepStars = "";
	if ($keepingvalue < 39) {
		$keepStars = 0.5;
	} else if ($keepingvalue >= 40 && $keepingvalue < 79  ) {
		$keepStars = 1;
	} else if ($keepingvalue >= 80 && $keepingvalue <= 119  ) {
		$keepStars = 1.5;
	} else if ($keepingvalue >= 120 && $keepingvalue <= 159  ) {
		$keepStars = 2;
	} else if ($keepingvalue >= 160 && $keepingvalue <= 199  ) {
		$keepStars = 2.5;
	} else if ($keepingvalue >= 200 && $keepingvalue <= 239  ) {
		$keepStars = 3;
	} else if ($keepingvalue >= 240 && $keepingvalue <= 279  ) {
		$keepStars = 3.5;
	} else if ($keepingvalue >= 280 && $keepingvalue <= 319  ) {
		$keepStars = 4;
	} else if ($keepingvalue >= 320 && $keepingvalue <= 339  ) {
		$keepStars = 4.5;
	} else if ($keepingvalue >= 340) {
		$keepStars = 5;
	}

	$attackStars = "";
	if ($attackingvalue < 29) {
		$attackStars = 0.5;
	} else if ($attackingvalue >= 30 && $attackingvalue < 59  ) {
		$attackStars = 1;
	} else if ($attackingvalue >= 60 && $attackingvalue <= 89  ) {
		$attackStars = 1.5;
	} else if ($attackingvalue >= 90 && $attackingvalue <= 119  ) {
		$attackStars = 2;
	} else if ($attackingvalue >= 120 && $attackingvalue <= 149  ) {
		$attackStars = 2.5;
	} else if ($attackingvalue >= 150 && $attackingvalue <= 179  ) {
		$attackStars = 3;
	} else if ($attackingvalue >= 180 && $attackingvalue <= 209  ) {
		$attackStars = 3.5;
	} else if ($attackingvalue >= 210 && $attackingvalue <= 239 ) {
		$attackStars = 4;
	} else if ($attackingvalue >= 240 && $attackingvalue <= 269  ) {
		$attackStars = 4.5;
	} else if ($attackingvalue >=270) {
		$attackStars = 5;
	}

	$techStars = "";
	if ($techniquevalue < 29) {
		$techStars = 0.5;
	} else if ($techniquevalue >= 30 && $techniquevalue < 59  ) {
		$techStars = 1;
	} else if ($techniquevalue >= 60 && $techniquevalue <= 89  ) {
		$techStars = 1.5;
	} else if ($techniquevalue >= 90 && $techniquevalue <= 119  ) {
		$techStars = 2;
	} else if ($techniquevalue >= 120 && $techniquevalue <= 149  ) {
		$techStars = 2.5;
	} else if ($techniquevalue >= 150 && $techniquevalue <= 179  ) {
		$techStars = 3;
	} else if ($techniquevalue >= 180 && $techniquevalue <= 209  ) {
		$techStars = 3.5;
	} else if ($techniquevalue >= 210 && $techniquevalue <= 239 ) {
		$techStars = 4;
	} else if ($techniquevalue >= 240 && $techniquevalue <= 269  ) {
		$techStars = 4.5;
	} else if ($techniquevalue >=270) {
		$techStars = 5;
	}
		$defStars = "";
		if ($defendingvalue < 39) {
		$defStars = 0.5;
	} else if ($defendingvalue >= 40 && $defendingvalue < 79  ) {
		$defStars = 1;
	} else if ($defendingvalue >= 80 && $defendingvalue <= 119  ) {
		$defStars = 1.5;
	} else if ($defendingvalue >= 120 && $defendingvalue <= 159  ) {
		$defStars = 2;
	} else if ($defendingvalue >= 160 && $defendingvalue <= 199  ) {
		$defStars = 2.5;
	} else if ($defendingvalue >= 200 && $defendingvalue <= 239  ) {
		$defStars = 3;
	} else if ($defendingvalue >= 240 && $defendingvalue <= 279  ) {
		$defStars = 3.5;
	} else if ($defendingvalue >= 280 && $defendingvalue <= 319 ) {
		$defStars = 4;
	} else if ($defendingvalue >= 320 && $defendingvalue <= 359  ) {
		$defStars = 4.5;
	} else if ($defendingvalue >=360) {
		$defStars = 5;
	}

	if ($shootingvalue < 29) {
		$shootStars = 0.5;
	} else if ($shootingvalue >= 30 && $shootingvalue < 59  ) {
		$shootStars = 1;
	} else if ($shootingvalue >= 60 && $shootingvalue <= 89  ) {
		$shootStars = 1.5;
	} else if ($shootingvalue >= 90 && $shootingvalue <= 119  ) {
		$shootStars = 2;
	} else if ($shootingvalue >= 120 && $shootingvalue <= 149  ) {
		$shootStars = 2.5;
	} else if ($shootingvalue >= 150 && $shootingvalue <= 179  ) {
		$shootStars = 3;
	} else if ($shootingvalue >= 180 && $shootingvalue <= 209  ) {
		$shootStars = 3.5;
	} else if ($shootingvalue >= 210 && $shootingvalue <= 239 ) {
		$shootStars = 4;
	} else if ($shootingvalue >= 240 && $shootingvalue <= 269  ) {
		$shootStars = 4.5;
	} else if ($shootingvalue >=270) {
		$shootStars = 5;
	}
		$tactStars = "";
		if ($tacticsvalue < 9) {
		$tactStars = 0.5;
	} else if ($tacticsvalue >= 10 && $tacticsvalue < 19  ) {
		$tactStars = 1;
	} else if ($tacticsvalue >= 20 && $tacticsvalue <= 29  ) {
		$tactStars = 1.5;
	} else if ($tacticsvalue >= 30 && $tacticsvalue <= 39  ) {
		$tactStars = 2;
	} else if ($tacticsvalue >= 40 && $tacticsvalue <= 49  ) {
		$tactStars = 2.5;
	} else if ($tacticsvalue >= 50 && $tacticsvalue <= 59  ) {
		$tactStars = 3;
	} else if ($tacticsvalue >= 60 && $tacticsvalue <= 69  ) {
		$tactStars = 3.5;
	} else if ($tacticsvalue >= 70 && $tacticsvalue <= 79 ) {
		$tactStars = 4;
	} else if ($tacticsvalue >= 80 && $tacticsvalue <= 89  ) {
		$tactStars = 4.5;
	} else if ($tacticsvalue >=90) {
		$tactStars = 5;
	}
	echo "Fitness: $fitStars </br>";
	echo "Goalkeeping: $keepStars </br>";
	echo "Attacking: $attackStars </br>";
	echo "Ball Control: $techStars </br>";
	echo "Defending: $defStars </br>";
	echo "Shooting: $shootStars </br>";
	echo "Tactics: $tactStars</br>";

}
?>
	</body>
</html>

