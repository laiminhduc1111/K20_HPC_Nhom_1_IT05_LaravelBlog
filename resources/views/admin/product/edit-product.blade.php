@extends('admin.main')

@section('content')
@if(Session::has('product_update'))
<span>{{Session::get('product_update')}}</span>
@endif
<div class="col-xxl">
                    
                    <div class="card-body"> 
                      <form action="{{route('update.product')}}" method="POST">
                      <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="row mb-3">
                            
                         Tên Sản Phẩm <br>
                         <input type="text" name="name" value="{{$product->name}}">
                        </div>
                        <div class="row mb-3">
                         Xuất Xứ <br>
                         <input type="text" name="origin" value="{{$product->origin}}">
                        </div>
                        <div class="row mb-3">
                          <label  for="menu">Mô Tả</label>
                            <textarea name="description">{{$product->description}}</textarea>
                          </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
                          </div>
                        </div>
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
@endsection