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
                            <form method="POST" action="{{ route('product.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="productName" name="name" onkeyup="ChangeToSlug();">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">đường dẫn</label>
                                            <input type="text" class="form-control" id="slug" name="slug">
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
                                            <input type="text" class="form-control" id="name" name="price">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 @error ('name') has-error @enderror">
                                            <label for="name" class="form-label">Giá sản phẩm khuyến mãi</label>
                                            <input type="text" class="form-control" id="name" name="sale_price">
                                                @error('name')
                                                    <div class="help-block">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="parent_id" class="form-label">Chọn danh mục</label>
                                    <select class="form-select" id="parent_id" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 @error ('name') has-error @enderror">
                                    <label for="name" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="name" name="photo">
                                    @error('name')
                                    <div class="help-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 @error ('name') has-error @enderror">
                                    <label for="name" class="form-label">Ảnh mô tả</label>
                                    <input type="file" class="form-control" id="name" name="photos[]" multiple>
                                    @error('name')
                                    <div class="help-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Mô tả sản phẩm</label>
                                    <textarea id="description" name="description">
                                        <p>Hello from CKEditor 5!</p>
                                    </textarea>
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
            .create( document.querySelector( '#description' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
    <script lang="javascript">
        function ChangeToSlug()
        {
            var title, slug;
            //Lấy text từ thẻ input title 
            title = document.getElementById("productName").value;
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/\s+/g, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-+/g, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = slug.replace(/^-+|-+$/g, '');
            //In slug ra textbox có id "slug"
            document.getElementById('slug').value = slug;
        }    
    </script>
@endsection