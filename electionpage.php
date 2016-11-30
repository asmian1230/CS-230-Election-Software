<!DOCTYPE html>
<html>
    <head>
        Current Election
    </head>
    <body>
    <?php
        $electionFile = fopen("elections.txt", "a") or die("Unable to open file!");
        $election = $_POST['elec_title'];
        $eid = $_POST['elec_id'];
        $commID = $_POST['commissioner'];
        echo $election;
        echo $eid;
        echo $commID;
        
        
        $elecTxt = strval($eid) . ",";
        //fwrite($electionFile, $elecTxt);
        echo $elecTxt;
        //fclose($electionFile);
    ?>
    </body>
</html>
