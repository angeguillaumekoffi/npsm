<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> NPSM admin</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Panneau admin</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Nouvelle Categorie</a></li>
                <li><a href="{{route('category.index')}}">Liste des Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Produits</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Nouveau Produit</a></li>
                <li><a href="{{route('product.index')}}">Liste des Produits</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
