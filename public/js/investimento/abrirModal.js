function abrirModalEditarCompra(element) {

    var div = $(element).parent().get(0);

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let corretora = div.getAttribute('corretora');
    let dataCompra = div.getAttribute('data-compra');
    let valor = div.getAttribute('valor');
    let quantidade = div.getAttribute('quantidade');

    $("#form-update").attr("action", rota);
    $("#img_logo_update").attr("src", logo);
    $("#select_update").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#corretora_update").val(corretora);
    $("#div_data_venda").addClass('d-none');
    $("#div_data_compra").removeClass('d-none');
    $("#data_venda_update").attr("required", false);
    $("#data_compra_update").attr("required", true);
    $("#data_compra_update").val(dataCompra);
    $("#valor_unitario_update").val(valor);
    $("#quantidade_update").val(quantidade);

    return $('#editar').modal({ show: true });
}

function abrirModalEditarVenda(element) {

    var div = $(element).parent().get(0);

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let corretora = div.getAttribute('corretora');
    let dataVenda = div.getAttribute('data-venda');
    let valor = div.getAttribute('valor');
    let quantidade = div.getAttribute('quantidade');

    $("#form-update").attr("action", rota);
    $("#img_logo_update").attr("src", logo);
    $("#select_update").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#corretora_update").val(corretora);
    $("#div_data_compra").addClass('d-none');
    $("#div_data_venda").removeClass('d-none');
    $("#data_compra_update").attr("required", false);
    $("#data_venda_update").attr("required", true);
    $("#data_venda_update").val(dataVenda);
    $("#valor_unitario_update").val(valor);
    $("#quantidade_update").val(quantidade);

    return $('#editar').modal({ show: true });
}

function abrirModalComprar(element) {

    var div = $(element).parent().get(0);

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let type = div.getAttribute('type-quantidade');
    let valor = div.getAttribute('valor');

    $("#form-comprar-ativo").attr("action", rota);
    $("#img_logo_comprar").attr("src", logo);
    $("#select_comprar").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#quantidade_comprar").attr("type", type);
    $("#valor_unitario_ativo").val(valor);

    return $('#comprarAtivo').modal({ show: true });
}

function abrirModalVender(element) {

    var div = $(element).parent().get(0);

    let rota = element.getAttribute('rota');
    let logo = div.getAttribute('logo');
    let idAtivo = div.getAttribute('idativo');
    let nome = div.getAttribute('nome');
    let type = div.getAttribute('type-quantidade');
    let valor = div.getAttribute('valor');

    $("#form-vender-ativo").attr("action", rota);
    $("#img_logo_vender").attr("src", logo);
    $("#select_vender").append(
        `<option value="` + idAtivo + `" selected>` + nome + `</option>`
    );
    $("#quantidade_vender").attr("type", type);
    $("#valor_unitario_ativo").val(valor);

    return $('#venderAtivo').modal({ show: true });
}

function abrirModalExcluir(element) {

    var div = $(element).parent().get(0);

    let nome = div.getAttribute('nome');
    let saldo = div.getAttribute('saldo');
    let logo = div.getAttribute('logo');
    let rota = element.getAttribute('rota');

    $("#form-destroy-ativo").attr("action", rota);
    $("#img_logo_destroy_ativo").attr("src", logo);
    $("#nome_destroy_ativo").html(nome);
    $("#saldo_destroy_ativo").html("Saldo do ativo: R$ " + saldo);

    return $('#removerAtivo').modal({ show: true });
}

// function abrirModalExcluirCompra(element) {

//     var div = $(element).parent().get(0);

//     let nome = div.getAttribute('nome');
//     let saldo = div.getAttribute('saldo');
//     let logo = div.getAttribute('logo');
//     let rota = element.getAttribute('rota');

//     $("#form-destroy").attr("action", rota);
//     $("#img_logo_destroy").attr("src", logo);
//     $("#nome_destroy").html(nome);
//     $("#saldo_destroy").html("Saldo da compra: R$ " + saldo);

//     return $('#remover').modal({ show: true });
// }

// function abrirModalExcluirVenda(element) {

//     var div = $(element).parent().get(0);

//     let nome = div.getAttribute('nome');
//     let saldo = div.getAttribute('saldo');
//     let logo = div.getAttribute('logo');
//     let rota = element.getAttribute('rota');

//     $("#form-destroy").attr("action", rota);
//     $("#img_logo_destroy").attr("src", logo);
//     $("#nome_destroy").html(nome);
//     $("#saldo_destroy").html("Saldo da venda: R$ " + saldo);

//     return $('#remover').modal({ show: true });
// }
