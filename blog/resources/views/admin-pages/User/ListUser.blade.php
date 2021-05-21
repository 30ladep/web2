@extends('admin-layout.admin-layout')
@section('content')
@php
    $stt = 1;
@endphp
<style>
    body{
        position: relative;
    }
    img:hover{
        width: 300px !important;
        position: absolute;
        transition: width 1s;
    }
</style>
<!-- DataTales Example -->
<div class="card shadow mb-5">
    
    <div class="card-header py-3">
    <span> <a href="{{url('admin/users/create')}}">Thêm mới user</a></span>  
        <h6 class="m-0 font-weight-bold text-primary">Danh sách user</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>       
                        <th>ID</th>    
                        <th>UserName</th>        
                        <th>Email</th>    
                        <th>Phone</th>    
                        <th>Type User</th>    
                        <th>Role</th>                   
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $item =>$value)
                    {{-- {{dd($value)}} --}}
                    <tr>
                    <td>{{$stt++}}</td>
                    <td>{{$value->id}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->TypeUser->type_user_name}}</td>
                    <td>{{$value->Role->role_name}}</td>
                    <td>
                  
                    <form action="{{ route('manufacuters.destroy', $value->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                    </form>
                    <form action="{{ route('manufacuters.edit', $value->id) }}" method="GET">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            @method('PATCH')
                            <button class="fas fa-edit" title="Edit">Edit</button>
                    </form>

                         
                        </td>
                    </tr>
                    @endforeach                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection