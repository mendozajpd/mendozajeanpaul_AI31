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

            <table class="table">
                <thead>
                    <tr>
                        <h1>NAVIGATION</h1>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <a href="{{ route('login') }}">
                                <img src="login.jpg" alt="" style="height: 125px; width: 150px;">
                            </a>
                        </th>
                        <th scope="row">
                            <a href="{{ route('register') }}">
                                <img src="register.jpg" alt="" style="height: 125px; width: 150px;">
                            </a>

                        </th>
                        <th scope="row">
                            <a href="{{ route('dashboard') }}">
                                <img src="dashboard.jpg" alt="" style="height: 125px; width: 150px;">
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">
                            LOGIN
                        </th>
                        <th scope="row">
                            REGISTER
                        </th>
                        <th scope="row">
                            DASHBOARD
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
