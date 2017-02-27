<html>
<head>
<style type="text/css">
.red {
    background-color: red;
    width: 100px;
    height: 100px;
    display: inline-block;
}
.black {
    background-color: black;
    width: 100px;
    height: 100px;
    display:inline-block;
}
</style>

<body>




<?php
    for($j=0; $j<8; $j++){
        echo"<br>";
        for($i=0+$j%2; $i<8+$j%2; $i++){
        if($i%2 == 0){
            echo'<div class="red"></div>';
        }else{
            echo '<div class="black"></div>';
        }    
    }
    }
?>
</body>
</html>
 
