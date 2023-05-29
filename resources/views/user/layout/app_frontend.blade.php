@include('user.layout.top_frontend')
@include('user.layout.menu_frontend')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
<!-- ini buat naro content atau main -->
@yield('content')
        </div>
    </main>
</div>
</div>

<!-- ini buat naro content atau main -->

@include('user.layout.bottom_frontend')