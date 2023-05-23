@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
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
                            @foreach ($all_data as $item)
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
    </div>
@endsection
