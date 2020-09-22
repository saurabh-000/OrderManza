<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

#autocomplete-items {
  position: absolute;
  border: 1px red solid;
  background-color:green; 
  /*border-bottom: none;
  border-top: none;*/
  width:150px;
  height:50px;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

/*.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}*/


</style>
<body>
	<form autocomplete="off" action="/action_page.php">
		<div class="autocomplete" style="width: 300px">
			<input type="text" name="myCountry" id="myInput" placeholder="Country">
			<!--<div id="autocomplete-items"> </div>-->
		</div>
		
		<input type="submit">
	</form>
  <script type="text/javascript">
    //alert("ok");
    var x4="12345";
    if(/^[0-9]/.test(x4))
    {
     alert("ok");
    }  
  </script>

</body>
</html>
