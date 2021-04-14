<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
  </script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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