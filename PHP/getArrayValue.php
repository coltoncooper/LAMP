
<?php
		function printList($list){
			echo"<ul>";
			foreach($list as $item){				
?>
			<li><?=$item?></li>
<?php
			};
			echo"</ul>";
		}
		printList(array(2,3,'hello'));
?>