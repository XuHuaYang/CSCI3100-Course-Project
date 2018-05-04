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
    $t1title=array();
    $t2title=array();
    $t3title=array();
    $t4title=array();
    $t5title=array();
    $t6title=array();
    $t1nid=array();
    $t2nid=array();
    $t3nid=array();
    $t4nid=array();
    $t5nid=array();
    $t6nid=array();

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


    #type1
    $i=0;
    $j=0;
    $sqlt1nid="SELECT n.nid from questionnaire n where n.type=1 and n.finished=0;";
    $t1nidresult=$conn->query($sqlt1nid);
    while($i<$t1nidresult->num_rows){
        $row=$t1nidresult->fetch_assoc();
        if($i>=$t1nidresult->num_rows-6){
            array_push($t1nid,$row["nid"]);

            $sqlt1title="SELECT n.title from questionnaire n where n.nid=$t1nid[$j]";
            $t1titleresult=$conn->query($sqlt1title);
            $line=$t1titleresult->fetch_assoc();
            array_push($t1title,$line["title"]);
            $j=$j+1;
        }
        
       

        $i=$i+1;
    }

   #type2
    $i=0;
    $j=0;
    $sqlt2nid="SELECT n.nid from questionnaire n where n.type=2 and n.finished=0;";
    $t2nidresult=$conn->query($sqlt2nid);
    while($i<$t2nidresult->num_rows){
        $row=$t2nidresult->fetch_assoc();
        if($i>=$t2nidresult->num_rows-6){
        array_push($t2nid,$row["nid"]);
        $sqlt2title="SELECT n.title from questionnaire n where n.nid=$t2nid[$j]";
        $t2titleresult=$conn->query($sqlt2title);
        while($line=$t2titleresult->fetch_assoc()){
            array_push($t2title,$line["title"]);
        } 
        $j=$j+1;
        }  

        $i=$i+1;
    }

    #type3
    $i=0;
    $j=0;
    $sqlt3nid="SELECT n.nid from questionnaire n where n.type=3 and n.finished=0;";
    $t3nidresult=$conn->query($sqlt3nid);
    while($i<$t3nidresult->num_rows){
        $row=$t3nidresult->fetch_assoc();

        if($i>=$t3nidresult->num_rows-6){
        array_push($t3nid,$row["nid"]);
        $sqlt3title="SELECT n.title from questionnaire n where n.nid=$t3nid[$j]";
        $t3titleresult=$conn->query($sqlt3title);
        while($line=$t3titleresult->fetch_assoc()){
            array_push($t3title,$line["title"]);
        }
        $j=$j+1;
        }
        $i=$i+1;
    }

    #type4
    $i=0;
    $j=0;
    $sqlt4nid="SELECT n.nid from questionnaire n where n.type=4 and n.finished=0;";
    $t4nidresult=$conn->query($sqlt4nid);
    while($i<$t4nidresult->num_rows){
        $row=$t4nidresult->fetch_assoc();

        if($i>=$t4nidresult->num_rows-6){
        array_push($t4nid,$row["nid"]);
        $sqlt4title="SELECT n.title from questionnaire n where n.nid=$t4nid[$j]";
        $t4titleresult=$conn->query($sqlt4title);
        while($line=$t4titleresult->fetch_assoc()){
            array_push($t4title,$line["title"]);
        }
        $j=$j+1;
        }
        $i=$i+1;
    }

    #type5
    $i=0;
    $j=0;
    $sqlt5nid="SELECT n.nid from questionnaire n where n.type=5 and n.finished=0;";
    $t5nidresult=$conn->query($sqlt5nid);
    while($i<$t5nidresult->num_rows){
        $row=$t5nidresult->fetch_assoc();

        if($i>=$t5nidresult->num_rows-6){
        array_push($t5nid,$row["nid"]);
        $sqlt5title="SELECT n.title from questionnaire n where n.nid=$t5nid[$j]";
        $t5titleresult=$conn->query($sqlt5title);
        while($line=$t5titleresult->fetch_assoc()){
            array_push($t5title,$line["title"]);
        }
        $j=$j+1;
        }
        $i=$i+1;
    }

    #type6
    $i=0;
    $j=0;
    $sqlt6nid="SELECT n.nid from questionnaire n where n.type=6 and n.finished=0;";
    $t6nidresult=$conn->query($sqlt6nid);
    while($i<$t6nidresult->num_rows){
        $row=$t6nidresult->fetch_assoc();

        if($i>=$t6nidresult->num_rows-6){
        array_push($t6nid,$row["nid"]);
        $sqlt6title="SELECT n.title from questionnaire n where n.nid=$t6nid[$j]";
        $t6titleresult=$conn->query($sqlt6title);
        while($line=$t6titleresult->fetch_assoc()){
        array_push($t6title,$line["title"]);
        }
        $j=$j+1;
        }
        $i=$i+1;
    }



    $json_array = array('t1title'=>$t1title, 't2title'=>$t2title,'t3title'=>$t3title,'t4title'=>$t4title,'t5title'=>$t5title,'t6title'=>$t6title,'t1nid'=>$t1nid,'t2nid'=>$t2nid,'t3nid'=>$t3nid,'t4nid'=>$t4nid,'t5nid'=>$t5nid,'t6nid'=>$t6nid);
    echo json_encode($json_array);
?>