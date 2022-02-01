@extends('admin.layouts.master')
@section('title')
    :: Products ::
@endsection
@section('sub-title')
    Product Edit
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/choices.js/choices.min.css')}}"/>
@endsection
@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                @include('common.error_b')
                @include('common.messages_b')
                <form class="form" action="{{route('admin.products.update',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6 col-12" style="z-index: 1000">
                            <div class="form-group">
                                <label for="first-name-column">Categories</label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" name="categories[]"
                                            multiple="multiple" style="z-index: 1000">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                {{collect($categoryIds)->contains($category->id) ? "selected" : ""}}
                                            >{{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Name</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder=" Name"
                                       name="name" value="{{old('name',$product->name)}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Price</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder=" Price"
                                       name="price" value="{{old('price',$product->price)}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Stock</label>
                                <input type="number" id="first-name-column" class="form-control" placeholder="Stock"
                                       name="stock" value="{{old('stock',$product->stock)}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Remain</label>
                                <input type="number" id="first-name-column" class="form-control" placeholder="Remain"
                                       name="remain" value="{{old('remain',$product->remain)}}">
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Description</label>
                                <textarea name="description" id="default" class="form-control" cols="30"
                                          rows="5">{{old('description',$product->description)}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12 col-12 mt-2">
                            <div class="form-group">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="slider">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-primary form-check-glow"
                                                       value="1"
                                                       {{old('slider',$product->productDetail->slider) === 1 ? "checked" : '' }}  name="slider"
                                                       id="customColorCheck1">
                                                <label class="form-check-label" for="customColorCheck1">Slider</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="popular">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-secondary form-check-glow"
                                                       value="1"
                                                       {{old('popular',$product->productDetail->popular) === 1 ? "checked" : '' }} name="popular"
                                                       id="customColorCheck2">
                                                <label class="form-check-label" for="customColorCheck2">Popular</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="featured">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-success form-check-glow"
                                                       value="1"
                                                       {{old('featured',$product->productDetail->featured) === 1 ? "checked" : '' }} name="featured"
                                                       id="customColorCheck3">
                                                <label class="form-check-label" for="customColorCheck3">Featured</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="latest">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-danger form-check-glow"
                                                       value="1"
                                                       {{old('latest',$product->productDetail->latest) === 1 ? "checked" : '' }} name="latest"
                                                       id="customColorCheck4">
                                                <label class="form-check-label" for="customColorCheck4">Latest</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block me-2 mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="recently">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-info form-check-glow"
                                                       value="1"
                                                       {{old('recently',$product->productDetail->recently) === 1 ? "checked" : '' }} name="recently"
                                                       id="customColorCheck5">
                                                <label class="form-check-label" for="customColorCheck5">Recently</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block mb-1">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox">
                                                <input type="hidden" value="0" name="top_rated">
                                                <input type="checkbox"
                                                       class="form-check-input form-check-warning form-check-glow"
                                                       value="1"
                                                       {{old('top_rated',$product->productDetail->top_rated) === 1 ? "checked" : '' }} name="top_rated"
                                                       id="customColorCheck6">
                                                <label class="form-check-label" for="customColorCheck6">Top
                                                    Rated</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Image Upload</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            @if(isset($product->productDetail->image))
                                <img src="{{asset($product->productDetail->image)}}" style="height: 150px" alt="">
                            @endif
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('admin/assets/vendors/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/tinymce/plugins/code/plugin.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/choices.js/choices.min.js')}}"></script>
    <script>
        tinymce.init({selector: '#default'});
        tinymce.init({
            selector: '#dark',
            toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            plugins: 'code'
        });
    </script>
@endsection