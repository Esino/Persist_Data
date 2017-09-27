<!DOCTYPE html>
<html>
	<head>
		<title>Persist Data Form</title>
		<style>
			form{
				background-color: #979395;
				color: white;
				width:500px;
				margin:35px 20px 10px 135px;
				padding:20px;
			}

			textarea{
				margin: 10px 10px 10px 0px;
			}

			input:first-child{
				width:53%;
			}
		</style>
	</head>
	<body>
		<form>
			Name: <input type="text" name="UserName" >
			<textarea rows="5" cols="50" name="Comment" placeholder="Comments"></textarea></br>
			<input type="Submit" value="submit">
		</form>
	</body>
</html>