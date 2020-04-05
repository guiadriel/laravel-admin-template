<aside class="sidebar">
    <div class="branding">
         <div class="nav-profile d-flex justify-content-between flex-grow-1">
             <img src="{{asset('storage/avatars/1.png')}}" alt="">
             <h5>Guilherme Adriel</h5>
         </div>
        <p>Acesso em {{date('d/m/Y - H:i:s')}}</p>
    </div>
    <ul class='nav flex-column'>
        <li class="nav-item active">
            <a href="" class="nav-link ">
                <span class="material-icons">dashboard</span>
                Dashboard
            </a>
        </li>
        <li class="nav-item sidebar-dropdown">
            <a class="nav-link" data-toggle="collapse" href="#pedidos_submenu" role="button" aria-expanded="false" aria-controls="pedidos_submenu">
                <span class="material-icons">add_shopping_cart</span>
                Produção
            </a>
            <div class="sidebar-submenu collapse" id="pedidos_submenu">
                <ul class='nav-submenu'>
                  <li class='nav-subitem'> <a href="#" class='nav-link'>Nova produção</a> </li>
                  <li class='nav-subitem'> <a href="#" class='nav-link'>Cozinha</a> </li>
                  <li class='nav-subitem'> <a href="#" class='nav-link'>Tipos de produção</a> </li>
                  <li class='nav-subitem'> <a href="#" class='nav-link'>Produtos</a> </li>
                  <li class='nav-subitem'> <a href="#" class='nav-link'>Insumos</a> </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link ">
                <span class="material-icons">dashboard</span>
                Dashboard
            </a>
        </li>
    </ul>
</aside>
