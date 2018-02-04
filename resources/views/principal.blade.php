<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0 auto;
            padding: 0px;
            overflow: hidden;
        }

        .list-group-item {
            background-color: gray;
            border: none;
        }
        #content {
            width: 100%;
        }

        #pruebaright {
            height: 100%;
            padding-top: 40px;
            background-color: #4894c2;
        }

        #pruebaleft {
            height: 100%;
            background-color: #4894c2;
            padding-top: 40px;
        }

        .list-group-item {
            background: none;
            color: white;
        }
        .navbar-inverse{
           background-color: #000;
            height: 80px;
        }

        .list-group-item:hover {
            font-size: 14px;
        }
        .col-lg-8{
            padding: 0px;
            margin: 0 auto; 
        }
        .row-fluid {
            height: 660px;
        }
        .menu{
            text-decoration: none;
            color: white;
        }
        .menu:hover{
            text-decoration: none;
        }
        .menu:active{
            text-decoration: underline;
            color: black;
        }
    </style>
</head>

<body>

    <nav class="navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="images/logo.png" width="40%" height="50px"></a>
            </div>
            
        </div>
    </nav>
   
    <div class="row-fluid">
        <aside id="pruebaleft" class="col-sm-2">
        <ul class="list-group">
            <li class="list-group-item"><a href="#" class="menu">Inicio</a></li>
            <li class="list-group-item"><a href="#" class="menu">Historial de envios</a></li>
            <li class="list-group-item"><a href="#" class="menu">Envios actuales</a></li>
            <li class="list-group-item"><a href="#" class="menu">Incidencias</a></li>
            <li class="list-group-item"><a href="#" class="menu">Ajustes</a></li>
        </ul>
        </aside>
        <div class="col-lg-10" >
            <img src="images/web.png" width="100%" height="660px"/>
        </div>
        
    </div>
</body>

</html>