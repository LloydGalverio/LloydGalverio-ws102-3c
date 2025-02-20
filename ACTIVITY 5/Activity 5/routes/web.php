<?php

use Illuminate\Support\Facades\Route;

// Routes para sa 6 URL : operation1, num1, num2, operation2, num3, num4
Route::get('{operation1}/{num1}/{num2}/{operation2}/{num3}/{num4}', function ($operation1, $num1, $num2, $operation2, $num3, $num4) {
    
    // Function para sa mga operations
    function compute($operation, $a, $b) {
        if ($operation == 'add') {
            return $a + $b; // add
        } elseif ($operation == 'subtract') {
            return $a - $b; // subtract
        } elseif ($operation == 'multiply') {
            return $a * $b; // multiply
        } elseif ($operation == 'divide') {
            return ($b == 0) ? "Error: Division by zero" : $a / $b; // divide with zero check
        } else {
            return "Invalid Operation"; // maglalabas ng error kung and nilagay na operation ay invalid
        }
    }

    // dito gagawin ang pagcompute sa mga nilagay na data 
    $result1 = compute($operation1, $num1, $num2);
    $result2 = compute($operation2, $num3, $num4);

    // Function para sa kulay , kung ang number na inilagay ay even or divisible by 2 ang lalabas na color ay orange at kung hindi naman ay ang color ay blue
    function getTextColor($num) {
        return ($num % 2 == 0) ? "orange" : "blue";
    }

    // Function para sa kulay ng box na kung ang result ay even or divisible by 2 ang kulay ng box ay green at kung hindi naman ang kulay ng box ay color blue
    function getBoxColor($num) {
        return (is_numeric($num) && $num % 2 == 0) ? "green" : "blue";
    }

    // RESULTA
    return "
    <html>
    <head>
        <title>ACTIVITY 5</title> 
    </head>
    <body>
        <h2>Lloyd Patrick A. Galverio</h2> 
        
        <!-- First Problem na gagawin ng program -->
        <p>Value 1: <span style='color: " . getTextColor($num1) . "'><b>$num1</b></span></p> <!-- First number na nilagay at color nito kung odd or even -->
        <p>Value 2: <span style='color: " . getTextColor($num2) . "'><b>$num2</b></span></p> <!-- Second number na nilagay at color nito kung odd or even -->
        <p>Operator: $operation1</p> <!-- Magpapakita kung anong operation ang ginamit-->
        <div style='background-color: " . getBoxColor($result1) . "; padding: 10px; width: 50px; text-align: center; color: white;" . (getBoxColor($result1) == 'green' ? " border: 1px solid black;" : "") . "'>
            <b>$result1</b> <!-- Result with white text -->
        </div>
        
        <br> 
    
        <!-- Second Problem na gagawin ng program -->
        <p>Value 1: <span style='color: " . getTextColor($num3) . "'><b>$num3</b></span></p> <!-- First number na nilagay at color nito kung odd or even -->
        <p>Value 2: <span style='color: " . getTextColor($num4) . "'><b>$num4</b></span></p> <!-- Second number na nilagay at color nito kung odd or even -->
        <p>Operator: $operation2</p> <!-- Magpapakita kung anong operation ang ginamit-->
        <div style='background-color: " . getBoxColor($result2) . "; padding: 10px; width: 50px; text-align: center; color: white;'>
            <b>$result2</b> <!-- Result with white text -->
        </div>
    </body>
    </html>";
    
});
