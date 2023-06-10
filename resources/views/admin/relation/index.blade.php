@extends('admin.layouts.dashboard')
@section('content')
            

              <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                        <h2 class="text-center my-3">Eluquent Relationship</h2>
                           <table class="table table-border">

                              <thead>
                                  <tr>
                                     <td>name</td>
                                     <td>phone</td>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach ($phones as $item)
                              <tr>
                                 <td>{{ $item->name }}</td>

                                 <td>
                                    @if($item->user)
                                    {{ $item->user->user_id }}
                                    @endif
                                 </td>
                              </tr>
                                 
                              @endforeach
                              </tbody>
                           </table>
                     </div>
                   </div>
              </div>
@endsection