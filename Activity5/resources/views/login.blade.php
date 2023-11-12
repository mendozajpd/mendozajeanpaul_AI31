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
                            <h1>ACTIVITY5</h1>
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
                        <th scope="row">PASSWORD</th>
                        <td>                            
                            <input type="text" placeholder="">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <input type="button" value="LOGIN">
            </form>
            <a href="{{route('register')}}" style="font-size: 12px">Register</a> <br>
        </div>
    </div>
</body>

</html>
