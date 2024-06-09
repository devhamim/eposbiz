@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Add landing page</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>landing page</p>
        </div>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-primary"> View All
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add landing page</h2>
                </div>

                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Product name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control slug-title @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" required>
                                            @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="sku" class="col-12 col-form-label">SKU</label>
                                            <div class="col-12">
                                                <input id="sku" name="sku" class="form-control here  @error('sku') is-invalid @enderror" type="text" value="{{ old('sku') }}" required>
                                                @error('sku')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="brand" class="col-12 col-form-label">Brand</label>
                                            <div class="col-12">
                                                {{-- class add if need type slug-title class field auto felap set-slug field  --}}
                                                <input id="brand" name="brand" class="form-control" type="text" value="{{ old('brand') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea id="summernote" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required rows="4"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
                                            <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" name="tag" value="{{ old('tag') }}" required data-role="tagsinput" />
                                            @error('tag')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

