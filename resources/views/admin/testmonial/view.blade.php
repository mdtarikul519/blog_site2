@extends('admin.layouts.dashboard')
@section('content')
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>title</th>
                                                        <th>name</th>
                                                        <th>header</th>
                                                        <th>description</th>
                                                        <th>image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($all_data as $item)
                                                    <tr>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->header }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>
                                                            <img src="/{{$item->image }}" height="100" width="100" alt="">
                                                        </td>
                                                    
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-info">Details</a>
                                                            <a href="{{ route('dashboard.testmonial.edit',$item->id) }}" class="btn btn-sm btn-warning mx-2">Edit</a>
                                                            <a href="{{ route('dashboard.testmonial.destory',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
                    </div>
                </div>
            </div>
          </div>
         
@endsection