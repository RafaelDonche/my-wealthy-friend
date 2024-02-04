function abrirModalEditarMeta(element) {

    var div = $(element).parent().get(0);

    let rota = div.getAttribute('rota_editar');
    let nome = div.getAttribute('nome');
    let descricao = div.getAttribute('descricao');
    let valor = div.getAttribute('valor');
    let data_fim = div.getAttribute('data_fim');
    let tipo_acao = div.getAttribute('tipo_acao');
    let tipo_fii = div.getAttribute('tipo_fii');
    let tipo_cripto = div.getAttribute('tipo_cripto');

    $("#form-update-meta").attr("action", rota);
    $("#nome_meta_update").val(nome);
    $("#descricao_meta_update").val(descricao);
    $("#valor_meta_update").val(valor);
    $("#data_fim_meta_update").val(data_fim);
    let selected = [];
    if (tipo_acao) {
        selected.push('1');
    }
    if (tipo_fii) {
        selected.push('2');
    }
    if (tipo_cripto) {
        selected.push('3');
    }
    $('#tipo_meta_update').val(selected);
    $('#tipo_meta_update').trigger('change');

    return $('#editarMeta').modal({ show: true });
}

function abrirModalExcluirMeta(element) {

    var div = $(element).parent().get(0);

    let rota = div.getAttribute('rota_excluir');
    let nome = div.getAttribute('nome');
    let valor = div.getAttribute('valor');
    let data_fim = div.getAttribute('data_fim_formatada');

    $("#form-destroy-meta").attr("action", rota);
    $("#nome_meta_destroy").html(nome);
    $("#valor_meta_destroy").html("Valor: R$ " + valor);
    $("#data_fim_meta_destroy").html("Data fim: " + data_fim);

    return $('#removerMeta').modal({ show: true });
}
