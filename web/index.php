<?php

$servername = "127.0.0.1";
$username = "sql_fun2";
$password = "<password_web>";
$database = "sql_fun2";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(array_key_exists("Query",$_POST)){
    $query= $_POST["Query"];
    if(true){
        if(true){
            if($data = $conn->query($query)){
        
                $dataArray = $data->fetch_assoc();
                foreach($dataArray as $key => $value){
                    echo($key.': '.$value.'<br/>');
                }
                if(!preg_match('/.*JOIN.*/i', $query)){
                    echo('maybe try JOINing another table');
                }
            }else{
                echo('Your query could not be submitted.');
                echo('<br/>Error: '.mysqli_errno($conn));
            }
        }else{
            echo('Nope... You must have a WHERE clause.');
        }
    }else{
        echo('<p>you can\'t use a wildcard</p>
        <iframe src="/challenges/nope/jurasic/MagicWord.webm" style="height:16em"></iframe>');
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SQL fun 2</title>
    </head>
    <body>
        <!-- A bit more complex now -->
        <p id="p">REPORT: A Client forgot his `Password`... again. Could you get it for me? He has a `users` account and his `Lname` is Miller if that helps at all<br/>Oh! and Ken was saying something about a new table called `passwd`; said it was better to seperate things</p>
        <form method="POST" action="?">
            <input name="Query"/>
            <input type="submit" id="submitButton"/>
        </form>
        <?php
        //This hint is not needed to solve the puzzle
        $hint = '<p>Hint:</p>
        <code>
            &lt;?
            <br/>
        if($data = $conn->query($query)){<br/>
&nbsp;&nbsp;$dataArray = $data->fetch_assoc();<br/>
&nbsp;&nbsp;foreach($dataArray as $key => $value){<br/>
&nbsp;&nbsp;&nbsp;&nbsp;echo($key.": ".$value."&lt;br/&gt;");<br/>
&nbsp;&nbsp;}<br/>
&nbsp;&nbsp;if(!preg_match("/.*JOIN.*/i", $query)){<br/>
&nbsp;&nbsp;&nbsp;&nbsp;echo("maybe try JOINing another table");<br/>
&nbsp;&nbsp;}<br/>
        }else{<br/>
&nbsp;&nbsp;echo("Your query could not be submitted.");</br>
&nbsp;&nbsp;echo("Error: ".mysqli_errno($conn));<br/>
        }<br/>
            
            ?&gt;
            
            
        </code>';
        ?>
    </body>
    </body>
</html>
