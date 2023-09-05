<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Menu</title>

    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#listar-usuario').DataTable({
                "processing": true, 
                "serverSide": true,
                "ajax": {
                    "url": "proc_pesq_user.php",
                    "type": "POST"
                }
            });
        });
    </script>
</head>

<body>
    <a href="frmcadcliente.php"> Cadastro Cliente </a> <br>
    <a href="listarcliente.php"> Listar Clientes </a> <br>
    <a href="listarentrega.php"> Listar Entregas </a> <br>
    <a href="frmcadentrega.php"> Cadastrar Entrega </a> <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>