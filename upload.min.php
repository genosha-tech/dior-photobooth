<?php

// (A) SET THE DESTINATION FOLDER
$source = $_FILES["upimage"]["tmp_name"];
$n = rand(1000000,9999999);
$destination = "images/uploaded".$n.".png";

// (B) MOVE UPLOADED FILE TO DESTINATION
echo move_uploaded_file($source, $destination) ? $n : "ERROR";