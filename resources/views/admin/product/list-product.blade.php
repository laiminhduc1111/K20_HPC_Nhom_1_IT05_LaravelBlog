@extends('admin.main')

@section('content')
<style>
    table{
        border-collapse: collapse;
        width: 100%;
    }
    td,th{
        border: 1px solid;
        padding: 5px;
    }
</style>
@if(Session::has('product_delete'))
<span>{{Session::get('product_delete')}}</span>
@endif
<table >
    <tr>
        <th>
            ID
        </th>
        <th>
            Tên Sản Phẩm
        </th>
        <th>
            Xuất Xứ
        </th>
        <th>
            Mô Tả
        </th>
        <th>
            Action
        </th>
    </tr>
    
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->origin}}</td>
            <td>{{$product->description}}</td>
            <td>
                <a href="edit-product/{{$product->id}}">Edit</a>
                <a href="delete-product/{{$product->id}}">Delete</a>
            </td>
        </tr>
         @endforeach
    
</table>
@endsection