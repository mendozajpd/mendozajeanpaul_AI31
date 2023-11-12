<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity5</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <div class="centered-container">
        <div class="bordered">
            <form action="" method="post">
                <table class="table">
                    <thead>
                      <tr>
                            <h1>SIGN UP</h1>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">USERNAME</th>
                        <td>
                            <input type="text">
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">E-MAIL</th>
                        <td>                            
                            <input type="text" placeholder="">
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">PASSWORD</th>
                        <td>                            
                            <input type="text" placeholder="">
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">CONFIRM PASSWORD</th>
                        <td>                            
                            <input type="text" placeholder="">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <input type="button" value="REGISTER">
            </form>
            <a href="{{route('login')}}" style="font-size: 12px">Have an account?</a> <br>
        </div>
    </div>
</body>

</html>
