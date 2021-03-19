@extends('layouts.app')

@section('title','Dresses')

@section('content')

	<div class="container text-center">

		<h1>Dresses</h1>

        <h2><a href="{{ route('dresses.create') }}" rel="noopener noreferrer" title="Add new item" class="text-light"><i class="fas fa-plus-circle"></i></a></h2>
		
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-hashtag"></i></th>
                    <th scope="col">Name</th>
                    <th scope="col"><i class="fas fa-fingerprint"></i></th>
                    <th scope="col"><i class="fas fa-tools"></i></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dresses as $dress)
                <tr>
                    <th scope="row">{{$dress->id}}</th>
                    <td>{{$dress->name}}</td>
                    <td>{{$dress->item_id}}</td>
                    <td>
                        <!-- Details -->
                        <a href="{{route('dresses.show', [$dress->id])}}" target="_blank" rel="noopener noreferrer"><i class="fas fa-info-circle"></i></a>
                        <!-- Edit -->
                        <a href="{{route('dresses.edit', [$dress->id])}}" rel="noopener noreferrer" class="text-light p-1"><i class="far fa-edit"></i></a>
                        <!-- Delete -->
                        <form action="" class="d-inline-block">
                            <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-danger"><i class="far fa-trash-alt"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

	</div>

@endsection