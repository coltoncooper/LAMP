<html>
<head>
    <title>Multiplication Table</title>
<style type="text/css">

td{
    border: 2px solid black;
    width: 50px;
    height: 50px;
    text-align: center;
}
th{
    border: 2px solid black;
    width: 50px;
    height: 50px;
    text-align: center;
    font-weight: bolder;

}
table{
    border-collapse:collapse;
}

</style>

<body>
    <table>
<?php
        for($y=0; $y<10; $y++){
            echo"<tr>";
            for($x=0; $x<10; $x++){
                    if($x==0 && $y==0){
                        echo "<td></td>";
                    }else if($x==0){
                        echo "<th>".$y."</th>";
                    }else if($y==0){
                        echo "<th>".$x."</th>";
                    }else{
                        echo "<td>".$x * $y."</td>"; 
                    }
                }
            echo"</tr>";
        }
?>

    </table>
</body>
</html>
 
