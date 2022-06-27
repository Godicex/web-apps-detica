<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/aae4223e42.js" crossorigin="anonymous"></script>
    <title>Library</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="title">
                <h1>Detica</h1>
            </div>
            <div id="settings">
                <button onclick="toDashboard()"><i class="fa-solid fa-gear"></i></button>
            </div>
        </div>

        <div id="location">
            <h2>MyBooks</h2>
        </div>
        <hr/>
            <div class="listContainer">
                <div class="listItems">
                    @foreach($book as $key => $data)
                    <div class="Book" onclick="toPlayer()">
                        <div id="cover">
                            <img id="image" src="{{$data->bookimage}}" />
                        </div>
                        <div id="info">
                            <label>{{$data->bookname}}</label> <br/>
                            <label>{{$data->bookauthor}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        <div id="menu">
                <button class="btn" onclick="toLibrary()"><i class="fa-solid fa-book"></i></button>
                <button class="btn" onclick="toPlayer()"><i class="fa-solid fa-headphones"></i></button>
                <button class="btn" onclick="myFunctionC()"><i class="fa-solid fa-people-roof"></i></button>
        </div>
    </div>

    <script>
    function toLibrary() {
    location.href = "home";
    }
    function toPlayer() {
    location.href = "play";
    }
    //Temp
    function myFunctionC() {
    location.href = "community";
    }
    function toDashboard() {
    location.href = "dashboard";
    }

    </script>
</body>
</html>
