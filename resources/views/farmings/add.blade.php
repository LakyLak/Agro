@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h4 class="page-title">Create Farming</h4>
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="{{ url('/farmings/add') }}" 
                    name="add_farming" id="add_farming" novalidate="novalidate">{{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="tractor" class="col-sm-3 control-label col-form-label">Tractor Name</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select {{ $errors->has('tractor') ? 'is-invalid' : '' }}" 
                                        id="tractor" name="tractor" style="width: 100%; height:36px;">
                                        <option value="" disabled selected>Select Tractor</option>
                                        @foreach ($tractors as $tractor)
                                            <option value="{{ $tractor->id }}">{{ $tractor->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="float-right text-danger">{{ $errors->first('tractor') }}</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="field" class="col-sm-3 control-label col-form-label">Field Name</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select {{ $errors->has('field') ? 'is-invalid' : '' }}" 
                                            id="field" name="field" style="width: 100%; height:36px;">
                                        <option value="" disabled selected>Select Field</option>
                                        @foreach ($fields as $field)
                                            <option value="{{ $field->id }}">{{ $field->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="float-right text-danger">{{ $errors->first('field') }}</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="farming_area" class="col-sm-3 control-label col-form-label">Date</label>
                                <div class="col-sm-9 input-group">
                                        <input type="text" class="form-control mydatepicker {{ $errors->has('date') ? 'is-invalid' : '' }}" 
                                            id="date" name="date" placeholder="yyyy-mmm-dd">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                <small class="col-sm-3"></small>    
                                <small class="col-sm-9 text-right text-danger">{{ $errors->first('date') }}</small>
                            </div>

                            <div class="form-group row">
                                <label for="farming_area" class="col-sm-3 control-label col-form-label">Farming Area</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{ $errors->has('farming_area') ? 'is-invalid' : '' }}" 
                                        id="farming_area" name="farming_area" placeholder="Farming Area Here">
                                    <small class="float-right text-danger">{{ $errors->first('farming_area') }}</small>
                                </div>
                            </div>
                            
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Create Farming</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection