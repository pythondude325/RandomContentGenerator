#!/bin/php

<?php

// access the files
$firstnames = file("FirstNames.txt");
$lastnames = file("LastNames.txt");
$verbs = file("Verbs.txt");
$adjectives = file("Adjectives.txt");
$nouns = file("Nouns.txt");
$tags = file("Tags.txt");
$text = file("Text.txt");
$domains = file("Domains.txt");

// set my variables
$firstname = trim($firstnames[array_rand($firstnames)]); // for some reason when i retrieve the files i get an extra space at the end of the line
$lastname = trim($lastnames[array_rand($lastnames)]);    // substr($x, 0, -1) trims off that extra space
$verb = trim($verbs[array_rand($verbs)]);
$adjective = trim($adjectives[array_rand($adjectives)]);
$noun = trim($nouns[array_rand($nouns)]);
$title = $verb . " " . $adjective . " " . $noun; // this strings together the content for the <title> tag
$email = strtolower($firstname) . "." . strtolower($lastname) . "@" . trim($domains[array_rand($domains)]); // does the same exept it's for the <email> tag


// tag loops

$numoftags = mt_rand(1, 4); // specifies how many tags
for ($i = 0; $i < $numoftags; ++$i) { // generate the tags
	$currenttagindex = array_rand($tags); // generate a random index from $tags
	$currenttag = $tags[$currenttagindex]; // get the current tag from $currenttagindex
	unset($tags[$currenttagindex]); // unset said tag so that i do not get it again when picking (two lines above)
	$personaltagslist[$i] = trim($currenttag);
}

sort($personaltagslist); // sort the list in alphabetical order

$personaltags = ""; 
for ($i = 0, $size = count($personaltagslist); $i < $size; ++$i) { // goes through a loop for all the elements
	
	$personaltags = $personaltags . strtolower($personaltagslist[$i]); // append the current element of the loop to personaltags
	
	if ($i != ($size - 1)) {
		$personaltags = $personaltags . ", "; // append a comma and a space if not on the last element
	}
}


// text loops

$numoftext = mt_rand(3, 10); // specifies how many paragraphs of text
for ($j = 0; $j < $numoftext; ++$j) { // this loop is used to make the paragraphs of text for the <text> item
	$personaltextlist[$j] = trim($text[array_rand($text)]); // puts a random element of $text into $personaltextlist
}

$personaltext = ""; 
for ($j = 0, $size = count($personaltextlist); $j < $size; ++$j) { // goes through a loop for all the elements

	$personaltext = $personaltext . $personaltextlist[$j]; // append the current element of the loop to personaltext
	
	if ($j != ($size - 1)) {
		$personaltext = $personaltext . "\n\n"; // append two new lines and a space if not on the last element
	}
}


// actualy outputs the data
echo "<data>";
echo "<firstname>" . $firstname . "</firstname>";
echo "<lastname>" . $lastname . "</lastname>";
echo "<title>" . $title . "</title>";
echo "<tags>" . $personaltags . "</tags>";
echo "<text>" . $personaltext . "</text>";
echo "<email>" . $email . "</email>";
echo "</data>";

?>
