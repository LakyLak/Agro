@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <h4 class="page-title">Update Field</h4>
            <div class="col-md-12">
                <form class="form-horizontal" method="post" action="{{ url('/fields/edit/' . $field->id) }}" 
                    name="edit_field" id="edit_field" novalidate="novalidate">{{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label col-form-label">Field Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                        id="name" name="name" placeholder="Field Name Here" value="{{ $field->name }}">
                                    <small class="float-right text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="culture" class="col-sm-3 control-label col-form-label">Field Culture</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{ $errors->has('culture') ? 'is-invalid' : '' }}" 
                                        id="culture" name="culture" placeholder="Field Culture Here" value="{{ $field->culture }}">
                                    <small class="float-right text-danger">{{ $errors->first('culture') }}</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="area" class="col-sm-3 control-label col-form-label">Field Area</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" 
                                        id="area" name="area" placeholder="Field Area Here" value="{{ $field->area }}">
                                    <small class="float-right text-danger">{{ $errors->first('area') }}</small>
                                </div>
                            </div>
                            
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Update Field</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection