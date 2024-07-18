
<nav class="navbar">
    <div class="hamburguer">
        <i class="fas fa-bars"></i>
    </div>
    <div class="navbar-left">
        <div class="navbar-brand">
            <a href="#"><img src="{{ asset('img/logo-udemy.svg')}}" alt="Udemy Logo"></a>
        </div>
        <ul class="navbar-links">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Categorias</a>
                <ul class="dropdown-menu">
                    @foreach ($categorias as $c)
                        <li>{{ $c->nome_categoria }}</li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
    <div class="navbar-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Pesquisar por qualquer coisa">
    </div>
    <div class="navbar-right">
        <ul class="navbar-links">
            <li><a id="udemy-business" href="#">Udemy Business</a></li>
            <li><a id="ensine-udemy" href="#">Ensine na Udemy</a></li>
        </ul>
        <ul class="navbar-icons">
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        <div class="navbar-buttons">
            <a href="#" class="btn login-btn">Fazer login</a>
            <a href="#" class="btn signup-btn">Cadastre-se</a>
            <a href="#" class="btn login-btn"><i class="fas fa-globe"></i></a>
        </div>
    </div>
</nav>