<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Company</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @yield('CssSection')
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <ul>
        <li class="nav-item">
            <a class="nav-link" href="/company/create">NEW COMPANY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Invoice.html">NEW INVOICE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">VIEW INVOICE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/company/show">VIEW COMPANY</a>
        </li>
    </ul>
</nav>
@yield('BodySection')
</body>
</html>
