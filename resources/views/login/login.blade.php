<html>
<head>
    <meta charset="UTF-8"/>
    <title>FeedRoute Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <style type="text/css">
    	body{
		    height: 100vh;
		    display:flex;
		    flex-direction: column;
		    margin:0; 
            background-image: url(images/8.jpg);
            background-repeat: no-repeat;
            background-size: cover;
		}
		main{
			display: flex;
			align-items: center;
			justify-content: center;
		    flex: 1;
		    
		}
		footer{
			display: flex;
			font-family: 'Roboto', sans-serif;
		    background-color:black;
		   	justify-content: center;
		    align-items: center;
		    color:white;
		    width: 100%;
		    height: 8vh;
		    opacity: 0.9;
		}

		.container{
			border: 1px solid black;
			border-radius: 10px;
			width: 250px;
		}
		#formulario{
			font-family: 'Roboto', sans-serif;
			padding: 5px;
		}

    </style>
</head>
<body>  
    <main>
    	<div class="container">
		  <form id="formulario" method="get" action="principal" accept-charset="UTF-8">
		    <div class="form-group">
		      <label for="user">User:</label>
		      <input type="text" class="form-control" id="user" placeholder="Enter user" name="user">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		    </div>
		    <div class="checkbox">
		      <label><input type="checkbox" name="remember"> Remember me</label><br>
                @if ($error != false)
                <span>{{$error}}</span>
                @endif
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		  </form>
		</div>
    </main>
    <footer>
        <p>Powered by FeedRoute</p>
    </footer>
</body>
</html>



	
	


