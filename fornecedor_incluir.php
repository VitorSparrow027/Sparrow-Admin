<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My PHP - Home</title>
    <?php require_once("dist/css/css.php"); ?>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- #region navbar -->
        <!-- Navbar -->
        <?php require_once("layout/navbar.php"); ?>
        <!-- /.navbar -->
        <!-- #endregion -->

        <!-- Main Sidebar Container -->
        <?php require_once("layout/mainSidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cadastrar fornecedor</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedor</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Dados do Fornecedor</h5>
                                </div>
                                <form role="form" name="formCadastrarFornecedor" action="processa_cadastro.php"
                                    method="GET">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Estabelecimento</label>
                                                <div class="form-check">
                                                    <input id="pf" class="form-check-input" type="radio" name="radio1">
                                                    <label for="pf" class="form-check-label">Pessoa física</label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="pj" class="form-check-input" type="radio" name="radio1">
                                                    <label for="pj" class="form-check-label">Pessoa júridica</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeRazaoSocial" >
                                                <div class="form-group" >
                                                    <label></label>
                                                    <input type="text" class="form-control" name="razaoSocial">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeFantasia" >
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control"name="nomeFantasia">
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divInscricaoEstadual">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control"name="inscrisaoEstadual">
                                                </div>
                                            </div>
                                        </div><!-- Row DO formulario -->
                                        <div class="row pt-3">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" class="form-control cep" id="cep" name="cep">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Logradouro</label>
                                                    <input type="text" class="form-control" id="logradouro" name="logadouro">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="number" class="form-control" id="numero"
                                                        data-mask="S00.0" name="numero">
                                                </div>
                                            </div>
                                        </div><!-- row 2 do formulario -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" id="bairro" name="bairro">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control" id="cidade" name="cidade">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefone Fixo</label>
                                                    <input type="text" class="form-control" id="bairro"
                                                        data-mask="(00)00000-0000" name="telefone">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                    <input type="number" class="form-control" id="cidade" name="celular">
                                                </div>
                                            </div>
                                        </div><!-- row 3 do formulário -->
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn-link">Limpar Formulário</button>
                                    </div>
                            </div>
                            </form> <!-- Form -->
                        </div><!-- COL-SM-12 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once("layout/controlSidebar.php"); ?>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php require_once("layout/footer.php"); ?>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php require_once("dist/js/javascript.php"); ?>
        <script src="dist/js/pages/fornecedor/fornecedor_incluir.js"></script>
        <script src="dist/js/viacep.js"></script>
        <script src="dist/js/meuInputMask.js"></script>


</body>

</html>