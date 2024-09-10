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
                        <th>giá</th>
                        <th>Giá KM</th>
                        <th>Tên danh  mục</th>
                        <th>Anh</th>
                        <th>ngày tạo</th>
                        <th>tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $key => $item)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->price}}</td>
                          <td>{{$item->sale_price}}</td>
                          <td>{{$item->category->name}}</td>
                          <td>
                            <img src="{{asset('storage/images')}}/{{$item->image}}" alt="" width="150px">
                          </td>
                          <td>{{$item->created_at}}</td>

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