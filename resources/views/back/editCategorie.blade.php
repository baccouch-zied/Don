<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/icon1.png')}}" type="image/x-icon">
    <title>Administrateur</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flag-icon.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>
<body>

<div class="page-wrapper">

    <!-- Page Header Start-->
    @include('back.header')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('back.sidbar')
    </div>
    <div class="page-body">


    <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5> Add categorie</h5>
                            </div>
                            <div class="card-body">
                          
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" method="POST" action="{{ route('categorie.update',$categorie->id) }}"   enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')


                            <fieldset>

                                            <h4>Product Details</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Nom </label>
                                                <input class="form-control col-xl-8 col-md-7" id="nom" name="nom" type="text" value="{{$categorie->nom}}" required="">
                                            </div>
                                         
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Description</label>
                                                <input class="form-control col-xl-8 col-md-7" id="description" name="description" type="text" value="{{$categorie->description}}" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span>Image (Taille:780px*520px)</label>
                                                <input class="form-control col-xl-8 col-md-7" id="image" name="image" type="file">
                                                <img src="{{ URL::to('/') }}/images/{{ $categorie->image }}" class="img-thumbnail" width="100" />
                                                 <input type="hidden" name="hidden_image" value="{{ $categorie->image }}" />
                                            </div> 
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span>Image1 (Taille:672px*310px)</label>
                                                <input class="form-control col-xl-8 col-md-7" id="image1" name="image1" type="file">
                                                <img src="{{ URL::to('/') }}/images/{{ $categorie->image1 }}" class="img-thumbnail" width="100" />
                                                 <input type="hidden" name="hidden_image" value="{{ $categorie->image1 }}" />
                                            </div> 
                                                                                  
                                    </fieldset>  
                                    <div class="form-group">
			                                  <label class="col-md-4 control-label" for="submit"></label>
			                                 <div class="col-md-4">
                                             <button id="submit" name="submit" class="btn btn-primary">Save</button>
                                            </div>
                                             </div>   
                                    </div>   
                                        </form>
                        
                                   
                                </div>
                                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('back.footer')

</div>


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('js/sidebar-menu.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('js/admin-customizer.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('js/lazysizes.min.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('js/chat-menu.js')}}"></script>

<!--form validation js-->
<script src="{{asset('js/dashboard/form-validation-custom.js')}}"></script>

<!--script admin-->
<script src="{{asset('js/admin-script.js')}}"></script>

</body>
</html>