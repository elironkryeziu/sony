<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{{-- <script src="https://unpkg.com/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>

 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <title>Game Center - Rahovec</title>
 </head>
 <body class="c-app">
 @include('partials.menu')
 <div class="c-wrapper">
<header class="c-header c-header-light c-header-fixed">
    {{-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li> --}}

</header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>
<footer class="c-footer">
<div><a href="/">Game Center</a> © 2020 Rahovec</div>
 {{-- <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div> --}}
</footer>
</div>

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
 </body>
</html>