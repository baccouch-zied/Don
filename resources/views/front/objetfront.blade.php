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
                        <h2>Tous les objets</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Objets</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="top-banner-wrapper">
                                <a href="#"><img src="../assets/images/mega-menu/2.jpg"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                                <div class="top-banner-content small-section">
                                    <h4>Tous les dons ! </h4>
                                    <p>Telles sont les devises de don.com, référence de la récupe sur le net, qui a déjà permis de sauver et de remettre dans le circuit plus de 3 000 000 objets !
                                        Vous aussi, ayez le bon réflexe en donnant vos objets qui encombrent et rejoignez nos plus d'un million d'utilisateurs.
                                        Recherchez et récupérez gratuitement ces dons et soyez avertis des nouveaux dons publiés près de chez vous. </p>
                                </div>
                            </div>
                            <div class="collection-product-wrapper">

                                <div class="product-wrapper-grid">
                                    <div class="row margin-res">
                                        @foreach($produits as $produit)
                                        <div class="col-lg-4 col-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{ URL::to('/') }}/images/{{ $produit->image ?? ''}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="back">
                                                        <a href="#"><img src="{{ URL::to('/') }}/images/{{ $produit->image2 ?? ''}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-bs-toggle="modal" data-bs-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                        <a href="product-page(no-sidebar).html">
                                                            <h6>{{$produit->nom}}</h6>
                                                        </a>
                                                        <p>{{$produit->description}}</p>
                                                        <h4>Télephone: {{$produit->telephone}}</h4><br/>
                                                        <button class="btn btn-solid">Interesse</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-pagination">
                                    <div class="theme-paggination-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#"
                                                                aria-label="Previous"><span aria-hidden="true"><i
                                                                        class="fa fa-chevron-left"
                                                                        aria-hidden="true"></i></span> <span
                                                                    class="sr-only">Previous</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"
                                                                aria-label="Next"><span aria-hidden="true"><i
                                                                        class="fa fa-chevron-right"
                                                                        aria-hidden="true"></i></span> <span
                                                                    class="sr-only">Next</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <div class="product-search-count-bottom">
                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
