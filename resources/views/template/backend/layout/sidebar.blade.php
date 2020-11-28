<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('template/backend/') }}/assets/images/logo-icon.png" class="logo-icon" alt="Bangodash">
            <h5 class="logo-text"> Point of Sale</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="javaScript:void();" class="waves-effect"><i class="icon-home text-red"></i>
                <span>Dashboard</span></a>
        </li>
        <li>
            <a href="#" class="waves-effect">
                <i class="fa fa-database"></i> <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('kategori') }}"><i class="fa fa-circle-o"></i>Data Kategori</a></li>
                <li><a href="{{ route('produk') }}"><i class="fa fa-circle-o"></i>Data Produk</a></li>
            </ul>
        </li>

    </ul>

</div>
