@section('container')
@endsection


<!DOCTYPE html>
<html lang="en">
@if(session()->has('Berhasil'))
    alert("Registrasi Berhasil!");
@endif
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <title>Det1ca</title>
    <link rel="stylesheet" href="Det1ca_styles.css">
    <style>
        .container{
        text-align: center;
        width: 500px;
        height: 100px;
        padding-top: 20px;
        }
        #btn{
        font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container_login">
        <div class="panels-container">
            <div class="toppanel">
                <img src="https://lh3.googleusercontent.com/EJRrmR9O2x7EvL3poQ257-QS9-FrQFbC2zVqgq8ESCEhZn5RFepjihdxmlBwMQEHmNXStAPT1svc9dQXTNxV8ssKdDkDQmmmRy3BmQ_5rs7Cv8_ELa_ySAPrTYRHfFvn3oAkrQ9_0w=w2400?source=screenshot.guru%22%3E" alt="" class="image">
            </div>
        </div>
        <div class="container2">
            <div class="LOGIN-REGISTER">
                <div id="login">
                <form action="/login" method="POST" class="LOGIN">
                    @csrf
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Username" name="username" id="username" autofocus required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="Password" placeholder="Password" name="password" id="password" required>
                    </div>
                    <input type="Submit" class="button_enter" value="Enter">
                    <p class="or-register">or create new account</p>
                </form>
                <div class="container">
                <button id="btn" onclick="myFunctionRegister()">Register</button>
                </div>
                </div>
        </div>
        </div>
    </div>

    {{-- <script src="Det1ca_LoginRegisterScript.js"> --}}
    <script>
        function myFunctionRegister() {
        location.href = "register";
        }
    </script>


</body>

</html>
