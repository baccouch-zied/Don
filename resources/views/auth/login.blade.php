@extends('layouts.app')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Connexion</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Connexion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Connexion</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="review">Mot de passe</label>
                                <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            </div><div class="form-button">
                                <button class="btn btn-solid" type="submit">{{ __('Connexion') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Nouvel utilisateur</h3>
                    <div class="theme-card authentication-right">
                        <h6 href=""class="title-font">Créer un compte</h6>
                        <p>Créez un compte gratuit dans notre magasin. L'inscription est simple et rapide. Il vous permet de pouvoir commander depuis notre boutique. Pour commencer à magasiner, cliquez sur s'inscrire</p><a href="/register"
                            class="btn btn-solid">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
