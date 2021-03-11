@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifikuj svoj nalog</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Nova veza za verifikaciju je poslata na vašu adresu e-pošte.') }}
                        </div>
                    @endif

                    {{ __('Pre nego što nastavite, potražite vezu za verifikaciju u svojoj e-pošti.') }}
                    {{ __('Ako niste dobili e-poštu') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Kliknite ovde</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
