<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <title>Det1ca</title>
    <link rel="stylesheet" href="Det1ca_styles_register.css">
</head>

<body>
    <div class="container">
        <div class="container2">
            <div class="LOGIN-REGISTER">

                <form action="/register" method="POST" class="REGISTER">
                    @csrf
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="Password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-redo"></i>
                        <input type="Password" name="password_conf" id="password_conf" placeholder="Confirm Password"/>
                    </div>
                    <input type="Submit" class="button_enter_register" value="Enter">
                </form>

            </div>


        </div>





    <div class="panels-container">
        <div class="toppanel">
            <img src="https://lh3.googleusercontent.com/EJRrmR9O2x7EvL3poQ257-QS9-FrQFbC2zVqgq8ESCEhZn5RFepjihdxmlBwMQEHmNXStAPT1svc9dQXTNxV8ssKdDkDQmmmRy3BmQ_5rs7Cv8_ELa_ySAPrTYRHfFvn3oAkrQ9_0w=w2400?source=screenshot.guru%22%3E" alt="" class="image">

        </div>

    </div>
    </div>

    <script src="Det1ca_LoginRegisterScript.js"></script>
</body>

</html>
