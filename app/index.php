<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <script src="/assets/js/jquery-3.6.0.min.js"
   crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css"/>
  <script src="/assets/js/jquery.dataTables.min.js">
  </script>

<link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css"  crossorigin="anonymous">
<script src="/assets/js/bootstrap.min.js"   crossorigin="anonymous"></script>
<script src="/assets/js/app.js" ></script>
</head>
<body>
<!-- "id":1,"nome":"Haroun","sobrenome":"Janecek","nascimento":"29/09/2017","sexo":"Bigender","departamento":"Research and Development" -->
<div class="w-100 p-3" style="background-color: #eee;">
    <div class="container">
<table id="pacientes" class="row-border hover order-column" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Nascimento</th>
                <th>Sexo</th>
                <th>Departamento</th>
                <th>Ações</th>
    
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data Nascimento</th>
                <th>Sexo</th>
                <th>Departamento</th>
                <th>Ações</th>
            </tr>
        </tfoot>
    </table>
    </div>
    </div>

<script>
    datatable();
</script>
</body>
</html>