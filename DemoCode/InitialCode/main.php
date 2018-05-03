<?php
/*********************************************************************
 * MODULE NAME:main
 *
 * PROCEDURE INVOCATION:
 *     CALL main()
 *
 * INPUT PARAMETERS:
 *     NULL
 *
 * OUTPUT PARAMETERS:
 *     The latest 6 questionnaires in the data base for each kinds
**********************************************************************/
    $t1title=array("t1","t1","t1","t1","t1","t1","t1","t1","t1");
    $t2title=array("t2","t2","t2","t2","t2","t2","t2","t2","t2");
    $t3title=array("t3","t3","t3","t3","t3","t3","t3","t3","t3");
    $t4title=array("t4","t4","t4","t4","t4","t4","t4","t4","t4");
    $t5title=array("t5","t5","t5","t5","t5","t5","t5","t5","t5");
    $t6title=array("t6","t6","t6","t6","t6","t6","t6","t6","t6");
    $t1nid=array(1,2,3,4,5,6,7,8,9);
    $t2nid=array(11,12,13,14,15,16,17,18,19);
    $t3nid=array(21,22,23,24,25,26,27,28,29);
    $t4nid=array(31,32,33,34,35,36,37,38,39);
    $t5nid=array(41,42,43,44,45,46,47,48,49);
    $t6nid=array(51,52,53,54,55,56,57,58,59);
    $json_array = array('t1title'=>$t1title, 't2title'=>$t2title,'t3title'=>$t3title,'t4title'=>$t4title,'t5title'=>$t5title,'t6title'=>$t6title,'t1nid'=>$t1nid,'t2nid'=>$t2nid,'t3nid'=>$t3nid,'t4nid'=>$t4nid,'t5nid'=>$t5nid,'t6nid'=>$t6nid);
    echo json_encode($json_array);
?>