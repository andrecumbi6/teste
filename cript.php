<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="ALC">
        <title>Cifra de Veginére</title>
        
        <link href="static/dist/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="Script.js"></script>

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
            .nota{
                text-align: right;
                color: red;
                margin-top: 50px;
            }
           
        </style>
    </head>
    <body class="text-center">
        <main class="form-signin">
            <h3 class="h3 mb-3 fw-normal">Cifra de Veginére</h3>
            <p>Preencha os campos para continuar<b class="nota">*</b></p>
            <form class="" enctype="multipart/form-data" method="POST" action="result.php">

                <div class="form-floating mb-3">
                    <input type="text" pattern="([aA-zZ]+)" minlength="3" maxlength="10" class="form-control rounded-4" name="chave" id="chave" placeholder="Chave" required>
                    <label for="floatingInput">Chave</label>
                </div>
                
                <div class="form-floating mb-3">
                    <textarea class="form-control rounded-4" pattern="([aA-zZ]+)" minlength="2" name="texto" id="texto" placeholder="Texto" required></textarea>
                    
                    <label for="floatingInput">Texto</label>
                </div>

                <button name="encrypt" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" onclick="validate(1)">Cifrar</button>

                <button name="decrypt" type="submit" class="btn btn-lg btn-secondary w-100 mx-0 mb-2" onclick="validate(2)">Decifrar</button>
                <small class="nota">*Só é permitido letras (a - z) e sem espaço </small>
                
                <div class="register-link">
                    <small class="text-muted"><a href="index.html">Voltar ao Inicio!</a></small> <br><br>
                </div>
                <p class="mt-0 mb-3 text-muted">Todos Direitos Reservados UPM-SI &copy; 2024</p>
            </form>

        </main>
        <script src="static/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
