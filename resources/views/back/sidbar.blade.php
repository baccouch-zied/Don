<div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('images/icon/test.png')}}" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('images/dashboard/man.png')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Administrateur</h6>
                    <p>Don des objets</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="/dash"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="/categorie"><i data-feather="box"></i> <span>Gestion Categories</span></a>
                        <li><a class="sidebar-header" href="/utilisateur"><i data-feather="box"></i> <span>Gestion Utilisateurs</span></a>

                    </li>
                    <li><a class="sidebar-header" href="/objet"><i data-feather="box"></i><span>Gestion Objets</span></a>
                    </li>
                    <li><a class="sidebar-header" href="/faq"><i data-feather="box"></i><span>Gestion Faqs</span></a>
                    <li><a class="sidebar-header" href="/contacts"><i data-feather="box"></i><span>Gestion Réclamations</span></a>
                        </li>
                        <br/>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                      Logout
                                    </button>

                                    </form>




            </div>
