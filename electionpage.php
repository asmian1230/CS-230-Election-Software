<!DOCTYPE html>
<html>
    <head>
        Current Election
        <br>
    </head>
    <body>
        <?php
            //Creates a new file to store elections sent by HSO
            $electionFile = fopen("elections.txt", "a") or die("Unable to open file!");
            //Gets information sent by HSO
            $election = $_POST['elec_title'];
            $commID = $_POST['commissioner'];
            $eid = $_POST['elec_id'];
        
            //Changes both values to strings
            $eid_str = strval($eid);
            $commID_str = strval($commID);
        
            //Formats all variables and concatenates with commas to store as a string
            $data = $election . ", " . $commID_str . ", " . $eid_str;
            $data .= "\n";
            //Write stored string to file
            fwrite($electionFile, $data);
            fclose($electionFile);
        
            //Opens file for reading and prints line by line
            $handle = fopen("elections.txt", "r");
            if($handle)
            {
                while(($line = fgets($handle)) !== false)
                {
                    echo "<br>";
                    echo $line;
                }
                fclose($handle);
            }
            else
            {
                echo "Unable to open file!";
            }
        ?>
        
        <br><br><br><br><br>
        <!--Link to previous page-->
        <a href = "http://www.lab230g4.net/Mian/">Back to home page</a><br>               
    </body>
</html>

