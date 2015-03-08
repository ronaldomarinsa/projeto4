<header class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="home">Home</a>
        </div>
        
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="empresa">Empresa</a></li>
                <li><a href="servicos">Serviços</a></li>
                <li><a href="produtos">Produtos</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
            <form class="navbar-form pull-right" role="search" action="busca" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquisar..." name="busca" id="busca">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar!</button>
                <a href="admin/login" class="btn btn-large btn-warning">Acesso Área Administrativa</a>

            </form>

        </div><!--/.nav-collapse -->

    </div>
</header>
    