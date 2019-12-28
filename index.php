<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body onload="sayName()" >

			<input type="search" name="search" id="search" placeholder="search" onkeyup="search(this.value)" >
			<div id="res"></div>
			<br>
			<br>
			<br>
			<br>

			<input type="text" id="user" name ="user" placeholder="username">
			<br>
			<button  onclick="sayName()">send</button>
			<br>
			<br>
			<br>
			<table border="1">
				<tr>
					<td>id</td>
					<td>user</td>
					<td>Action</td>

				</tr>

				<tbody id="txt" >
					
				</tbody>


			</table>
	
	<script type="text/javascript">
		
			function sayName(id){
				if (id == undefined) {
					id="";
				}else{
					var conf=window.confirm("Are u sure ?");
					if(conf!=true){
						return ;
					}
				}
				var user=document.getElementById("user").value;			
				var xhr=new XMLHttpRequest();

				xhr.onreadystatechange=function(){
					if (xhr.readyState == 4 && xhr.status == 200 ) {
						document.getElementById('txt').innerHTML=xhr.responseText;

					}
				}

		
			

				xhr.open("Get","print.php?n="+user+"&id="+id+"&da="+2,true);
				//xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.send();

			}

			function search(value){

			         if(value.length==0){
			         	return ;
			         }
			         else {
			         
					var search=value;
					var xhr=new XMLHttpRequest();

				    xhr.onreadystatechange=function(){
					if (xhr.readyState == 4 && xhr.status == 200 ) {
						document.getElementById('res').innerHTML=xhr.responseText;
					}
				}

				xhr.open("Get","print.php?search="+search+"&da="+1,true);
			    xhr.send();
				}

			 }
			
			


		

	</script>



</body>
</html>