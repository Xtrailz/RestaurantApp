<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4KWBq78iYhF1dvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/sidebars.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Restaurant</title>
</head>
<body>
    <div class="d-flex">
        @include('layout.section.sidebar')
        <div class="row w-75 p-5">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.bundle.min,js"
    integrity="sha384-ka75k0G1n4gmtz2M1QnikT1wXgYsOg+OMhuP+I1RH9sENB0OLRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="/js/sidebars.js"></script>

</body>
</html>