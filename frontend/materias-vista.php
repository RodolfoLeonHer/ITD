<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Materias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(image/Header.png)">
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/logo tec.ico" alt="">
                <h2>Materias</h2>
            </div>
            <div class="menu">
                <a href="principal.php"><li class="module-login">Inicio</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Registrar</h1><h2>Materia</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="ID Materia" name="id_materia">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Materia" name="nombre_materia">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Catedrático" name="catedratico">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Unidades" name="num_unidades">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Créditos" name="creditos">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Hrs. Práctica" name="hrs_practica">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Hrs. Teoría" name="hrs_teoria">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Grupo" name="grupo">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Período" name="periodo">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="text" placeholder="Plan de Estudios" name="plan_estudios">
            </div>

            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>