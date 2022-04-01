@extends('admin.main')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th>
            Id
        </th>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Password
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>
            {{$row->name}}
            </td>
            <td>
            {{$row->email}}
            </td>
            <td>
            {{$row->password}}
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection