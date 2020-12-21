<?php 
      include 'admin_header.php';
      require_once"../controllers/BookController.php";
	  $books = getAllbooks();
?>
<!--All Products starts -->
<div class="center">
	<input type="text" placeholder="type your search ..." id="search_text" onkeyup="search(this)" class="form-control">
</div>

<table class="table table-striped center" id="suggestion">
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
				
					echo"<td><img src='".$p["image"]."'width='100px' height='100px'></td>";
				
					
				echo"</tr>";
			}
		?>
			
			
		</tbody>
	</table>
</div>
<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","search.php?name="+text.value,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>
<!--Products ends -->


