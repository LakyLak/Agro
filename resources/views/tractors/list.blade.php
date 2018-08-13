@extends('layouts.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0 float-sm-left">List of Tractors</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><b>Name</b></th>
                        <th scope="col"><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td scope="col">{{ $item->name }}</td>
                        <td scope="col">
                            <a href="{{ url('/tractors/edit/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
                                title="Edit">
                                <i class="fas fa-pencil-alt"></i>  
                            </a>
                            <a href="{{ url('/tractors/delete/' . $item->id) }}" data-toggle="tooltip" data-placement="top" 
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