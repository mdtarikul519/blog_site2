@extends('admin.layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('dashboard.protfolio.update',$editdata->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-body ">

                            <div class="form-group col-md-6">
                                <label for="">colam1_top_small</label>
                                <input type="file" name="colam1_top" class="form-controll">
                                <img src="/{{ $editdata->colam1_top}}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam1_bottom_big</label>
                                <input type="file" name="colam1_bottom" class="form-controll">
                                <img src="/{{$editdata->colam1_bottom }}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam2_top_big</label>
                                <input type="file" name="colam2_top" class="form-controll">
                                <img src="/{{ $editdata->colam2_top }}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam2_bottom_small</label>
                                <input type="file" name="colam2_bottom" class="form-controll">
                                <img src="/{{ $editdata->colam2_bottom }}" height="100" width="100" alt="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">colam3_top_small</label>
                                <input type="file" name="colam3_top" class="form-controll">
                                <img src="/{{ $editdata->colam3_top }}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam3_bottom_big</label>
                                <input type="file" name="colam3_bottom" class="form-controll">
                                <img src="/{{ $editdata->colam3_bottom }}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam4_top_big</label>
                                <input type="file" name="colam4_top" class="form-controll">
                                <img src="/{{ $editdata->colam4_top }}" height="100" width="100" alt="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">colam4_bottom_small</label>
                                <input type="file" name="colam4_bottom" class="form-controll">
                                <img src="/{{ $editdata->colam4_bottom }}" height="100" width="100" alt="">
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
