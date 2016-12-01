<!DOCTYPE html>

<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "eVote_stylesheet.css">
        <title>eVote</title>    
    </head>
    <script>
        function checkRadio()
        {
            var checked = false;
            var numButtons = document.poll.choice.length;
            for(var i = 0; i < numButtons; i++)
            {
                if(document.form.choice[i].checked)
                    {
                        checked = true;
                        break;
                    }
            }            
            if(!checked)
            {
                alert("Select one of the choices.");
//                var check = document.getElementById("poll").;
//                check = false;
                return false;
            }            
        }        
    </script>
    <body>
        <h5>Temporary Example Ballot</h5>
        <form id = "poll" action = "example_results.php" method = "post" onsubmit = "checkRadio()">
            <p4>
                <input type = "radio" name = "choice" value = 0>
                Choice 1
                <br><br>
                <input type = "radio" name = "choice" value = 1>
                Choice 2
                <br><br>
                <input type = "radio" name = "choice" value = 2>
                Choice 3
                <br><br>
                <input type = "radio" name = "choice" value = 3>
                Choice 4              
            </p4>
            <br><br><br>
            <p4>
                <input id = "click" type = "submit" value = "Submit" name = "process" onclick="checkRadio()">
                <br>
            </p4>
        </form>   
    </body>
</html>