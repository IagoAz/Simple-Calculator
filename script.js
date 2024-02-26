function validarFormulario() {
    // Declarando variaveis
    var n1 = document.getElementsByName("n1")[0].value;
    var n2 = document.getElementsByName("n2")[0].value;
    var operacao = document.querySelector('input[name="operacao"]:checked');

    // Verifica se o forms foi digitado corretamente
    if (!isNumeric(n1) || !isNumeric(n2) || operacao === null) {
        alert("Preencha os campos corretamente.");
        return false; // Não envia o forms
    }
    return true; // Envia o forms
}

// Função para o botão limpar
function limparCampos() {
    document.getElementsByName("n1")[0].value = "";
    document.getElementsByName("n2")[0].value = "";
    document.getElementById("res").value = "0";
}

// Verificando se n1 e n2 são números  
function isNumeric(value) {
return !isNaN(parseFloat(value)) && isFinite(value); }


