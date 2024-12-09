<?php

// Inicializacao das variaveis
$chave = "";
$texto = "";
$error = "";
$cifra = "";
$cifra1 = "";
$valid = true;
$color = "#FF0000";
$msg = $_POST['texto'];

// Se o formulario foi submetido
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    //declaracao das funcoes de encriptacao e decriptacao
    require_once('vigenere.php');
    
    // Atribuicao de valores as variaveis
    $chave = $_POST['chave'];
    $texto = $_POST['texto'];
    
    // 
    if ($valid)
    {
        //Se o botao de encriptar for clicado
        if (isset($_POST['encrypt']))
        {
            $cifra = "Cifrar";
            $cifra1 = "Cifrada";
            $texto = encrypt($chave, $texto);
            $error = "Text encrypted successfully!";
            $color = "#526F35";
        }
            
        // Se o botao de descriptar for clicado
        if (isset($_POST['decrypt']))
        {
            $cifra = "Decifrar";
            $cifra1 = "Decifrada";
            $texto = decrypt($chave, $texto);
            $error = "Code decrypted successfully!";
            $color = "#526F35";
        }
    }
}

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="ALC">
        <title>Cifra de Veginére</title>
        
        <link href="static/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                display: flex;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
            .form-signin {
                width: 100%;
                max-width: 500px;
                padding: 15px;
                margin: auto;
            }
            .alert-success {
                padding: 20px;
            }
            .alert-danger {
                padding: 20px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body class="text-center">
        <main class="form-signin">
            <h3 class="h3 mb-3 fw-normal"><?php echo $cifra; ?></h3>
            <p>Mensagem processada</p>
            <form class="" enctype="multipart/form-data" method="POST" action="/processar/">

                <div class="alert-success">
                    <strong>Mensagem Original:</strong>  <?php echo htmlspecialchars($msg); ?>
                </div>

                <div class="alert-danger">
                    <strong>Mensagem <?php echo $cifra1; ?>:</strong> <?php echo htmlspecialchars($texto); ?>
                </div>

            
            <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2" onclick="window.location.href='cript.php'">Voltar</button>

            <div class="register-link">
                <small class="text-muted"><a href="index.html">Voltar ao Inicio!</a></small> <br><br>
            </div>

            <p class="mt-0 mb-3 text-muted">Todos Direitos Reservados UPM-SI &copy; 2024</p>
            </form>

        </main>
        <script src="static/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
