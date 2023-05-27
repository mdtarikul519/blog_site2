@extends('admin.layouts.dashboard')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
       <form action="{{ route('dashboard.services.store') }}" method="post" enctype="multipart/form-data">
         @csrf
             <div class="card">
                <div class="card-header">
                    <div class="card-body">
                         <div class="form-group">
                           <label for="">title</label>
                            <input type="text" name="title"  class="form-control">
                         </div>
                         <div class="form-group">
                            <label for="">header</label>
                             <input type="text" name="header"  class="form-control">
                          </div>
                         <div class="form-group">
                           <label for="">Description</label>
                            <textarea name="description" rows="5" class="form-control"></textarea>
                         </div>
                         <div class="form-group">
                           <label for="">icon</label>
                           <input type="file" name="icon" class="form-control"> 
                         </div>
                         <div>
                           <button>submit</button>
                         </div>
                    </div>
                </div>
             </div>
       </form>
    </div>
</div>

@endsection