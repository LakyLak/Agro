@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h4 class="page-title">Create Tractor</h4>
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="{{ url('/tractors/add') }}" 
                    name="add_tractor" id="add_tractor" novalidate="novalidate">{{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label col-form-label">Tractor Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                        id="name" name="name" placeholder="Tractor Name Here">
                                    <small class="float-right text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Create Tractor</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection