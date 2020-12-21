<?php 
      require_once"../controllers/BookController.php";
	  $books = getAllbooks();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">List of Books</h3>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th> Name</th>
			<th>Author </th>
			<th>edition</th>
			<th> image</th>
			
			
		</thead>
		<tbody>
		<?php
			foreach($books as $p)
			{
				echo"<tr>";
					echo "<td>".$p["id"]."</td>";
					echo "<td>".$p["name"]."</td>";
					echo "<td>".$p["author"]."</td>";
					echo "<td>".$p["edition"]."</td>";
				
					echo"<td><img src='".$p["image"]."'width='30px' height='30px'></td>";
				
					
				echo"</tr>";
			}
		?>
			
			
		</tbody>
	</table>
</div>
<!--Products ends -->
