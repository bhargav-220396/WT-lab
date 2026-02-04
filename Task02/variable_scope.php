<?php

echo "<h2>Welcome to the company</h2>";

$company_name = "TechBridge";
$revenue = 230;

function company_details(){
    global $company_name;
    global $revenue;
    echo "<h3>Details of the company:</h3>";
    echo "Company name is: $company_name. <br>";
    echo "Revenue generating anually : $revenue.<br><br>";
}

company_details();

function show_service(){
    $service = "Automation";
    echo "Service asked by the user is : $service.<br><br>";
}

show_service();
//echo"$service.";


function client_count(){
    static $count = 0;
    $count += 1;
    echo "Number of clients : $count <br>";
}

client_count();
client_count();
client_count();

