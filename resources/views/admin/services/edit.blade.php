@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('dashboard.services.update',$editdata->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-body ">
                            <div class="form-group col-md-6">
                                <label for="">p_header</label>
                                <input type="text" name="title" value="{{ $editdata->title }}" class="form-controller">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">header</label>
                                <input type="text" name="header" value="{{ $editdata->header }}" class="form-contro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Description</label>
                                <textarea name="description" value="" rows="5">{{ $editdata->description }}</textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Image</label>
                                <input type="file" name="icon" class="form-control">
                                <img src="/{{ $editdata->icon }}" height="100" width="100" alt="">
                                {{-- <input type="file" name="image" value="{{ $editdata->description }}" class="form-controll"> --}}
                            </div>
                            <div>
                                <button>update</button>  
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
