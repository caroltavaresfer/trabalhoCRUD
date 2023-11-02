<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Projeto CRUD</title>
</head>
<body>
   <!--Cabeçalho-->
        <header id="cabecalho">
            <h1>REGISTRO DE COMPRAS</h1>
        </header>

    <!-- Formulario_adicionar-->
        <section id="formulário_ad">
            <?php include 'formulario_ad.php'; ?>
        </section>
    <!--Tabela-->
        <header>
            <div id="headertable">
                <h4>Cadastros salvos</h4>
                                        <!-- Botões-->
                <div id="grupo-botao">
                    <button type="button" class="btn btn-outline-info" id="mostrarFormulario_ad">Adicionar</button>

                </div>
            </div>
        </header>

        <div id="tabela">
        <div id="cadastros">
            <table class="table">
                <!-- Seu cabeçalho de tabela -->
                <thead>
                    <!-- Seus cabeçalhos de coluna -->
                </thead>
                <tbody>
                    <?php
                    include 'select.php';
                    ?>
                </tbody>
            </table>
        </div>
        
    <!--Scripts-->
    <script src="js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>