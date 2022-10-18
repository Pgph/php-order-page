<?php

// $quotes = readfile('readme.txt');
// echo $quotes;

$file = '/quotes.txt';

//open file
$handle = fopen($file, 'a+');

//read file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

//read single line
// echo fgets($handle);


//single character
// echo fgetc($handle);

//writing to a file
// fwrite($handle, "\nEverything is a bullshit");

// fclose($handle);
unlink($file);
