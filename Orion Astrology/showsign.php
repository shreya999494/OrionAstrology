
		
		
		<?php
			$user="root";
			$pass="";
			$db = 'zodiacsigns';
			$name = "";
			$date = "";
			
			$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");
			
			function getPosts()
			{
				$posts= array();
				$posts[0]=$_POST['name'];
				$posts[1]=$_POST[bddate];
				retur $posts;
			}
			
			if(isset($_POST['submit']))
			{
				$data= getPosts();
				$q = "select * from 2";
			}
		?>
		
		
		