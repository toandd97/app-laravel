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
                            <h5 class="card-header">Thêm mới danh mục</h5>
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Tên menu</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="parent_id" class="form-label">Chọn menu cha</label>
                                        <select class="form-select" id="parent_id" name="parent_id">
                                            <option value="">Chọn menu cha</option>
                                            <!-- Thêm các option cho menu cha ở đây -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="parent_id" class="form-label">Chọn vị trí</label>
                                        <select class="form-select" id="parent_id" name="parent_id">
                                            <option value="">Chọn vị trí</option>
                                            <!-- Thêm các option cho menu cha ở đây -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chọn trạng thái</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_show" value="1" checked>
                                                <label class="form-check-label" for="status_show">Hiện</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_hide" value="0">
                                                <label class="form-check-label" for="status_hide">Ẩn</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

             

            
              
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
@endsection