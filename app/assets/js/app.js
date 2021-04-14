

var  datatable = function(){
    $(document).ready(function(){
            $('#pacientes').DataTable({
                "processing": true,
                'ajax': 'http://localhost/data/data.json',
                'language': {
                    'url' : '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json'
                },
                "order": [[0,"desc"]],
                "columns": [
                    { "data": "id" },
                    { "data": "nome" },
                    { "data": "sobrenome" },
                    { "data": "nascimento" },
                    { "data": "sexo" },
                    { "data": "departamento" },
                    { "data": null,
                      "render": function(data, type, row){
                            //se quero pegar o id so usar row["id"]

                            return '<a class="btn btn-warning" href="#'+ row["id"] +'">Editar</a>';
                      }
                    }
                    
                ],

                "columnsDef":[
                    {
                    "targets": -1,
                    "data": null,
                    "visible": true,
                    "searchable": false,
                    "orderable": false
                    }
                ]
            }
            
            
            );
    });
}