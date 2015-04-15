<?php

# access the files
$firstnamesfile = fopen("FirstNames.txt", "r") or die("Unable to open FirstNames.txt");
$lastnamesfile = fopen("LastNames.txt", "r") or die("Unable to open LastNames.txt");
$verbsfile = fopen("Verbs.txt", "r") or die("Unable to open Verbs.txt");
$adjectivsfile = fopen("Adjectives.txt", "r") or die("Unable to open Adjectives.txt");
$nounsfile = fopen("Nouns.txt", "r") or die("Unable to open Nouns.txt");
$tagsfile = fopen("Tags.txt", "r") or die("Unable to open Tags.txt");
$textfile = fopen("Text.txt", "r") or die("Unable to open Text.txt");

# read from the files into arrays by line
$firstnames = fread($firstnamesfile, filesize("FirstNames.txt"));
$lastnames = fread($lastnamesfile, filesize("LastNames.txt"));
$verbs = fread($verbsfile, filesize("Verbs.txt"));
$adjectives = fread($adjectivesfile, filesize("Adjectives.txt"));
$nouns = fread($nounsfile, filesize("Nouns.txt"));
$tags = fread($tagsfile, filesize("Tags.txt"));
$text = fread($textfile, filesize("Text.txt"));

echo "<data>";
echo "	<firstname>" . $firstnames[rand(0, count($firstnames)] . "</firstname>";
echo "</data>";






?>
