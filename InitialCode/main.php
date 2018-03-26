<?php
    header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
    for($i=1;$i <=6;$i++){
        for($j = 1;$j<=12;$j++){
            //read one data and its id
            $quesID=$j;
            $quesTitle=$j;
            if($i==1){
                $json_arr["ID_edu"."".$j]=$quesID;
                $json_arr["Title_edu"."".$j]=$quesTitle;
            }
            elseif ($i==2) {
                $json_arr["ID_bus"."".$j]=$quesID;
                $json_arr["Title_bus"."".$j]=$quesTitle;
            }
            elseif ($i==3) {
                $json_arr["ID_sci"."".$j]=$quesID;
                $json_arr["Title_sci"."".$j]=$quesTitle;
            }
            elseif ($i==4) {
                $json_arr["ID_art"."".$j]=$quesID;
                $json_arr["Title_art"."".$j]=$quesTitle;
            }
            elseif ($i==5) {
                $json_arr["ID_soc"."".$j]=$quesID;
                $json_arr["Title_soc"."".$j]=$quesTitle;
            }
            elseif ($i==6) {
                $json_arr["ID_oth"."".$j]=$quesID;
                $json_arr["Title_oth"."".$j]=$quesTitle;
            }
        }
    }
    echo json_encode($json_arr);
    exit;
?>