
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['type']) || $_GET['do'] != 1) {
								
	
			
			
					$query = 'DELETE FROM people
							WHERE
							people_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "student.php";
			</script>				
				
			<?php
			//break;
				}
			
			?>

</body>
</html>