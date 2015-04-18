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
$firstname = substr($firstnames[array_rand($firstnames)], 0, -1); // for some reason when i retrieve the files i get an extra space at the end of the line
$lastname = substr($lastnames[array_rand($lastnames)], 0, -1);    // substr($x, 0, -1) trims off that extra space
$verb = substr($verbs[array_rand($verbs)], 0, -1);
$adjective = substr($adjectives[array_rand($adjectives)], 0, -1);
$noun = substr($nouns[array_rand($nouns)], 0, -1);
$title = $verb . " " . $adjective . " " . $noun; // this strings together the content for the <title> tag
$email = $firstname . "." . $lastname . "@" . substr($domains[array_rand($domains)]); // does the same exept it's for the <email> tag

$numoftags = mt_rand(0, 4); // specifies how many tags
for ($i = -1; $i <= $numoftags; $i++) { // generate the tags
	$personaltags[$i] = substr($tags[array_rand($tags)], 0, -1);
	// TODO: implement alphabetical sorting and distinct tags
}

$numoftext = mt_rand(3, 10); // specifies how many paragraphs of text
for ($j = -1; $j <= $numoftext; $j++) { // this loop is used to make the paragraphs of text for the <text> item
	$personaltextlist[$j] = substr($text[array_rand($text)], 0, -1); // puts a random element of $text into $personaltextlist
	$personaltext = $personaltext . $personaltextlist[$j] . ($j < $numoftext) ? "\n\n" : "";
	// that last bit adds two new lines if $j < $numoftext
}

// actualy outputs the data
echo "&lt;data&gt;";
echo "&lt;firstname&gt;" . $firstname . "&lt;/firstname&gt;";
echo "&lt;lastname&gt;" . $lastname . "&lt;/lastname&gt;";
echo "&lt;title&gt;" . $title . "&lt;/title&gt;";
echo "&lt;text&gt;" . $personaltext . "&lt;/text&gt;";
echo "&lt;email&gt;" . $email . "&lt;/email&gt;"
echo "&lt;/data&gt;";





?>
