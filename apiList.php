<?php
include "hedds2.php";
?>

<br><br><br><br><br><br>
<!---->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
	  <div id="result">
	  	
	  </div>	
	

	<input type="button" name="" id="button" value="submit" />

</div>
</body>
</html>


<script type="text/javascript">

	function getMovies(){
		
      $.ajax({
       
        type: "GET",
        url: "https://jsonmock.hackerrank.com/api/movies/search", //your php script url here
        data: {Title:"maze"}, // your post data here 
       dataType: "json",
       async: false,
        success: function (response) {
            
            $('#result').html('');
            var output = "";
            $.each(response.data,function() {
            	//console.log(dataitem);
            	output+= "<b>Title: </b>"+(this).Title+"<br/>";
            	output+= "<b>Year: </b>"+(this).Year+"<br/>";
            	output+= "<b>imdbID: </b>"+(this).imdbID+"<br/>";
            	output+="<br/><br/>";

            });

           // $('#result').html(output);  //displayy on project
            console.log(output);  ///display on console
            


                }
            });
	}

    //load on ready
	$(document).ready( function() {

		
	document.getElementById('button').addEventListener('click',getMovies,false);
});

	



</script>