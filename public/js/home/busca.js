$('#search-input-entrada').on('input', function () {
    var termoBusca = $(this).val().toLowerCase();

    $('#cards-entrada .card').each(function () {
        var nomeCard = $(this).attr('nome').toLowerCase();

        if (nomeCard.includes(termoBusca)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

$('#search-input-acoes').on('input', function () {
    var termoBusca = $(this).val().toLowerCase();

    $('#cards-acoes .card').each(function () {
        var nomeCard = $(this).attr('nome').toLowerCase();

        if (nomeCard.includes(termoBusca)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

$('#search-input-fiis').on('input', function () {
    var termoBusca = $(this).val().toLowerCase();

    $('#cards-fiis .card').each(function () {
        var nomeCard = $(this).attr('nome').toLowerCase();

        if (nomeCard.includes(termoBusca)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

$('#search-input-criptos').on('input', function () {
    var termoBusca = $(this).val().toLowerCase();

    $('#cards-criptos .card').each(function () {
        var nomeCard = $(this).attr('nome').toLowerCase();

        if (nomeCard.includes(termoBusca)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});
