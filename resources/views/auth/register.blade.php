@extends('layouts.app')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>créer un compte</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">inscription</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>créer un compte</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Nom</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" class="form-control"  placeholder="First Name" value="{{ old('name') }}" required="">
                                </div>

                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" class="form-control"  placeholder="Email" value="{{ old('email') }}" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">mot de passe</label>
                                    <input type="password"  class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" name="password"
                                        placeholder="Enter your password" required="">
                                </div>
                                <div class="form-group">
                                    <label for="register-password-confirm" class="form-label">Confirmer mot de passe</label>

                                    <div class="input-group input-group-merge form-password-toggle">
                                      <input type="password" class="form-control form-control-merge" id="register-password-confirm" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                                      <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-button">
                                    <button class="btn btn-solid" type="submit">{{ __('Inscription') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
