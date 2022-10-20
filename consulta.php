<?php
require_once("controller/ControllerCadastro.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
   				//var url_string = "http://localhost/Projeto-Web/" + delUrl;
				//var url = new URL(url_string);
				//var data = url.searchParams.get("id"); //pega o value
	        }  
		}
	</script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand" style="color: #000">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="consulta.php">Consulta</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro do Usuario</span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="TableData">
                       <?php
                            $controller = new ControllerCadastro();
                            $resultado = $controller->listar(0);
                            for($i=0;$i<count($resultado);$i++){
                        ?>
                                <tr>
                                    <td scope="col"><?php echo $resultado[$i]['email'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['senha'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['endereco'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['bairro'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['cep'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['cidade'];?></td>
                                    <td scope="col"><?php echo $resultado[$i]['estado'];?></td>
                                    
                                    <td scope="col">
                                        <button type="button" class="btn btn-outline-dark" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
                                        <button type="button" class="btn btn-outline-dark" onclick="javascript:confirmDelete('excluirClientes.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
                                    </td>
                                </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>