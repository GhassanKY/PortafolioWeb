
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="card my-10">
            <div class="card-body">
                <h1 class="h3 mb-2">GhassanKY Email</h1>
                <hr>
                <div class="space-y-3">
                    <p class="text-gray-700"> {{ $contacto['name'] }} </p>
                    <p class="text-gray-700">

                        {{ $contacto['texto'] }}

                    </p>
                    <p class="text-gray-700">

                        {{ $contacto['email'] }}

                    </p>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



