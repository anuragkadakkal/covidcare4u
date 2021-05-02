<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
                    "Maruti Suzuki" => array("Omni", "Eeco"),
                    "Tata" => array("Winger"),
                    "Mahindra" => array("Bolero"),
                    "Force" => array("Traveller", "Trax"),
                    "MG" => array("Hector"),
                    "Toyoto" => array("Innova 2.5G", "Innova 4.5G")
                );
     
    // Display city dropdown based on country name
    if($country !== 'null'){
        echo "<select class='form-control bfh-states' name='model'>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    }
    if($country == 'null'){
        echo "<select class='form-control bfh-states' name='model' readonly>";
            echo "<option>Select Vehicle Model</option>";
        echo "</select>";
    } 
}
?>