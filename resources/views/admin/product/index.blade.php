@extends('admin.master')
@section('title', 'Dashboard')
@section('main-content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Quản lý danh mục</h4>
              @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
              @endif
             <div class="mb-3">
                <a href="{{ route('category.create') }}" class="btn btn-primary">
                  <i class="bx bx-plus me-1"></i> Thêm mới danh mục
                </a>
              </div>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Danh sách danh mục</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Menu cha</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th>Tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $key => $category)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td><strong>{{ $category->name }}</strong></td>
                          <td>{{ $category->parent_id ? $category->parent_id : 'Không có' }}</td>
                          <td>{{ $category->created_at->format('d/m/Y') }}</td>
                          <td>
                            @if($category->status == 1)
                              <span class="badge bg-success">Hoạt động</span>
                            @else
                              <span class="badge bg-danger">Không hoạt động</span>
                            @endif
                          </td>
                          <td>
                            <div class="btn-group">
                              <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bx bx-edit-alt me-1"></i> Sửa
                              </a>
                              <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                  <i class="bx bx-trash me-1"></i> Xóa
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                        @empty
                            <span>Chưa có tiêu dề</span>
                        @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

            </div>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
@endsection