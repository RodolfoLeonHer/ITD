<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        
        body{
            background-image: url(image/HeaderInicio.png);
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        
        .welcome{
            width: 100%;
            max-width: 500px;
            margin: auto;
            margin-top: 100px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }
        
        .welcome img{
            width: 120px;
            height: 120px;
            text-align: center;
        }

        .welcome h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: block;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }
        
    
    </style>
    
</head>
<body>
   
   <div class="welcome">
       <img src="image/logo tec.ico" >
        <h1>Instituto Tecnol&oacute;gico de Delicias</h1>
        <a href="materias.php">Materias</a>
        <a href="cerrar.php">Cerrar sesion</a>
   </div>
   
</body>
</html>