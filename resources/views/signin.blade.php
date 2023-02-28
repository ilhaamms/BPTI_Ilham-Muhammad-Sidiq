<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="{{ asset('/css/bootstrap-5.2.3-dist/css/bootstrap.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/css/style.css') }}"
        />
    </head>

    <body>
        <div class="card-form">
            <div class="container-form">
                <h5 class="text-center">Form Sign In</h5>
                <p></p>
                <form
                    action="/registrasi"
                    method="POST"
                    name="pengunjung"
                    id="pengunjung"
                >
                    {{csrf_field()}}
                    <table>
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
    
                    <input
                        type="submit"
                        class="btn btn-success danger mt-4"
                        id="submit"
                        value="Sign In"
                        style="margin-left: 200px"
                    />
                </form>
                <br />
            </div>
        </div>
    </body>
</html>
