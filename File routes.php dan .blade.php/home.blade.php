@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data') }}</div>

                <div class="card-body">
                    <a href="{{ route('createview') }}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Data') }}</div>

                <div class="card-body">
                    <a href="{{ route('view') }}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
