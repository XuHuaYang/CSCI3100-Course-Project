<?php//XML type
    header("Content-Type:text/xml; charset=utf-8");
    for ($i=1;$i <=12;$i++) {
        $_REQUEST[$i]= "questionnaire_header"."".$i;
    }
    echo "<?xml version='1.0' encoding='utf-8'?>".
    "<questionnaire_header>".
    "<title>{$_REQUEST['1']}</title>".
    "</questionnaire_header>";
    exit;
?>
/*<?php//可行，不过麻烦
    header('Content-Type: text/html;charset=utf-8');
    for ($i=1;$i <=12;$i++) {
        $_REQUEST["questionnaire_header"."".$i]= "questionnaire_header"."".$i;
    }
    echo "<div class='title'>{$_REQUEST['questionnaire_header1']}</div>";
    exit;
?>*/