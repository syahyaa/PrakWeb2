@include('admin.layout.top')
@include('admin.layout.menu')
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

@include('admin.layout.bottom')