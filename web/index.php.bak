<?php

$servername = "127.0.0.1";
$username = "sql_fun1";
$password = "<password_web>";
$database = "sql_fun1";

$conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



if(array_key_exists("Query",$_POST)){
    $query= $_POST["Query"];
    //allow for * to be used; (strpos($query, '*') == false) && (strpos($query, '%') == false)
    if(true){
        if(preg_match('/.*WHERE.*/i', $query)){
            if($data = $conn->query($query)){
        
                $dataArray = $data->fetch_assoc();
                foreach($dataArray as $key => $value){
                    echo($key.': '.$value.'<br/>');
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
    <head><title>SQL fun 1</title></head>
    <body>
        <p id="p">REPORT: 'My Customer forgot his `Password`. His `Fname` is Mark. Can you get his password for me? It should be in the `users` table'</p>
        <form method="POST" action="?">
            <input name="Query"/>
            <input type="submit" id="submitButton"/>
        </form>
    </body>
</html>
