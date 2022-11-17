@extends('layouts.admin')

@section('title', 'Create Product')
@section('content-header', 'Create Product')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">@lang('products.name')</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="@lang('products.name')" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nameAr">@lang('products.name_ar')</label>
                <input type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" id="nameAr"
                       placeholder="@lang('products.name_ar')" value="{{ old('name_ar') }}">
                @error('name_ar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="description">@lang('products.description')</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                    id="description" placeholder="@lang('products.description')">{{ old('description') }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="descriptionAr">@lang('products.description_ar')</label>
                <textarea name="description_ar" class="form-control @error('description_ar') is-invalid @enderror"
                    id="descriptionAr" placeholder="@lang('products.description_ar')">{{ old('description_ar') }}</textarea>
                @error('description_ar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">@lang('products.price')</label>
                <textarea name="price" class="form-control @error('price') is-invalid @enderror"
                    id="price" placeholder="@lang('products.price')">{{ old('price') }}</textarea>
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">@lang('products.image')</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Category</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror"
                        id="categoryId">
                    @forelse($categories as $category)
                        <option
                            value="{{$category->id}}" {{ old('category_id') === $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                        @empty
                            <option value="">No Categories</option>
                            @endforelse
                </select>
                @error('category_id')
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
