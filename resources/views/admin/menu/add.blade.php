@extends('admin.main')

@section('content')
<div class="col-xxl">
                  

                    <div class="card-body">
                      <form action="store" method="POST">
                        <div class="row mb-3">
                          <label  for="menu">Tên Danh Mục</label>
                          
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                          
                        </div>

                        <div class="row mb-3">
                          <label  for="menu">Email</label>
                          
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                          
                        </div>
                        <div class="row mb-3">
                          <label  for="menu">Password</label>
                          
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                          
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