@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <a href="{{ route('blog.creat') }}" class="btn btn-outline-secondary" type="button">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
