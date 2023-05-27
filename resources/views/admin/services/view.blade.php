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
                                            <th>header</th>
                                            <th>Description</th>
                                            <th>icon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        
                                          @foreach ($all_data as $item)
                                             {{-- @dd($item->image) --}}
                                              <tr>

                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->header }}</td>
                                                <td>{{ $item->description}}</td>
                                                
                                                <td>
                                                    <img src="/{{$item->icon }}" height="100px" width="100px" alt="">

                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info">Details</a>
                                                    <a href="{{ route('dashboard.services.edit',$item->id) }}" class="btn btn-sm btn-warning mx-2">edit</a>
                                                    <a href="{{ route('dashboard.services.destory',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
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

        <!-- end table -->
    </div>
</div>
























{{-- 
    {{-- <div class="row justify-content-center">
        <div class="col-md-6">
             <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <table class="table table-striped">
                            <div class="thead">
                                <tr>
                                    <th>p_header</th>
                                     <th>header</th>
                                     <th>description</th>
                                     <th>image</th>
                                </tr>
                            </div>
                            <div class="tbody">
                                 {{-- @dd($all_data) --}}
                            {{-- @foreach ($all_data as $item)
                              <tr>
                                <td>{{ $item->p_header }}</td>
                                <td>{{ $item->header }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->image }}</td>
                              </tr>
                                
                            @endforeach
                            </div>

                        </table>
                    </div>
                </div>
             </div>
        </div>
    </div> --}} 
@endsection
