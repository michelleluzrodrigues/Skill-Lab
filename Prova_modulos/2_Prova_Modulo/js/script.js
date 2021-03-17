$('#form-contato').submit(function () {
    var nome = $('#nome');
    var email = $('#email');
    var telefone = $('#telefone');
    var mensagem = $('#mensagem');
    var erro = $('.alert');
    var campo = $('#campo-erro');

    // removendo o elemento da tela sempre que tentar submeter o formulario

    erro.addClass('d-none');
    $('is-invalid').removeClass('is-invalid');

    // Valida o campo o nome
    if (nome.val() == '') {
        erro.removeClass('d-none');
        campo.html('nome'); // nome do campo que nao foi preeenchido
        nome.focus();
        nome.addClass('is-invalid');

        return false;
    }

    // Valida o campo o telefone
    if (telefone.val() == '') {
        erro.removeClass('d-none');
        campo.html('nome'); // telefone do campo que nao foi preeenchido
        telefone.focus();
        telefone.addClass('is-invalid');

        return false;
    }
    // Valida o campo o email
    if (email.val() == '') {
        erro.removeClass('d-none');
        campo.html('nome'); // email do campo que nao foi preeenchido
        email.focus();
        email.addClass('is-invalid');

        return false;
    }
    // Valida o campo o mesagem
    if (mensagem.val() == '') {
        erro.removeClass('d-none');
        campo.html('mensagem'); // mensagem do campo que nao foi preeenchido
        mensagem.focus();
        mensagem.addClass('is-invalid');

        return false;
    }

    return false;
});

