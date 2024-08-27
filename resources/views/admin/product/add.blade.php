@extends('admin.master')
@section('title', 'Dashboard')
@section('main-content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Quản lý danh mục</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Thêm mới sản phẩm</h5>
                        <div class="card-body">
                            <form method="POST" action="{{ route('category.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">đường dẫn</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">Giá sản phẩm</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">Giá sản phẩm khuyến mãi</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3 @error ('name') has-error @enderror">
                                    <label for="name" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="name" name="name">
                                    @error('name')
                                    <div class="help-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 @error ('name') has-error @enderror">
                                    <label for="name" class="form-label">Ảnh mô tả</label>
                                    <input type="file" class="form-control" id="name" name="name">
                                    @error('name')
                                    <div class="help-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div id="editor">
                                        <p>Hello from CKEditor 5!</p>
                                    </div>   
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
@section('custom-js')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
            }
        </script>

        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Bold,
                Italic,
                Font,
                Paragraph
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                    toolbar: {
                        items: [
                            'undo', 'redo', '|', 'bold', 'italic', '|',
                            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                        ]
                    }
                } )
                .then( /* ... */ )
                .catch( /* ... */ );
        </script>
@endsection