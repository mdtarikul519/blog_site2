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
                                            <th>colam1_top</th>
                                            <th>colam1_bottom</th>
                                            <th>colam2_top</th>
                                            <th>colam2_bottom</th>
                                            <th>colam3_top</th>
                                            <th>colam3_bottom</th>
                                            <th>colam4_top</th>
                                            <th>colam4_bottom</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        
                                          @foreach ($all_data as $item)
                                             {{-- @dd($item->image) --}}
                                              <tr>
                                                 <td>
                                                   <img src="/{{$item->colam1_top }}" height="100px" width="100px" alt="">
                                                 </td>
                                                 <td>
                                                    <img src="/{{$item->colam1_bottom }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam2_top }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam2_bottom }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam3_top }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam3_bottom }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam4_top }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  <td>
                                                    <img src="/{{$item->colam4_bottom }}" height="100px" width="100px" alt="">
                                                  </td>
                                                  
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info">Details</a>
                                                    <a href="{{ route('dashboard.protfolio.edit',$item->id) }}" class="btn btn-sm btn-warning mx-2">edit</a>
                                                    <a href="{{ route('dashboard.protfolio.destory',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
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

@endsection
