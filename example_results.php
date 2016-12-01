<!DOCTYPE html>

<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "eVote_stylesheet.css">
        <title>Lab 5</title>        
    </head>
    <body>
    <?php        
        $resultsFile = fopen("results.txt", "a") or die("Unable to open file!");
        $point = "";
        foreach($_POST as $choice)
        {
            if($choice == 0)
            {
                $point = "Choice 1";
            }
            else if($choice == 1)
            {
                $point = "Choice 2";
            }
            else if($choice == 2)
            {
                $point = "Choice 3";
            }
            else if($choice == 3)
            {
                $point = "Choice 4";
            }
            $point = strval($choice) . "\n";
            
            fwrite($resultsFile, $point);
            fclose($resultsFile);            
        }    
        
        $choice1 = 0;
        $choice2 = 0;
        $choice3 = 0;
        $choice4 = 0;
        $count = 0;
     
        $file = fopen("results.txt", "r");
        
        if($file == true)
        {
            while(($index = fgets($file)) != false)
            {
                if($index == 0)
                {
                    $choice1 += 1;
                    $count++;
                 
                }                       
                else if($index == 1)            
                {
                    $choice2 += 1;
                    $count++;
              
                }                    
                else if($index == 2)            
                {
                    $choice3 += 1;
                    $count++;
                
                }                   
                else if($index == 3)            
                {
                    $choice4 += 1;   
                    $count++;
                }
            }
            fclose($file);
        }            
            $total = $count;
//            $choice1percent = $choice1 / $total * 100;
//            $choice2percent = $choice2 / $total * 100;
//            $choice3percent = $choice3 / $total * 100;
//            $choice4percent = $choice4 / $total * 100;
            
            echo "Choice 1 " . $choice1 . "<br>";
            echo "Choice 2: " . $choice2 . "<br>";
            echo "Choice 3: " . $choice3 . "<br>";
            echo "Choice 4: " . $choice4 . "<br>";
    ?>
    </body>
</html>