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
                                    <!--Forumulário_Adicionar-->
    <section id="formulário_ad">
    <div id="form_ad" style="display: none;">
        <header>
            <div id="headerForm">
                <h4>Adicionando novo Cadastro</h4>
            </div>
        </header>
        <div id="inputs">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput">Nome completo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="number">
                <label for="floatingInput">CPF </label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="adress">
                <label for="floatingInput">Endereço </label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="date">
                <label for="floatingInput">Data de nascimento </label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Valor da Compra: $</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>

            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Parcelas</option>
                    <option value="1">2x</option>
                    <option value="2">4x</option>
                    <option value="3">6x</option>
                    <option value="4">8x</option>
                </select>
                <label for="floatingSelect">Numero de parcelas</label>
            </div>

            <input type="submit" class="btn btn-outline-primary mt-3" name="Salvar" value="Salvar">
        </div>
    </div>
    </section>

                                    <!--Tabela-->
    <header>
        <div id="headertable">
            <h4>Cadastros salvos</h4>
                                    <!-- Botões-->
            <div id="grupo-botao">
                <button type="button" class="btn btn-outline-info"id="mostrarFormulario">Adicionar</button>
                <button type="button" class="btn btn-outline-warning">Editar</button>
                <button type="button" class="btn btn-outline-danger">Deletar</button>
            </div>
        </div>
    </header>

    <div id="tabela">
        <div id="cadastros">
        <table class= table table-striped>
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Data Nascimento</th>
                    <th>Valor Total Compra</th>
                    <th>Número de Parcelas</th>
                </tr>
            </thead>
                <?php
                    include 'select.php';
                ?>
        </table>                                    
        </div>
    </div>




    <!--Scripts-->
    <script src="js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>