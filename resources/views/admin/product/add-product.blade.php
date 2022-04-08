@extends('admin.main')

@section('content')
@if(Session::has('product_add'))
<span>{{Session::get('product_add')}}</span>
@endif
<div class="col-xxl">
                    <div class="card-body">
                      <form action="{{route('save.product')}}" method="POST">
                        <div class="row mb-3">
                          <label  for="menu">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="row mb-3">
                          <label  for="menu">Xuất Xứ</label>
                            <input type="text" name="origin" class="form-control">
                        </div>
                        <div class="row mb-3">
                          <label  for="menu">Mô Tả</label>
                            <textarea name="description"></textarea>
                          </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
                          </div>
                        </div>
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
@endsection