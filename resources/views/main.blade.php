<!doctype html>
<html lang="en">
  <head>
    <style>
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }
    p.a {
    white-space: nowrap;
    }

    p.b {
    white-space: normal;
    }

    p.c {
    white-space: pre;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Detica</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- Bootsrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
  <body style="background-color: #F4F1E9">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2C5B90;">

        <div class="container">
          <a class="navbar-brand" href="/">Detica</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/feature">Fitur</a>
              <a class="nav-link" href="/premium">Premium</a>
              <a class="nav-link disabled">Dashboard</a>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="display-2">Kami Menawarkan Resensi Buku Gratis, Audiobooks, dan Masih Banyak Lagi!</h1>
        <p class="b"></p>
        <img src="https://lh3.googleusercontent.com/EJRrmR9O2x7EvL3poQ257-QS9-FrQFbC2zVqgq8ESCEhZn5RFepjihdxmlBwMQEHmNXStAPT1svc9dQXTNxV8ssKdDkDQmmmRy3BmQ_5rs7Cv8_ELa_ySAPrTYRHfFvn3oAkrQ9_0w=w2400?source=screenshot.guru%22%3E" alt="detica  " class="center">
        <p class="b"></p>
        <h5>Platform belajar berbasis seluler yang mengumpulkan wawasan dari buku - buku nonfiksi Indonesia yang dapat dibaca atau didengarkan dengan penjelasan kurang dari 30 menit.</h5>
        <p class="c"></p>
        <button type="button" onclick="toRegister()" class="btn btn-primary btn-lg btn-block">DAFTAR SEKARANG</button>
        <p class="c"></p>
        <p style="font-size:20px"><u><a href="https://drive.google.com/uc?export=download&id=1POQZNIZxhV9P5S8dfxDkh2waIWREFH_b">Coba Prototype Aplikasi Kami!</a></u></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        function toRegister(){
            location.href = "/register";
        }
    </script>
</body>
</html>
