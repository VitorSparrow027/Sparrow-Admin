$(function () {
    'use strict';

    var tipoDocumento = $('#divTipoDocumento');
    var nomeRazaoSocial = $('#divNomeRazaoSocial');
    var nomeFantasia = $('#divNomeFantasia');
    var inscricaoEstadual = $('#divInscricaoEstadual');
    

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    nomeFantasia.hide();
    inscricaoEstadual.hide();

    function mostrarInput(id)
    {
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento label').prop('for', 'cpf');
                $('#divTipoDocumento input').prop('name', 'cpf');
                $('#divTipoDocumento input').prop('id', 'cpf')
                                            .mask('000.000.000-00');
                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Nome');
                $('#divNomeRazaoSocial label').prop('for','nome');
                $('#divNomeRazaoSocial input').prop('name','nome');
                $('#divNomeRazaoSocial label').prop('id','nome');
                nomeRazaoSocial.show();
                nomeFantasia.hide();
                inscricaoEstadual.hide();

                break;
            case 'pj':
                    $('#divTipoDocumento label').text('CNPJ');
                    $('#divTipoDocumento input').prop('name', 'cnpj');
                    $('#divTipoDocumento input').prop('id', 'cnpj')
                                                .mask('00.000.000/000-00');
                    tipoDocumento.show();
                    $('#divNomeRazaoSocial label').text('Razao Social');
                    $('#divNomeRazaoSocial label').prop('for','razaoSocial');
                    $('#divNomeRazaoSocial input').prop('name','razaoSocial');
                    $('#divNomeRazaoSocial input').prop('id','razaoSocial');
                    nomeRazaoSocial.show();
                    $('#divNomeFantasia label').text('Nome Fantasia');
                    $('#divNomeFantasia input').prop('for', 'nomeFantasia');
                    $('#divNomeFantasia input').prop('name', 'nomeFantasia');
                    $('#divNomeFantasia input').prop('id', 'nomeFantasia');
                    nomeFantasia.show();
                    $('#divInscricaoEstadual label').text('Inscrição Estadual');
                    $('#divInscricaoEstadual input').prop('for', 'inscricaoEstadual');
                    $('#divInscricaoEstadual input').prop('name', 'inscricaoEstadual');
                    $('#divInscricaoEstadual input').prop('id','inscricaoEstadual');
                    inscricaoEstadual.show();
                break;
            default:
                break;
        }
    }

    $(document).on('click', 'input[type=radio]', function () {
        var id = $(this).prop('id');
        mostrarInput(id);
    });

});