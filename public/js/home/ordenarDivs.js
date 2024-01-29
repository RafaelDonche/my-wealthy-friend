// reod
function orderAsc(conteiner, attribute) {
    // Passo 1: Obter todas as divs
    var divs = $(conteiner).children();

    // Passo 2: Extrair Datas
    var divsWithDates = Array.from(divs).map(div => ({
        element: div,
        date: new Date(div.getAttribute(attribute)) // Assumindo que as datas estão em um atributo data-date
    }));

    // Passo 3: Ordenar com Base nas Datas
    divsWithDates.sort((a, b) => a.date - b.date);

    // Passo 4: Reinserir Divs na Ordem Correta
    divsWithDates.forEach(item => $('#cards-entrada').append(item.element));// Ou substitua pelo seu próprio elemento contêiner
}

function orderDesc(conteiner, attribute) {
    // Passo 1: Obter todas as divs
    var divs = $(conteiner).children();

    // Passo 2: Extrair Datas
    var divsWithDates = Array.from(divs).map(div => ({
        element: div,
        date: new Date(div.getAttribute(attribute)) // Assumindo que as datas estão em um atributo data-date
    }));

    // Passo 3: Ordenar com Base nas Datas
    divsWithDates.sort((a, b) => a.date - b.date);

    // Passo 4: Reinserir Divs na Ordem Correta
    divsWithDates.forEach(item => $('#cards-entrada').prepend(item.element));// Ou substitua pelo seu próprio elemento contêiner
}
