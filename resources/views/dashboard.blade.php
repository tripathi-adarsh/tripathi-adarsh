@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3>{{ __('Dashboard Page') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are in dashboard page!') }}
                    <br>
                    {{ __('Add Something(button)') }}
                    <a href="/data">
                    <input type="button" class="card text-white bg-success" value="DATA"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
