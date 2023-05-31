@extends('admin.layouts.dashboard')
@section('content')
          <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('dashboard.testmonial.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-head">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">header</label>
                                    <input type="text" name="header" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
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