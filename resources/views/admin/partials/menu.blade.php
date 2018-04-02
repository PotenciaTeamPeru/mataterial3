
<div class="sidebar" data-color="blue" data-image="/admin/assets/sidebar-1.jpg">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="/" class="simple-text">
{{ config('app.name') }} | Admin  
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">


            <li {{ request()->is('admin') ? 'class=active' : ''}} >
                <a href="{{ route ('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Inicio</p>
                </a>
            </li>

            <li 
                {{ request()->is('depositos') ? 'class=active' : ''}} 
                {{ request()->is('bancos') ? 'class=active' : ''}} 
                {{ request()->is('cuentas') ? 'class=active' : ''}} 
                {{ request()->is('titulares') ? 'class=active' : ''}} >
                
                <a href="{{ route ('depositos.index')}}">
                    <i class="material-icons">insert_chart</i>
                    <p> Transacciones </p>
                </a>
            </li>
            
            <li 
                {{ request()->is('proveedores') ? 'class=active' : ''}} 
                {{ request()->is('empresas') ? 'class=active' : ''}} 
                {{ request()->is('razonsocial') ? 'class=active' : ''}} 
                {{ request()->is('marcas') ? 'class=active' : ''}} >
                
                <a href="{{ route ('proveedores.index')}}">
                    <i class="material-icons">business</i>
                    <p> Proveedores </p>
                </a>
            </li>
            
            <!--
            <li 
                {{ request()->is('detalle') ? 'class=active' : ''}} 
                {{ request()->is('caracteristica') ? 'class=active' : ''}} >
                
                <a href="{{ route ('detalle.index')}}">
                    <i class="material-icons">view_module</i>
                    <p> Productos </p>
                </a>
            </li>
            
            <li 
                {{ request()->is('enviodetalle') ? 'class=active' : ''}} 
                {{ request()->is('envioinformacion') ? 'class=active' : ''}} >
                
                <a href="{{ route ('envioinformacion.index')}}">
                    <i class="material-icons">send</i>
                    <p> Envios </p>
                </a>
            </li>
            
            <li 
                {{ request()->is('compras') ? 'class=active' : ''}} >
                
                <a href="{{ route ('compras.index')}}">
                    <i class="material-icons">add_shopping_cart</i>
                    <p> Compras </p>
                </a>
            </li>
            
            <li 
                {{ request()->is('ventas') ? 'class=active' : ''}} >
                
                <a href="{{ route ('ventas.index')}}">
                    <i class="material-icons text-gray">shopping_cart</i>
                    <p> Ventas </p>
                </a>
            </li>
            
            <li 
                {{ request()->is('preciocompra') ? 'class=active' : ''}} 
                {{ request()->is('precioventa') ? 'class=active' : ''}} >
                
                <a href="{{ route ('preciocompra.index')}}">
                    <i class="material-icons text-gray">monetization_on</i>
                    <p> Precio </p>
                </a>
            </li>

            <li 
                {{ request()->is('novedades') ? 'class=active active-pro' : ''}} >
                
                <a href="{{ route ('novedades.index')}}">
                    <i class="material-icons">local_play</i>
                    <p> Novedades </p>
                </a>
            </li>
        -->

        </ul>
    </div>
</div>