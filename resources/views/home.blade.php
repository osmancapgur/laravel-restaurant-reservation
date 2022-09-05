@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMİN PANELİ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Giriş Yapıldı!') }}
                    <br><br>
                    <a href="/admin/dashboard" class="btn btn-success active" role="button" aria-pressed="true">Panele Gitmek İçin Tıklayın</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
