<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SiBA - Cadastro de Usuário</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
       <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="inicial.php">
                          Sistema Financeiro para Bazar
                        </a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Notificações">
                                <a id="notifications" href="#" class="" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i> <span class="title-main-bar">Notificações</span>
                                </a>
                            </li>
                            <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Ajuda">
                                <a id="help" href="#" class="" data-toggle="dropdown">
                                    <i class="fa fa-question-circle"></i> <span class="title-main-bar">Ajuda</span>
                                </a>
                            </li>
                            <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Configurações">
                                <a id="settings" href="#" class="" data-toggle="dropdown">
                                    <i class="fa fa-cogs"></i> <span class="title-main-bar">Configurações</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/user-image-ex.jpg" class="img-responsive img-thumbnail img-circle"> Username</a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="edit-user.html">Editar perfil</a></li>
                                    <li><a href="#">Configurações</a></li>
                                    <li><a href="login.html">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="inicial.php">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-address-card"></i></span>
                            <span class="sidebar-title">Cadastros</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="view_clientes.html"><i class="fa fa-caret-right"></i>Clientes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Fornecedores</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-barcode"></i></span>
                            <span class="sidebar-title">Produtos</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="view_produtos.html"><i class="fa fa-caret-right"></i>Gerenciar Produtos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="view_vendas.html">
                            <span class="sidebar-icon"><i class="fa fa-shopping-bag"></i></span>
                            <span class="sidebar-title">Vendas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-cube"></i></span>
                            <span class="sidebar-title">Estoque</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
                            <span class="sidebar-icon"><i class="fa fa-file-text"></i></span>
                            <span class="sidebar-title">Notas Fiscais</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Gerenciar NF-e</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Gerenciar NFC-e</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-clipboard"></i></span>
                            <span class="sidebar-title">Relatórios</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">
        </main>
    </div>

    <div class="breadcrumb-custom">
      <i class="fa fa-users"></i> Adicionar Usuário
      <span class="location" style="float: right;">Home > Cliente > Adicionar</span>
    </div>

    <div class="container">

        <div class="panel panel-success">
            <div class="panel-heading">
               <h3 class="panel-title"><i class="fa fa-warning"></i> Atenção!</h3>
            </div>
            <div class="panel-body">
               Todos os campos com o <span style="color: red;">*</span> são obrigatórios.
            </div>
        </div>

        <form method="POST" action="cadastrar.php" role="form" accept-charset="utf-8">
            
            <div class="col-xs-12 container-form"> 
                <h4><i class="fa fa-drivers-license-o"></i> Dados gerais</h4>
                
                <div class="form-group col-sm-4">
                    <label for="nome">Nome <span style="color: red;">*</span></label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome do Funcionário">
                </div>
                <div class="form-group col-sm-4">
                    <label for="email">E-mail <span style="color: red;">*</span></label>
                    <input name="usuario" type="email" class="form-control" placeholder="teste@teste.com">
                </div>
        
                <div class="form-group col-sm-4">
                    <label for="senha">Senha <span style="color: red;">*</span></label>
                    <input type="password" class="form-control" placeholder="senha">
                </div>
                
                
          <!--    <div class="form-group col-sm-3">
                 <label for="numero">Número</label>
                 <input type="number" class="form-control" id="numero" placeholder="">
                </div>
-->

                <div class="col-sm-12 col-md-12 pull-right text-right">
                    <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Cancelar</button>
                    <button type="submit" class="btn side-primary-color" name=""><i class="fa fa-check"></i> Cadastrar </button>
                </div>
            </div>
        </form>

       
    </div>
    
    <footer>
      <div class="footer-internal"> 
         <h4 class="text-center">&copy; 2019 - <i>Santos, Luany e Oliveira</i> </h4>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>