<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | Collaborative Learning</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div>
        <nav class="nav-navbar">
            <div class="div-navbar">
                <div class="nav-imgtext">
                    <div class="nav-imgtexts">
                        <h2 class="textlogo">
                            <img src="img/logoMaxyAcademy.png" class="logo-maxy" alt="Logo Maxy Academy">
                        </h2>
                    </div>
                </div>
                <div class="nav-icons">
                    <a class="a-icons" href="#" id="a-dropdownmenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <i class="bi bi-person-fill icon-bold pd-right"></i>
                        <h2 class="text-icon-person">Akbar Firmansyah</h2>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Akbar Firmansyah</a></li>
                        <li><a href="#" class="dropdown-item">Profil</a></li>
                        <li><a href="#" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="main-content-cards"
        style="--bs-breadcrumb-divider: url(https://www.maxy.academy/img/lms/chevron-right.svg);">
        @yield('welcome-content')
    </div>


    <div class="popup" id="popup">
        <div class="overlay">
            <div class="content-popup">
                <div style="padding: .5rem">
                    <div class="btn-x">
                        <a class="a-icon-x" onclick="closePopup()">
                            <i class="bi bi-x"></i>
                        </a>
                    </div>
                    <div class="text--input">
                        <div class="h2-p-texts">
                            <h2>Kode Group</h2>
                            <p>untuk masuk ke group, masukkan kodenya!!!</p>
                        </div>
                        <input class="popup--input" name="Kode Group" id="kode_grup" cols="30" rows="10"
                            placeholder="Masukan Kode Group..."></input>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/kodegroup.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/bootstrap-icons.svg"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
