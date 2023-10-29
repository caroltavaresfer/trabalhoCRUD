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
        <div class="inputs">
            <div class="a">
                <input type="text" placeholder=" ">
                <label>Nome completo</label>
            </div>

            <div class="a">
                <input type="number" name="cpf" placeholder=" ">
                <label>CPF </label>
            </div>

            <div class="a" >
                <input type="text" name="endereço" placeholder=" ">
                <label>Endereço </label>
            </div>

            <div class="a" >
                <input type="date" placeholder=" ">
            </div>

            <div class="a" >
                <input type="email" name="email" placeholder=" ">
                <label>Email</label>
            </div>

            <div class="a" >
                <input type="number" name="valor" placeholder="">
                <label>Valor da Compra:</label>
            </div>

            <div class="a" >
                <span >Numero de parcelas</span>
                <select>
                    <option selected>Parcelas</option>
                    <option value="1">0x</option>
                    <option value="2">2x</option>
                    <option value="3">4x</option>
                    <option value="4">6x</option>
                    <option value="5">8x</option>
                </select>
            </div>

            <input type="submit" class="btn btn-outline-primary mt-3" name="Salvar" value="Salvar">
            <input type="button" class="btn btn-outline-secondary mt-3" id="fecharFormulario_ad" value="Fechar">

        </div>
    </div>
    </section>
                                    <!--Forumulário_Editar-->
    <section id="formulário_ed">
    <div id="form_ed" style="display: none;">
        <header>
            <div id="headerForm">
                <h4>Editando Cadastro</h4>
            </div>
        </header>
        <div class="inputs">
            <div class="a">
                <input type="text" placeholder=" ">
                <label>Nome completo</label>
            </div>

            <div class="a">
                <input type="number" name="cpf" placeholder=" ">
                <label>CPF </label>
            </div>

            <div class="a" >
                <input type="text" name="endereço" placeholder=" ">
                <label>Endereço </label>
            </div>

            <div class="a" >
                <input type="date" placeholder=" ">
            </div>

            <div class="a" >
                <input type="email" name="email" placeholder=" ">
                <label>Email</label>
            </div>

            <div class="a" >
                <input type="number" name="valor" placeholder="">
                <label>Valor da Compra:</label>
            </div>

            <div class="a" >
                <span >Numero de parcelas</span>
                <select>
                    <option selected>Parcelas</option>
                    <option value="1">0x</option>
                    <option value="2">2x</option>
                    <option value="3">4x</option>
                    <option value="4">6x</option>
                    <option value="5">8x</option>
                </select>
            </div>

            <input type="submit" class="btn btn-outline-primary mt-3" name="Salvar" value="Salvar">
            <input type="button" class="btn btn-outline-secondary mt-3" id="fecharFormulario_ed" value="Fechar">
        </div>
    </div>
    </section>

                                    <!--Tabela-->
    <header>
        <div id="headertable">
            <h4>Cadastros salvos</h4>
                                    <!-- Botões-->
            <div id="grupo-botao">
                <button type="button" class="btn btn-outline-info" id="mostrarFormulario_ad">Adicionar</button>
                <button type="button" class="btn btn-outline-warning" id="mostrarFormulario_ed">Editar</button>
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