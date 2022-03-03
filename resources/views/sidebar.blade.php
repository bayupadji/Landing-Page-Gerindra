<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <title>Gerindra</title>
</head>
<!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
<!-- {{ asset('img/logo.png') }} -->

<body>
    <nav class="navbar shadow-sm navbar-expand-lg mx-auto p-3 bg-light rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="" width="52" height="63"
                    class="logo d-inline-block align-text-top">
            </a>
            <span class="navbar-text">
                <button type="button" class="btn btn-danger px-3 mx-5">Login</button>
            </span>
        </div>
    </nav>
    @yield("konten")
    <!-- side bar -->
    <div class="fot">
        <div class="row">
            <div class="jalan col-sm-4">
                <a><img src="{{ asset('img/maps.png') }}" alt="">24 Shipley St.Arvada, CO 80003</a>
                <br>
                <a class="ml"><img src="{{ asset('img/tlp.png') }}" alt="">0999889898</a>
            </div>
            <div class="col-sm-4">
                <div class="sosmed rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <p>@Copyright 2022 <b>Gerindra Jateng</b></p>
                </div>
            </div>
            <div class="col-sm-4"><iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.070532923704!2d110.44651311477337!3d-7.000976394942679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c933d6636c3%3A0xca1c8f002f19bcce!2sKANTOR%20DPD%20GERINDRA%20JATENG!5e0!3m2!1sid!2sid!4v1645706646254!5m2!1sid!2sid"
                    width="400" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
