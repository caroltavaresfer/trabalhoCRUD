<!DOCTYPE html>
<html lang="pt-BR">
<div id="form_ad" style="display: none;">
    <header>
        <div id="headerForm">
            <h4>Adicionando novo Cadastro</h4>
        </div>
    </header>
    <form id="ad" method="post" action="insert.php">
        <div class="inputs">
            <div class="a">
                <input type="text" name="nomeCompleto" placeholder=" ">
                <label>Nome completo</label>
            </div>
            <div class="a">
                <input type="number" name="cpf" placeholder=" ">
                <label>CPF</label>
            </div>
            <div class="a">
                <input type="text" name="endereco" placeholder=" ">
                <label>Endereço </label>
            </div>
            <div class="a">
                <input type="date" name='dataNascimento' placeholder=" ">
                <label>Data de Nascimento</label>
            </div>
            <div class="a">
                <input type="email" name="email" placeholder=" ">
                <label>Email</label>
            </div>
            <div class="a">
                <input type="number" name="valorTotalCompra" placeholder="">
                <label>Valor da Compra:</label>
            </div>
            <div class="a">
                <span>Numero de parcelas</span>
                <select name="numeroParcelas" id="numeroParcelas">
                    <option value="0" selected>0x</option>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i x</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="submit" class="btn btn-outline-primary mt-3" value="Salvar">
            <input type="button" class="btn btn-outline-secondary mt-3" id="fecharFormulario_ad" value="Fechar">
        </div>
    </form>
</div>
</html>