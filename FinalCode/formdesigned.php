<html>
<head>
<title>Submit successfully!</title>
</head>
<body>
<?php
/*********************************************************************
 * MODULE NAME:formdesigned
 *
 * PROCEDURE INVOCATION:
 *     CALL formdesigned()
 *
 * INPUT PARAMETERS:
 *     NULL
 *
 * OUTPUT PARAMETERS:
 *     The questionnaire on the designform page
 *     Send the new questionnaire to server when user submit it
**********************************************************************/
if(isset($_POST['submit'])){
        $number=0;
        $formtitle=$_POST['formtitle'];
        $students&scholars=$_POST['student&scholar'];
        $business=$_POST['Business'];
        $science&tech=$_POST['Science&technology'];
        $arts&literature=$_POST['Arts&Literature'];
        $socialworks=$_POST['SocialWorks'];
        $others=$_POST['others'];


        foreach ($_POST['question'] as $question){
            if($question){
                $choiceA=$_POST['choiceA'];
                $choiceB=$_POST['choiceB'];
                $choiceC=$_POST['choiceC'];
                $choiceD=$_POST['choiceD'];
                $number=$number+1;

                
                INSERT INTO table_name(formtitle,students&scholars,business,science&tech，arts&literature,socialworks,others)
                VALUES ($formtitle,$students&scholars,$business,$science&tech,$arts&literature,$socialworks,$others)
        }
    }

        
        
          

        

}
?>


</body>
<p>111</p>
</html>