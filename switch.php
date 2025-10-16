<?php
 
 $myTimeFor = "Chai";
 switch ($myTimeFor) {
    case "Breakfast":
        echo "Good morning! It's breakfast time 🍳";
        break;

    case "Lunch":
        echo "Good afternoon! It's lunch time 🍛";
        break;

    case "Chai":
        echo "Good evening! It's chai time 🍛";
        break;

    case "Dinner":
        echo "Good evening! It's dinner time 🍽️";
        break;

    default:
        echo "Please enter a valid eating of time, Like this (Breakfast, Lunch, Chai, Dinner).";
}
?>