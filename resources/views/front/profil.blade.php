<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('images/favicon/1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/1.png')}}" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">



</head>

<body class="theme-color-1">


    <!-- loader start -->

    @include('front.header')

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>profile</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- personal deatail section start -->
    <section class="contact-page register-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Mes informations</h3>
                    <fieldset>
                    <form class="theme-form"  method="POST" action="{{ url('/profil/update',$User[0]->id) }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your name"
                                    required="" value="{{$User[0]->name}}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Email" required="" value="{{$User[0]->prenom}}">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Enter your number"
                                    required="" value="{{$User[0]->adresse}}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{$User[0]->email}}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Telephone</label>
                                <input type="email" class="form-control" name="telephone" id="telephone" placeholder="Email" required="" value="{{$User[0]->telephone}}">
                            </div>
                            <div class="col-md-12">
                                <label for="review">Ajouter votre image</label>
                                <input class="form-control col-xl-8 col-md-7" name="image" id="image" value="{{$User[0]->image}}" type="file">
                            </div>
                            <div class="col-sm-9 offset-sm-3">
                                <button id="submit" name="submit" class="btn btn-primary">Modifier</button>
                                </div>
                        </div>
                    </form>
                </fieldset>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-page register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Mes informations</h3>
                    <form class="theme-form">

                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="company name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="name">Address *</label>
                                <input type="text" class="form-control" id="address-two" placeholder="Address"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Zip Code *</label>
                                <input type="text" class="form-control" id="zip-code" placeholder="zip-code"
                                    required="">
                            </div>
                            <div class="col-md-6 select_input">
                                <label for="review">Country *</label>
                                <select class="form-control" size="1">
                                    <option value="India">India</option>
                                    <option value="UAE">UAE</option>
                                    <option value="U.K">U.K</option>
                                    <option value="US">US</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="review">City *</label>
                                <input type="text" class="form-control" id="city" placeholder="City" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Region/State *</label>
                                <input type="text" class="form-control" id="region-state" placeholder="Region/state"
                                    required="">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section ends -->
    @include('front.footer')

    <!-- footer end -->


    <!-- facebook chat section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <!-- exitintent jquery-->
    <script src="{{asset('js/jquery.exitintent.js')}}"></script>
    <script src="{{asset('js/exit.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('js/slick.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('js/lazysizes.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('js/bootstrap-notify.min.js')}}"></script>

    <!-- Fly cart js-->
    <script src="{{asset('js/fly-cart.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('js/theme-setting.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>
