@extends('layouts.admin')

@section('title', 'Product List')
@section('content-header', 'Product List')

@section('content-actions')
<a href="{{route('products.create')}}" class="btn btn-primary">@lang('products.create_product')</a>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/products" method="get" style="display: flex">
            <input type="text" name="name" placeholder="Product Name">
            <select name="category" class="form-control" id="categoryId">
                <option value="" disabled selected>-- Category --</option>
                <option value="">ALL</option>
                @foreach($categories as $category)
                    <option
                        value="{{$category->id}}" {{ old('category_id') === $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit">Filter</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>@lang('products.name')</th>
                    <th>@lang('products.image')</th>
                    <th>@lang('products.description')</th>
                    <th>@lang('products.category')</th>
                    <th>@lang('products.price')</th>
                    <th>@lang('site.created_at')</th>
                    <th>@lang('site.action')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="{{ Storage::url($product->image) }}" alt="" width="100"></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary"><i
                                class="fa fa-edit"></i></a>
                        <button class="btn btn-danger btn-delete" data-url="{{route('products.destroy', $product)}}"><i
                                class="fa fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->render() }}
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.btn-delete', function () {
            $this = $(this);
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete this product?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No',
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    $.post($this.data('url'), {_method: 'DELETE', _token: '{{csrf_token()}}'}, function (res) {
                        $this.closest('tr').fadeOut(500, function () {
                            $(this).remove();
                        })
                    })
                }
            })
        })
    })
</script>
@endsection
