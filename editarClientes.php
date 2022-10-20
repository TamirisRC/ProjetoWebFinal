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
                                <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consulta.php">Consulta</a>
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
                        <span class="navbar-brand">Editar</span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <?php
            $controller = new ControllerCadastro();
            $resultado= $controller->listar($_GET['id']);
        ?>
        
        <div class="row">
            <div class="col">
                <form method="post" action="controller/ControllerCadastro.php?funcao=editar&id= <?php echo $resultado[0] ['id'];?>" id="form" name="form">        
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" required id="txtEmail" name="txtEmail" value="<?php echo $resultado[0] ['email']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSenha4" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" required name="txtSenha" value="<?php echo $resultado[0] ['senha'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEndereco4" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="txtEndereco" required name="txtEndereco" value="<?php echo $resultado[0] ['endereco'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputBairro4" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="txtBairro" required name="txtBairro" value="<?php echo $resultado[0] ['bairro'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCep4" class="form-label">Cep</label>
                            <input type="text" class="form-control" id="txtCep" required name="txtCep" value="<?php echo $resultado[0] ['cep'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCidade4" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="txtCidade" required name="txtCidade" value="<?php echo $resultado[0] ['cidade'];?>">
                        </div>


                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Estado</label>
                            <select class="form-control" required name="cboEstado" id="cboEstado">
                                <option <?php if($resultado[0]['estado'] == "AC") { echo "selected";} ?>>AC</option>
                                <option <?php if($resultado[0]['estado'] == "AL") { echo "selected";} ?>>AL</option>
                                <option <?php if($resultado[0]['estado'] == "AP") { echo "selected";} ?>>AP</option>
                                <option <?php if($resultado[0]['estado'] == "AM") { echo "selected";} ?>>AM</option>
                                <option <?php if($resultado[0]['estado'] == "BA") { echo "selected";} ?>>BA</option>
                                <option <?php if($resultado[0]['estado'] == "CE") { echo "selected";} ?>>CE</option>
                                <option <?php if($resultado[0]['estado'] == "ES") { echo "selected";} ?>>ES</option>
                                <option <?php if($resultado[0]['estado'] == "GO") { echo "selected";} ?>>GO</option>
                                <option <?php if($resultado[0]['estado'] == "MA") { echo "selected";} ?>>MA</option>
                                <option <?php if($resultado[0]['estado'] == "MT") { echo "selected";} ?>>MT</option>
                                <option <?php if($resultado[0]['estado'] == "MS") { echo "selected";} ?>>MS</option>
                                <option <?php if($resultado[0]['estado'] == "MG") { echo "selected";} ?>>MG</option>
                                <option <?php if($resultado[0]['estado'] == "PA") { echo "selected";} ?>>PA</option>
                                <option <?php if($resultado[0]['estado'] == "PB") { echo "selected";} ?>>PB</option>
                                <option <?php if($resultado[0]['estado'] == "PR") { echo "selected";} ?>>PR</option>
                                <option <?php if($resultado[0]['estado'] == "PE") { echo "selected";} ?>>PE</option>
                                <option <?php if($resultado[0]['estado'] == "PI") { echo "selected";} ?>>PI</option>
                                <option <?php if($resultado[0]['estado'] == "RJ") { echo "selected";} ?>>RJ</option>
                                <option <?php if($resultado[0]['estado'] == "RN") { echo "selected";} ?>>RN</option>
                                <option <?php if($resultado[0]['estado'] == "RS") { echo "selected";} ?>>RS</option>
                                <option <?php if($resultado[0]['estado'] == "RO") { echo "selected";} ?>>RO</option>
                                <option <?php if($resultado[0]['estado'] == "RR") { echo "selected";} ?>>RR</option>
                                <option <?php if($resultado[0]['estado'] == "SP") { echo "selected";} ?>>SP</option>
                                <option <?php if($resultado[0]['estado'] == "SE") { echo "selected";} ?>>SE</option>
                                <option <?php if($resultado[0]['estado'] == "TO") { echo "selected";} ?>>TO</option>
                                <option <?php if($resultado[0]['estado'] == "DF") { echo "selected";} ?>>DF</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark" id="btnInserir">Editar</button>
                        </div>
                </form>
            </div>
                    </div>
        </div>
    </div>
</body>
</html>