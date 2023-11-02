<?php //opening php tag

	$firstName = "Jane";
	$age = 12;
	$height = 15.2;
	$registered = true;
	$class = null;

	echo var_dump($firstName);
	//arrays
	//indexed array
	$subject = array('maths','science', 'english');
	echo "<br>";
	echo var_dump($subject);
	echo $subject[0];
	//associative arrays
	$marks = array('maths'=> 50, 'science'=> 45, 'english'=> 90);
	echo "<br><br>".$marks['science'];
	//loop through indexed array
	foreach ($subject as $subjectElement) {
		// code...
		echo $subjectElement;
		echo "<br>";
	}
	//loop through associative array
	foreach ($marks as $mark => $markValue){
		echo "<br>";
		echo "She scored $markValue in $mark";

	}
	//multidimensional array
	$studentScores = array(
		array(12,45),//index 0
		array(34,23) //index 1
	);
	echo $studentScores[1][1];
	//function without parameters
	function helloWorld() {
		$name = 'Jane';
		echo "Hello world $name";
	}
	helloWorld();
	//function with parameters
	function helloUser($user){
		echo "<br>Hello $user";
		return $user;
	}
	helloUser("Kim");
	//for loop
	for ($i=1; $i < 6; $i++) { 
		// code...
		echo "This is round ".$i."<br>";
	}
	//while loop
	$i = 0;
	while ($i<4) {
		// code...
		echo "Number ".$i."<br>";
		$i++;
	}
	//conditional statements
	$j = 16;
	if ($j < 18) {
		// code...
		echo "Too young";
	} elseif ($j>18) {
		// code...
		echo "You are qualified";
	}else{
		echo "Soon";
	}

// closing php tag?> 