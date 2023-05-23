@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('dashboard.banner.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-body ">
                            <div class="form-group col-md-6">
                                <label for="">p_header</label>
                                <input type="text" name="p_header" class="form-controller">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">header</label>
                                <input type="text" name="header" class="form-contro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Description</label>
                                <textarea name="description" rows="5"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-controll">
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
