@extends('admin.layouts.dashboard')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
       <form action="{{ route('dashboard.about.store') }}" method="post" enctype="multipart/form-data">
         @csrf
             <div class="card">
                <div class="card-header">
                    <div class="card-body">
                         <div class="form-group">
                           <label for="">title</label>
                            <input type="text" name="title"  class="form-control">
                         </div>
                         <div class="form-group">
                           <label for="">Description</label>
                            <textarea   name="description"  id="" cols="30" rows="10"></textarea>
                         </div>
                         <div class="form-group">
                           <label for="">image</label>
                           <input type="file" name="image" class="form-control"> 
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