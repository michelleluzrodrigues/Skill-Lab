function valida() {
    var nome = document.getElementById('nome');
    var txt = document.getElementById('nome').value;
    var n = txt.length;
    if (n < 30) {
        alert("O nome digiteado tem " + n + " caracteres");
        return false;
        campo.focus();
    }
}