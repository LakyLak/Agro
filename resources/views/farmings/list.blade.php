@extends('layouts.layout')
@section('content')
 
@include('includes.filter')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0 float-sm-left">List of Farmings</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b>Tractor</b></th>
                        <th scope="col"><b>Field</b></th>
                        <th scope="col"><b>Culture</b></th>
                        <th scope="col"><b>Farmed Area</b><small> / Field Area</small></th>
                        <th scope="col"><b>Date</b></th>
                        <th scope="col"><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td scope="col">{{ $item->tractor->name }}</td>
                        <td scope="col">{{ $item->field->name }}</td>
                        <td scope="col">{{ $item->field->culture }}</td>
                        <td scope="col">{{ $item->farming_area }} / {{ $item->field->area }}</td>
                        <td scope="col">{{ $item->date }}</td>
                        <td scope="col">
                            <a href="{{ url('/farmings/edit/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
                                title="Edit">
                                <i class="fas fa-pencil-alt"></i>  
                            </a>
                            <a href="{{ url('/farmings/delete/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
                                onclick="return confirm('Are you sure?')" 
                                title="Delete">
                                <i class="fas fa-trash"></i>  
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-body">
                <div class="col-sm-5" style="display:inline-block;">
                    All farmed area {{ $farmed_area }}
                </div>
            </div>
            {{-- All farmed area {{ $farmed_area }} --}}
        </div>
    </div>
</div>

@endsection