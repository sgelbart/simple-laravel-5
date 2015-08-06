@extends('layouts.master')

@section('content')

    <h1>Item</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $item->id }}</td><td>{{ $item->name }}</td>
            </tr>
        </table>
    </div>

@endsection
