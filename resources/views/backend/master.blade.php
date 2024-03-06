<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    {{-- header include  --}}
    @include('backend.common.heder')
    <div id="layoutSidenav">
        {{-- sidebar include  --}}
        @include('backend.common.sidebar')
        <div id="layoutSidenav_content">
            @yield('content')
            {{-- footer include  --}}
            @include('backend.common.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/assets/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/assets/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('backend/assets/js/datatables-simple-demo.js') }}"></script>

    {{-- for sidebar button downword --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the collapsible sidebar items
            var collapsibleItems = document.querySelectorAll('[data-bs-toggle="collapse"]');

            // Add a click event listener to each collapsible item
            collapsibleItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    // Toggle the 'downward' class for the clicked button
                    item.querySelector('.sb-sidenav-collapse-arrow').classList.toggle('downward');
                });
            });
        });
    </script>
</body>

</html>
