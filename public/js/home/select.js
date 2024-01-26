$('#acao').change(function() {
    var logo = this.options[this.selectedIndex].getAttribute('logourl');
    var valor = this.options[this.selectedIndex].getAttribute('valor');

    $('#img_logo_acao').attr('src', logo);
    $("#valor_unitario_acao").attr('value', valor);
});

$('#fii').change(function() {
    var logo = this.options[this.selectedIndex].getAttribute('logourl');
    var valor = this.options[this.selectedIndex].getAttribute('valor');

    $('#img_logo_fii').attr('src', logo);
    $("#valor_unitario_fii").attr('value', valor);
});

$('#cripto').change(function() {
    var logo = this.options[this.selectedIndex].getAttribute('logourl');
    var valor = this.options[this.selectedIndex].getAttribute('valor');

    $('#img_logo_cripto').attr('src', logo);
    $("#valor_unitario_cripto").attr('value', valor);
});
