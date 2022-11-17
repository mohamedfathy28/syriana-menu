@extends('layouts.admin')

@section('title', 'Create Category')
@section('content-header', 'Create Category')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">@lang('categories.name')</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="@lang('categories.name')" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nameAr">@lang('categories.name_ar')</label>
                <input type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" id="nameAr"
                    placeholder="@lang('categories.name_ar')" value="{{ old('name_ar') }}">
                @error('name_ar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">@lang('site.create')</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
