var cpf = document.getElementById('#cpf');


window.oninput = function () {
    document.querySelector('#cpf1').value = document.querySelector('#cpf').value.replace(/[^0-9]/g, "").replace(/^([\d]{3})([\d]{3})?([\d]{3})?([\d]{2})?/, "$1.$2.$3-$4");

        cpf1.value = value;
    

}
