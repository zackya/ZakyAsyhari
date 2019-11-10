<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <title>Muhammad Zaky Asyhari</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><h4>Hello-World-G3t</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#porto">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skil">Kemampuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!---foto---->
    <div id="" class="jumbotron jumbotron-fluid mt-5" >
        <div class="container text-center">
            <img src="img/foto.jpg" alt="" class="rounded-box mt-5  animated zoomIn" width="200">
                <h1 class="display-4 animated bounceInDown delay-1s">Muhammad Zaky Asyhari</h1>
                <p class="lead  animated bounceInUp delay-2s">Web Developer | Android Developer</p>
        </div>
    </div>
<!---sk---->
    <div id="skil" class="container">
        <div class="row">
            <div class="col text-center mb-4">
            <h1>Skill</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label class ="pt-2"><h4>Php</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                </div>
                <label class ="pt-2"><h4>CSS</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                </div>
                <label class ="pt-2"><h4>Bootstrap</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <label class ="pt-2"><h4>JavaScript</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
                </div>
            </div>
            <div class="col">
            <label class ="pt-2"><h4>Codeigniter</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                </div>
                <label class ="pt-2"><h4>Laravel</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <label class ="pt-2"><h4>Java</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <label class ="pt-2"><h4>Android Native</h4></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                </div>
            </div>
        </div>
    </div>
<!---porto---->
<section class="bg-light">
    <div id="porto" class="container">
        <div class="row pt-3 mb-3">
            <div class="col text-center">
                <h1>Portofolio</h1>
            </div>
        </div>
        <div class="row pt-2 pb-3">
            <div class="col pt-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/home.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Wen Pariwisata karawang</h5>
                            <p class="card-text">Membuat website daftar lokasi pariwisata di kota karawang dengan Php Native</p>
                            <a href="https://skripsimalla.000webhostapp.com/" target="_blank" class="btn btn-primary">Lihat</a>
                        </div>
                </div>
            </div>
            <div class="col pt-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top fix img-fluid" src="img/andro1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Pemetaan diler</h5>
                            <p class="card-text">Aplikasi android dengan Rest full api dari CI dan menggunakan metode heuristic</p>
                            <a href="https://github.com/ZakyAsyhari/GIS" target="_blank" class="btn btn-primary">Lihat</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footerrr  -->
<footer class="bg-dark lg-dark text-white">
    <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col text-center"><i class ="fab fa-instagram"></i> sudahtumbang_</div>
            <div class="col text-center"><i class ="fab fa fa-paper-plane"></i> zakyazhari5@gmail.com</div>

        </div>
        <hr class="bg-white">
        <div class="row">
            <div class="col text-center">Copyright@2019</div>
        </div>
    </div>

</footer>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    
    </script>
    
</body>
</html>