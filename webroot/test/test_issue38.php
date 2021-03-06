<?php
// Include config for all testcases
include __DIR__ . "/config.php";



// The title of the test case
$title = "Testing issue 38 - fill to fit, together with background colors";



// Provide a short description of the testcase.
$description = "The issue was to implement fill-to-fit, but it needs some flexibility in how to choose the background color and it also affects rotation of the image (the background color does). So this testcase is both for fill-to-fit and for background color (thereby including a test using rotate).";



// Use these images in the test
$images = array(
    'kodim04.png',
);



// For each image, apply these testcases 
$cache =  "&nc"; // ""; // "&nc"
$testcase = array(
    "$cache&w=300&h=300&fill-to-fit",
    "$cache&w=200&h=400&fill-to-fit",
    "$cache&w=300&h=300&fill-to-fit=ff0000",
    "$cache&w=200&h=400&fill-to-fit=ff0000",
    "$cache&w=300&h=300&fill-to-fit=ff00003f",
    "$cache&w=200&h=400&fill-to-fit=ff00003f",
    "$cache&w=200&h=400&fill-to-fit&bgc=ff0000",
    "$cache&w=300&h=300&fill-to-fit&bgc=ff00003f",
    "$cache&w=300&h=300&ra=45",
    "$cache&w=300&h=300&ra=45&bgc=ff0000",
    "$cache&w=300&h=300&ra=45&bgc=ff00003f",
);



// Applu testcases and present results
include __DIR__ . "/template.php";
