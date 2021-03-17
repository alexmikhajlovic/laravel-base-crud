@extends('layouts.app')

@section('title','Product')

@section('content')

	<div class="container">

		<div class="dresses">

            <div class="dress">

                <h2>{{$selected_dress->name}}</h2>
                
                <p>{{$selected_dress->overview}}</p>
                
                <p><i class="fas fa-fingerprint"></i> {{$selected_dress->item_id}}</p>

                <p><i class="fas fa-palette"></i> {{$selected_dress->color}}</p>

                <p><i class="fas fa-tag"></i> {{$selected_dress->size}} &middot; <i class="fas fa-dollar-sign"></i> {{$selected_dress->price}}</p>

            </div>

        </div>

	</div>

@endsection