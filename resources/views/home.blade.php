@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Votre inscription a réussi. Laissez-nous vérifier si vous êtes un enseignant ou un élève. Cela peut prendre un peu de temps') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
