<?php

		$users = array('first_name' => 'Michael', 'last_name' => 'Choi');

		function keysAndValue($users_input){
			echo "There are"." ". count($users_input). " " ."keys in this array:"."<br>";
			foreach($users_input as $key => $value){
				echo "&nbsp&nbsp&nbsp&nbsp". $key. "<br>";
			}
			foreach($users_input as $key => $value){
				echo "The value in the key ". "&#39".$key."&#39". " is ". "&#39".$value."&#39"."."."<br>";
			}
		}
		keysAndValue($users);
?>