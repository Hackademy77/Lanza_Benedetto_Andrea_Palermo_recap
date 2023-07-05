<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e562f4e6cf.js" crossorigin="anonymous"></script>
    <title>Document</title>

    @vite(['resources/css/app.css','resources/js/app.js'])


</head>
<body>
<x-navbar/>
@if (session('message'))
<div class="alert alert-success alert-dismissible fade show"
role="alert">
{{ session('message') }}
<button type="button" class="btn-close" data-bs-dismiss="alert"
aria-label="Close"></button>
</div>
@endif

<div>
    {{$slot}}
</div>



</body>
</html>