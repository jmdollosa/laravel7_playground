@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 col-xs-12">

                            @if(session('alert'))
                            <div class="alert alert-{{ session('alert')['type'] }}">{{ session('alert')['message'] }}</div>
                            @endif

                            <form method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" />
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Save</button>
                                    <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
