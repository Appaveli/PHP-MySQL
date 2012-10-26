<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //connects to the the localhost
        $con =  mysql_connect("localhost","root","");
        if(!$con){
            die("cannot connect");
        }
        //select the database
        mysql_select_db("mydata",$con);
        //Insert values into table data
        mysql_query("INSERT INTO data (FirstName, LastName) VALUES ('Dominque','Terry')");
        //close connection
        mysql_close($con);
        
        
        ?>
       
        
    </body>
</html>
