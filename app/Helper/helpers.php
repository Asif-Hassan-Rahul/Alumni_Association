<?php

function get_derpartment_short_form($department_name){
    $departments = array(
        "Architecture"=>"Architecture",
        "Chemical Engineering"=>"ChE",
        "Civil Engineering"=>"CE",
        "Computer Science and Engineering"=>"CSE",
        "Electrical and Electronics Engineering"=>"EEE",
        "Industrial and Production Engineering"=>"IPE",
        "Mechanical Engineering"=>"ME",
        "Materials and Metallurgical Engineering"=>"MME",
        "Naval Architecture and Marine Engineering"=>"NAME",
        "Petroleum and Mineral Resources Engineering"=>"PME",
        "Urban and Regional Planning"=>"URP",
        "Water Resources Engineering"=>"WRE",
    );
    if (array_key_exists($department_name,$departments)){
        return $departments[$department_name];
    }

}
