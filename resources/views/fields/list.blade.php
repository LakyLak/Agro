@extends('layouts.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0 float-sm-left">List of Fields</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b>Name</b></th>
                        <th scope="col"><b>Culture</b></th>
                        <th scope="col"><b>Area</b><small> / Unfarmed Area</small></th>
                        <th scope="col"><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td scope="col">{{ $item->name }}</td>
                        <td scope="col">{{ $item->culture }}</td>
                        <td scope="col">{{ $item->area }} / {{ $item->area }}</td>
                        <td scope="col">
                            <a href="{{ url('/fields/edit/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
                                title="Edit">
                                <i class="fas fa-pencil-alt"></i>  
                            </a>
                            <a href="{{ url('/fields/delete/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
                                onclick="return confirm('Are you sure? All Farmings will be deleted as well.')" 
                                title="Delete">
                                <i class="fas fa-trash"></i>  
                            </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection