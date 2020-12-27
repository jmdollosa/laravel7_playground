@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('contact.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add Contact</a>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        @if(session('alert'))
                            <div class="alert alert-{{ session('alert')['type'] }}">{{ session('alert')['message'] }}</div>
                        @endif

                        @includeIf('contact.partials.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
