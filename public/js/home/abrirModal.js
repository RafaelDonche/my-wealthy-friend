function abrirModalEditar(element) {

    var div = element.closest('.div-btns');

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let corretora = div.getAttribute('corretora');
    let dataCompra = div.getAttribute('data-compra');
    let valor = div.getAttribute('valor');
    let type = div.getAttribute('type-quantidade');
    let quantidade = div.getAttribute('quantidade');

    $("#form-update-ativo").attr("action", rota);
    $("#img_logo_update").attr("src", logo);
    $("#select_update").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#corretora_update").val(corretora);
    $("#data_compra_update").val(dataCompra);
    $("#valor_unitario_update").val(valor);
    $("#quantidade_update").attr("type", type);
    $("#quantidade_update").val(quantidade);

    return $('#editarAtivo').modal({ show: true });
}

function abrirModalComprar(element) {

    var div = element.closest('.div-btns');

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let valor = div.getAttribute('valor');
    let type = div.getAttribute('type-quantidade');
    let quantidade = div.getAttribute('quantidade');

    $("#form-comprar-ativo").attr("action", rota);
    $("#img_logo_comprar").attr("src", logo);
    $("#select_comprar").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#valor_unitario_comprar").val(valor);
    $("#quantidade_comprar").attr("type", type);
    $("#quantidade_comprar").val(quantidade);

    return $('#comprarAtivo').modal({ show: true });
}

function abrirModalVender(element) {

    var div = element.closest('.div-btns');

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let valor = div.getAttribute('valor');
    let type = div.getAttribute('type-quantidade');
    let quantidade = div.getAttribute('quantidade');

    $("#form-vender-ativo").attr("action", rota);
    $("#img_logo_vender").attr("src", logo);
    $("#select_vender").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#valor_venda").val(valor);
    $("#quantidade_vender").attr("type", type);
    $("#quantidade_vender").val(quantidade);

    return $('#venderAtivo').modal({ show: true });
}

function abrirModalExcluir(element) {

    var div = element.closest('.div-btns');

    let nome = div.getAttribute('nome');
    let saldo = div.getAttribute('saldo');
    let logo = div.getAttribute('logo');
    let rota = element.getAttribute('rota');

    $("#form-destroy-ativo").attr("action", rota);
    $("#img_logo_destroy").attr("src", logo);
    $("#nome_destroy").html(nome);
    $("#saldo_destroy").html("Saldo do ativo: R$ " + saldo);

    return $('#removerAtivo').modal({ show: true });
}
