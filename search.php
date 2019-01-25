<!-- SELECT * FROM portfolio WHERE skills LIKE "%'$var'%"; -->
<!DOCTYPE html>
<html>
    <head>
        <title>Search | Find Your Skill</title>
    </head>
    <body>
        <form action="search.php" method="post">
            Search<input type="text" name="search"><br>
            <button name="submit" type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
require "config.php";
if(isset($_POST["submit"]))
{
    $search= $_POST["search"];
    $query=mysqli_query($con,"SELECT * FROM portfolio WHERE skills LIKE '%$search%'");
    if (mysqli_num_rows($query)>0) 
    {
        $results = array();$a=0;
        while($data=mysqli_fetch_object($query))
		{
                $results[$a][0]=$data->name; 
                $results[$a][1]=$data->email;
                $results[$a][2]=$data->number; 
                $results[$a][3]=$data->skills;  
                $a++;
        }
    }
    else{
        echo "Sorry not found";
    }
    print_r($results);
}
?>