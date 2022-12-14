<?php
  require_once 'config/config.php';

  $sql = "select crianca.crianca_id, crianca.cr_nome, crianca.cr_apelido, encarregado.nome, encarregado.apelido from crianca inner join encarregado on crianca.id_encarregado = encarregado.encarregado_id;";
  $registo = $con->query($sql, PDO::FETCH_ASSOC);
  $res = $registo->fetch();

 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Sygec - matricula</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sygec</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestao Academica
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Cadastro</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#criancaModal" data-whatever="@mdo">Crianca</a>

                        <a class="collapse-item" href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#encarregadoModal" data-whatever="@mdo">Encarregado</a>

                        <a class="collapse-item" href="cards.html" type="button" class="btn btn-primary" data-toggle="modal" data-target="#funcionarioModal" data-whatever="@mdo">funcionario</a>

                        <a class="collapse-item" href="cards.html" type="button" class="btn btn-primary" data-toggle="modal" data-target="#nivelModal" data-whatever="@mdo">Nivel</a>

                        <a class="collapse-item" href="cards.html" type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoriaFuncModal" data-whatever="@mdo">Categoria Funcionario</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="frmMatricula.html" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Matricula</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#matriculaModal" data-whatever="@mdo">Criar</a>
                        <a class="collapse-item" href="frmMatricula.html">Gerir</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Relatorio
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pagamento</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="frmPropina.html">Propina</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sobre</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Dezembro 12, 2019</div>
                                        <span class="font-weight-bold">ticongas</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Dezembro 7, 2019</div>
                                        Nao tem pena
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Dezembro 2, 2019</div>
                                        de ninguem
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver Todos Alertas</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alvaro Sargento</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="row justify-content-center ">
                        <h4>Matricula</h4>
                    </div>
                    <div class="row mb-4">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm">
                              <input type="search" id="form1" class="form-control" placeholder=" codigo..." />
                            </div>
                            <div class="col-sm">
                              <input type="search" id="form1" class="form-control" placeholder=" nome..." />
                            </div>
                            <div class="col-sm">
                              <input type="search" id="form1" class="form-control" placeholder=" nivel..." />
                            </div>
                            <div class="col-sm">
                              <input type="search" id="form1" class="form-control" placeholder=" Encarregado..." />
                            </div>
                          </div>
                        </div>
                    </div>      
                    <div class="row">
                        <div class="col-sm">
                          <table class="table table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Codigo</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col">Encarregado</th>
                                  <th scope="col">Estado Financeiro</th>
                                  <th scope="col">A??oes</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Redjubem Pectrivio</td>
                                  <td>Alvaro Sargento</td>
                                  <td>pendente</td>
                                  <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                          <button type="button" class="btn btn-danger">Arquivar</button>
                                          <button type="button" class="btn btn-warning">Editar</button>
                                          <button type="button" class="btn btn-success">Ver Tudo</button>
                                        </div>
                                  </td>
                                </tr>
                                <tr>
                                  <?php

                                    foreach ($res as $key) {
                                      echo $key->crianca_id, $key->cr_nome . $key->cr_apelido, $key->nome . $key->apelido;
                                      echo '</p>';
                                    }
                                  ?>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->

    <!-- modal Funcionario -->
    <div class="modal fade" id="funcionarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registar Funcionario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="./funcionario.php">
              <div class="form-group">
                  <label for="apelido" class="col-form-label">Apelido</label>
                  <input type="text" class="form-control" name="apelido" id="apelido">
                  <label for="nome" class="col-form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" id="nome">
                  <label for="bi" class="col-form-label">Bilhete de Identidade</label>
                  <input type="text" class="form-control" name="bi" id="bi">
                  <label for="nacionalidade" class="col-form-label">Nacionalidade</label>
                  <input type="text" class="form-control" id="nacionalidade">
                  <label for="naturalidade" class="col-form-label">Naturalidade</label>
                  <input type="text" class="form-control" name="naturalidade" id="naturalidade">

                  <label for="sexo" class="col-form-label">Sexo</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="masculino" id="masculino" value="option1" checked>
                          <label class="form-check-label" for="masculino">Masculino</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="feminino" id="feminino" value="option2">
                          <label class="form-check-label" for="feminino">Femenino</label>
                      </div>
                  
                  <label for="data" class="col-form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" id="data" name="data">
                  <label for="bairro" class="col-form-label">Bairro de residencia</label>
                  <input type="text" class="form-control" id="bairro" name="bairro">
                  <label for="avenida" class="col-form-label">Avenida</label>
                  <input type="text" class="form-control" id="avenida" name="avenida">
                  <label for="casa" class="col-form-label">Numero da casa</label>
                  <input type="text" class="form-control" id="casa" name="casa">
              </div>

              <div class="form-group">
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                      categoria
                      </button>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                          <li><a class="dropdown-item active" href="#">Action</a></li>
                      </ul>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- modal Crianca -->
    <div class="modal fade" id="criancaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registar Crianca</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="./crianca.php">
              <div class="form-group">
                  <label for="apelidoC" class="col-form-label">Apelido</label>
                  <input type="text" class="form-control" id="apelidoC" name="apelidoC">
                  <label for="nomeC" class="col-form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeC" name="nomeC">
                  <label for="biC" class="col-form-label">Bilhete de Identidade</label>
                  <input type="text" class="form-control" id="biC" name="biC">
                  <label for="nacionalidadeC" class="col-form-label">Nacionalidade</label>
                  <input type="text" class="form-control" id="nacionalidadeC" name="nacionalidadeC">
                  <label for="naturalidadeC" class="col-form-label">Naturalidade</label>
                  <input type="text" class="form-control" id="naturalidadeC" name="naturalidadeC">

                  <label for="bi-name" class="col-form-label">Sexo</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios1">Masculino</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label" for="exampleRadios2">Femenino</label>
                      </div>
                  
                  <label for="dataC" class="col-form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" id="dataC" name="dataC">
                  <label for="bairroC" class="col-form-label">Bairro de residencia</label>
                  <input type="text" class="form-control" id="bairroC" name="bairroC">
                  <label for="avenidaC" class="col-form-label">Avenida</label>
                  <input type="text" class="form-control" id="avenidaC" name="avenidaC">
                  <label for="casaC" class="col-form-label">Numero da casa</label>
                  <input type="text" class="form-control" id="casaC" name="casaC">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- modal encarregado-->
    <div class="modal fade" id="encarregadoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registar encarregado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="./encarregado.php">
              <div class="form-group">
                  <label for="apelidoE" class="col-form-label">Apelido</label>
                  <input type="text" class="form-control" id="apelidoE" name="apelidoE">
                  <label for="nomeE" class="col-form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeE" name="nomeE">
                  <label for="biE" class="col-form-label">Bilhete de Identidade</label>
                  <input type="text" class="form-control" id="biE" name="biE">
                  <label for="nacionalidadeE" class="col-form-label">Nacionalidade</label>
                  <input type="text" class="form-control" id="nacionalidadeE" name="nacionalidadeE">
                  <label for="naturalidadeE" class="col-form-label">Naturalidade</label>
                  <input type="text" class="form-control" id="naturalidadeE" name="naturalidadeE">

                  <label for="bi-name" class="col-form-label">Sexo</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios1">Masculino</label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label" for="exampleRadios2">Femenino</label>
                      </div>
                  
                  <label for="dataE" class="col-form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" id="dataE" name="dataE">
                  <label for="bairroE" class="col-form-label">Bairro de residencia</label>
                  <input type="text" class="form-control" id="bairroE" name="bairroE">
                  <label for="avenidaE" class="col-form-label">Avenida</label>
                  <input type="text" class="form-control" id="avenidaE" name="avenidaE">
                  <label for="casaE" class="col-form-label">Numero da casa</label>
                  <input type="text" class="form-control" id="casaE" name="casaE">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- modal Categotia Funcionario -->
    <div class="modal fade" id="categoriaFuncModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registar Categotia Funciuonario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Descricao:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- modal Nivel -->
    <div class="modal fade" id="nivelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registar Niveis de matricula</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Descricao:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- modal matricula -->
    <div class="modal fade" id="matriculaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Matricular</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="cod-name" class="col-form-label">codigo</label>
                    <input type="text" class="form-control" id="cod-name">
                    <label for="nome-name" class="col-form-label">Nome</label>
                    <input type="text" class="form-control" id="nome-name">
                    <div class="form-group">
                        <div class="dropdown m-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Nivel
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>>

</body>

</html>