@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-flex is-justify-content-center">
        <div class="column is-8">
          

                <div class="card p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="columns is-flex is-justify-content-center">

                            <div class="column is-9">
                                <input class="input is-success" type="text" placeholder="Ingrese su email aquí" required>

                                @error('email')
                                    <span class="tag is-danger" role="alert">
                                        <strong>{{'Tenemos un problema con tu email'}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="columns is-flex is-justify-content-center">

                            <div class="column is-9">
                                <input id="password" type="password"  class="input is-success" name="password" placeholder="Ingrese su contraseña" required>

                                @error('password')
                                    <span class="tag is-danger" role="alert">
                                        <strong>{{ 'La contraseña no es correcta' }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="columns is-flex is-justify-content-center">
                            <div class="column is-6 is-flex is-justify-content-space-around">
                                <button type="submit" class="button is-primary is-large">
                                    {{ __('Iniciar Sessión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="is-link is-flex is-align-self-center" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
          
    </div>
</div>
@endsection
