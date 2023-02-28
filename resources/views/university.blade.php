<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="{{ asset('/css/style.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/css/bootstrap-5.2.3-dist/css/bootstrap.css') }}"
        />
    </head>

    <body>
        <div
            class="card-university"
        >
            <h5>WELCOME {{ Session()->get('username') }}</h5>
            <a href="/"><button type="submmit">Logout</button></a>
        </div>
    </body>
</html>
