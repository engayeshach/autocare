@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employees') }}</div>

                <div class="card-body">
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $key => $item)
                            <td>{{$key++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->address}}</td>
                            <td>                  
                                <img src="{{asset('uploads/employees/'.$item->image)}}" alt="image" width="50">      
                        </td>
                           <td>
                           <form method="post" action="">
                            @method('delete')
                            @csrf
                            <a href="{{route('employee/edit', $item->id)}}" class="text-white btn btn-success ml-2 pt-2"> Update
                            </a>
                            <a href="{{route('employee/delete', $item->id)}}" class="text-white btn btn-danger ml-2 pt-2" data-confirm-delete="true"> Delete
                            </a>
                        </form>
                          
                           </td>
                          </tr>  
                          @endforeach        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
