

<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">


<div class="form-outline mb-0" data-mdb-input-init>
    <input type="search" class="form-control text-center" id="search-input" placeholder="Buscar...">
</div>
<table id="datatable" class="table table-striped dataTable" style="width: 100%;" aria-describedby="datatable">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Name: activate to sort column descending" style="width: 70px;" aria-sort="ascending">Name
            </th>
            <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Position: activate to sort column ascending" style="width: 88px;">Position</th>
            <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 241px;">Office</th>
            <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 114px;">Age</th>
            <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Start date: activate to sort column ascending" style="width: 99px;">Start date</th>
            <th class="sorting" tabindex="0" aria-controls="datatables-ajax" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 81px;">
                Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <td class="sorting_1">Airi</td>
            <td>Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>28th Nov 08</td>
            <td>$162,700</td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Angelica</td>
            <td>Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
            <td>9th Oct 09</td>
            <td>$1,200,000</td>
        </tr>
        <tr class="odd">
            <td class="sorting_1">Ashton</td>
            <td>Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>12th Jan 09</td>
            <td>$86,000</td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Bradley</td>
            <td>Greer</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>13th Oct 12</td>
            <td>$132,000</td>
        </tr>
        <tr class="odd">
            <td class="sorting_1">Brenden</td>
            <td>Wagner</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>7th Jun 11</td>
            <td>$206,850</td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Brielle</td>
            <td>Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>2nd Dec 12</td>
            <td>$372,000</td>
        </tr>
        <tr class="odd">
            <td class="sorting_1">Bruno</td>
            <td>Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>3rd May 11</td>
            <td>$163,500</td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Caesar</td>
            <td>Vance</td>
            <td>Pre-Sales Support</td>
            <td>New York</td>
            <td>12th Dec 11</td>
            <td>$106,450</td>
        </tr>
        <tr class="odd">
            <td class="sorting_1">Cara</td>
            <td>Stevens</td>
            <td>Sales Assistant</td>
            <td>New York</td>
            <td>6th Dec 11</td>
            <td>$145,600</td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Cedric</td>
            <td>Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>29th Mar 12</td>
            <td>$433,060</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Name</th>
            <th rowspan="1" colspan="1">Position</th>
            <th rowspan="1" colspan="1">Office</th>
            <th rowspan="1" colspan="1">Age</th>
            <th rowspan="1" colspan="1">Start date</th>
            <th rowspan="1" colspan="1">Salary</th>
        </tr>
    </tfoot>
</table>

<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            dom: 'lrtip', // Remove o componente de pesquisa padrão
            bLengthChange: false, // Remove o controle de número de entradas por página
            columnDefs: [{
                    visible: false,
                    targets: 0
                },
                {
                    orderable: false,
                    targets: 1
                },
                {
                    orderable: false,
                    targets: 2
                },
                {
                    orderable: false,
                    targets: 3
                }
            ],
            oLanguage: {
                // sLengthMenu: "Mostrar _MENU_ registros por página",
                sZeroRecords: "Nenhum registro encontrado",
                sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                sInfoEmpty: "Mostrando 0 / 0 de 0 registros",
                sInfoFiltered: "(filtrado de _MAX_ registros)",
                sSearch: "Pesquisar: ",
                oPaginate: {
                    sFirst: "Início",
                    sPrevious: "Anterior",
                    sNext: "Próximo",
                    sLast: "Último"
                }
            },
        });

        $('#search-input').on('input', function() {
            table.search(this.value).draw();
        });

        // carregar o card com as informações da api
        function carregarCard(item, id) {

            var card =`<div class="card card-ativo my-2 px-2">
                <div class="card-body row align-items-center">
                    <div class="col-md-3 text-center col-img">
                        <img class="card-img-top" src="` + item.logo + `" alt="Logo da ação">
                    </div>
                    <div class="col-md-9 inner-body">
                        <h5 class="card-title text-center">` + item.name + ` - ` + item.stock + `</h5>
                        <span class="text-muted">adicionado em 21/01/2024</span>
                        <p class="m-0">Saldo da carteira: R$ 10.000,00</p>
                        <p class="m-0">Quantidade: 100</p>
                    </div>
                </div>
            </div>`;

            $(id).append(card);

        }

        // axios.get(`{{ route('api.list') }}`)
        // .then(function (response) {
        //     // manipula o sucesso da requisição
        //     response.data.stocks.forEach(element => {
        //         carregarCard(element, "#cards-acoes");
        //     });
        // })
        // .catch(function (error) {
        //     // manipula erros da requisição
        //     console.error(error);
        // });

        /*
        *   REQUISIÇÕES PARA CARREGAR OS INVESTIMENTOS NA CARTEIRA
        */

        // preenche o input de ações e fiis
        // axios.get(`{{ route('api.list') }}`)
        // .then(function (response) {

        //     response.data.stocks.forEach(item => {
        //         let letras = item.stock.split("");

        //         let ultimas2 = letras[letras.length - 2] + letras[letras.length - 1];
        //         let ultimas3 = letras[letras.length - 3] + letras[letras.length - 2] + letras[letras.length - 1];

        //         var opt = `<option value="` + item.stock + `" logourl="` + item.logo + `" empresa="` + item.name + `">`
        //             + item.stock + ` - ` + item.name + `</option>`;

        //         if (ultimas2 == "11" || (ultimas3 == "11B" || ultimas3 == "11F")) {
        //             $("#fii").append(opt);
        //         } else {
        //             $("#acao").append(opt);
        //         }

        //     });

        // })
        // .catch(function (error) {
        //     console.error(error);
        // });

        // // preenche o input de criptos
        // axios.get(`{{ route('api.listCripto') }}`)
        // .then(function (response) {

        //     response.data.forEach(item => {

        //         console.log(item);

        //         // var opt = `<option value="` + item + `" logourl="` + item + `" empresa="` + item.name + `">`
        //         //     + item.stock + ` - ` + item.name + `</option>`;

        //         // if (ultimas2 == "11" || (ultimas3 == "11B" || ultimas3 == "11F")) {
        //         //     $("#fii").append(opt);
        //         // } else {
        //         //     $("#acao").append(opt);
        //         // }

        //     });

        // })
        // .catch(function (error) {
        //     console.error(error);
        // });
    });
</script>
