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
            class="card-form"
        >
            <div class="container-form">
                <h5 class="text-center">Form Login</h5>
                <p></p>
                <form
                    action="/login"
                    method="POST"
                    name="pengunjung"
                    id="pengunjung"
                >
                    {{csrf_field()}}
                    <table >
                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><input required type="text" name="username" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input required type="password" name="password" /></td>
                        </tr>
                    </table>
    
                    <p>
                        @if ($message = Session::get('success'))
                        {{$message}}
                        @endif
                        
                        @if ($message = Session::get('error'))
                        {{$message}}
                        @endif
                    </p>
    
                    <input
                        type="submit"
                        id="submit"
                        value="submit"
                        class="btn btn-success"
                    />
                </form>
                <br />
                <p>Belum Daftar? Silahkan <a href="/signin" class="btn btn-info">Sign In</a></p>
            </div>
        </div>
    </body>
</html>
