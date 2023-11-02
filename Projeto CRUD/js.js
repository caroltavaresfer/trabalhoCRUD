const mostrarFormularioBtn_ad = document.getElementById('mostrarFormulario_ad');
const mostrarFormularioBtn_ed = document.getElementById('mostrarFormulario_ed');
const formularioadDiv = document.getElementById('form_ad');
const formularioedDiv = document.getElementById('form_ed');
const tabelaDiv = document.getElementById('tabela');
const headertableDIV = document.getElementById('headertable');
const fecharFormulario_adBtn = document.getElementById('fecharFormulario_ad');
const fecharFormulario_edBtn = document.getElementById('fecharFormulario_ed');

mostrarFormularioBtn_ad.addEventListener('click', () => {
    
    if (formularioadDiv.style.display === 'none'&&tabelaDiv.style.width==='80%') {
        formularioadDiv.style.display = 'block';
        tabelaDiv.style.width='60%';
        headertableDIV.style.width='60%'
        tabelaDiv.classList.add('move');
        headertableDIV.classList.add('move');
    } else {
        formularioadDiv.style.display = 'none';
        tabelaDiv.style.width='80%';
        headertableDIV.style.width='80%'
        tabelaDiv.classList.remove('move');
        headertableDIV.classList.remove('move');
    }
});

fecharFormulario_adBtn.addEventListener('click', () => {
    formularioadDiv.style.display = 'none';
    tabelaDiv.style.width = '80%';
    headertableDIV.style.width = '80%';
    tabelaDiv.classList.remove('move');
    headertableDIV.classList.remove('move');
});
fecharFormulario_edBtn.addEventListener('click', () => {
    formularioedDiv.style.display = 'none';
    tabelaDiv.style.width = '80%';
    headertableDIV.style.width = '80%';
    tabelaDiv.classList.remove('move');
    headertableDIV.classList.remove('move');
});

mostrarFormularioBtn_ed.addEventListener('click', () => {
    
    if (formularioedDiv.style.display === 'none'&&tabelaDiv.style.width==='80%') {
        formularioedDiv.style.display = 'block';
        tabelaDiv.style.width='60%';
        headertableDIV.style.width='60%'
        tabelaDiv.classList.add('move');
        headertableDIV.classList.add('move');
    } else {
        formularioedDiv.style.display = 'none';
        tabelaDiv.style.width='80%';
        headertableDIV.style.width='80%'
        tabelaDiv.classList.remove('move');
        headertableDIV.classList.remove('move');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    const botoesExcluir = document.querySelectorAll("#botaoExcluir");

    botoesExcluir.forEach(botao => {
        botao.addEventListener("click", function() {
            const id = this.getAttribute("data-id");
            excluirLinha(id);
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const botaoExcluir = document.getElementById("botaoExcluir");

    botaoExcluir.addEventListener("click", function() {
        const checkboxes = document.querySelectorAll('.selecionados:checked');
        const idsSelecionados = Array.from(checkboxes).map(checkbox => checkbox.value);

        if (idsSelecionados.length > 0) {
            // Enviar os IDs selecionados para o script PHP de exclusão
            fetch('delete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ selecionados: idsSelecionados })
            })
            .then(response => {
                if (response.ok) {
                    console.log("Linhas excluídas com sucesso.");
                    // Você pode adicionar aqui a lógica para atualizar a interface após a exclusão
                } else {
                    console.error('Erro ao excluir as linhas.');
                }
            })
            .catch(error => {
                console.error('Erro na requisição:', error);
            });
        }
    });
});
