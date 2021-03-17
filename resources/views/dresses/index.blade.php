@extends('layouts.app')

@section('title','Dresses')

@section('content')

	<div class="container text-center">

		<h1>Dresses</h1>
		
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Item_id</th>
                    <th scope="col"><i class="fas fa-info-circle"></i></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dresses as $dress)
                <tr>
                    <th scope="row">{{$dress->id}}</th>
                    <td>{{$dress->name}}</td>
                    <td>{{$dress->item_id}}</td>
                    <td><a href="{{route('dresses.show', [$dress->id])}}" target="_blank" rel="noopener noreferrer">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

	</div>

@endsection