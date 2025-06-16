<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Order System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row min-vh-100">
        <div class="col-md-3 col-lg-2 bg-white border-end p-0">
            @include('layouts.sidebar')
        </div>

        <main class="col-md-9 col-lg-10 p-4">
            @include($view)
        </main>
    </div>

    {{-- Footer inside container --}}
    <footer class="mt-4">
        <hr>
        <p class="text-center text-muted">© {{ date('Y') }} Laravel JOS System</p>
    </footer>
</div>

</body>
</html>


