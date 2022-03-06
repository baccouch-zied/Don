<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{asset('images/dashboard/favicon.png" type="image/x-icon')}}">
        <link rel="shortcut icon" href="{{asset('images/dashboard/favicon.png" type="image/x-icon')}}">
        <title>Administrateur</title>

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/fontawesome.css')}}">

        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/flag-icon.css')}}">

        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">

        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    </head>
<body>

<!-- page-wrapper Start-->
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
                        <div class="card">
                            <div class="card-header">
                                <h5>Messages</h5>
                            </div>
                            <div class="card-body">

                                <table class="table table-striped">
                                 <thead>
                                    <tr>
                                     <th>id</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($contacts as $contact)

                                     <td>{{$contact->id}}</td>
                                    <td>{{$contact->nom}}</td>
                                    <td>{{$contact->prenom}}</td>
                                    <td>{{$contact->telephone}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>
                                        <a href="#" class="btn waves-effect waves-light btn-warning"><i class="fa fa-pencil"></i></a>
                                        <form action="{{route("contacts.destroy",$contact->id)}}" method="POST" onsubmit="return confirm('Vous etes sure de Supprimer Cette compte ?');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn waves-effect waves-light btn-danger" type="submit"> <i class="fa fa-trash"></i></button>

                                        </form>

                                    </td>


                                 </tr>
                                 @endforeach

                                 </tbody>
                            </table>

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

<!-- Jsgrid js-->
<script src="{{asset('js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('js/jsgrid/griddata-manage-product.js')}}"></script>
<script src="{{asset('js/jsgrid/jsgrid-manage-product.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('js/chat-menu.js')}}"></script>

<!--script admin-->
<script src="{{asset('js/admin-script.js')}}"></script>

