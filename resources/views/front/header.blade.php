    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Bienvenue dans TOUT DONNER , DON DES OBJETS</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Numero: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                Votre compte
                                <ul class="onhover-show-div">
                                    @if (auth()->user())
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                      @csrf
                                     <li><button type="submit" >Deconnexion</button></li>
                                      </form>
                                    @else
                                    <li><a href="/login">Connexion</a></li>
                                    <li><a href="/register">Inscription</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">

                            <div class="brand-logo">
                                <a href="index.html"> <img src="{{asset('images/tr.png')}}"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <!-- Horizontal menu -->
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">

                                    <li>
                                            <a href="/">ACCUEIL</a>

                                        </li>
                                        <li>
                                            <a href="/Apropos">A Propos</a>

                                        </li>
                                        <li lass="mega" id="hover-cls">
                                            <a href="/objets">Objets</a>
                                            <div class="lable-nav">new</div>
                                        </li>
                                        <li>
                                            <a href="/faqs">Faq</a>

                                        </li>
                                        <li>
                                            <a href="/contact">CONTACT</a>

                                        </li>
                                        @if(auth()->user())
                                        <li><a href="{{ route('mon-profil') }}">MonProfil</a></li>
                                        <li><a href="/mes-don">MesDons</a></li>

                                         @endif

                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                         <li class="onhover-div mobile-search">
                                            <div><a href="https://www.facebook.com/Meuble-Prestigia-Zarzis-2033247976890522/"><img src="{{asset('images/icon/icon2.png')}}" onclick="openSearch()"  class="img-fluid blur-up lazyload" alt=""></a>
                                                <i class="ti-facebook"></i></div>

                                        </li>


                                        <li class="onhover-div mobile-setting">
                                            <div><a href="https://www.instagram.com/zarzismeuble/"><img src="{{asset('images/icon/icon1.png')}}"
                                                     alt=""></a>
                                                <i class="ti-instagram"></i></div>

                                        </li>

                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{asset('images/icon/icon4.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-youtube"></i></div>

                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
