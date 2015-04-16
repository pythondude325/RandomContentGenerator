<?php

// access the files
$firstnames = file("FirstNames.txt");
$lastnames = file("LastNames.txt");
$verbs = file("Verbs.txt");
$adjectives = file("Adjectives.txt");
$nouns = file("Nouns.txt");
$tags = file("Tags.txt");
$text = file("Text.txt");

$firstname = substr($firstnames[array_rand($firstnames)], 0, -1);
$lastname = substr($lastnames[array_rand($lastnames)], 0, -1);
$verb = substr($verbs[array_rand($verbs)], 0, -1);
$adjective = substr($adjectives[array_rand($adjectives)], 0, -1);
$noun = substr($nouns[array_rand($nouns)], 0, -1);
$title = $verb . " " . $adjective . " " . $noun; 
$numoftags = mt_rand(-1, 3); // specfies how many tags
for ($i = 0; $i <= $numoftags; $i++) { // generate the tags
	if ($i < $numoftags) { // makes a comma and space if not on the last item 
		$personaltags .= substr($tags[array_rand($tags)], 0, -1) . ", ";
	} else {
		$personaltags .= substr($tags[array_rand($tags)], 0, -1);
	}
}


echo "&lt;data&gt;";
echo "&lt;firstname&gt;" . $firstname . "&lt;/firstname&gt;";
echo "&lt;lastname&gt;" . $lastname . "&lt;/lastname&gt;";
echo "&lt;title&gt;" . $title . "&lt;/title&gt;";
echo "&lt;tags&gt;" . $personaltags . "&lt;/tags&gt;";
echo "&lt;/data&gt;";





?>
