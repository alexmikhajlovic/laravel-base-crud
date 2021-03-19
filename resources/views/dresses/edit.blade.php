@extends('layouts.app')

@section('title','New Dress')

@section('content')

	<div class="container text-center">

		<h2>Add item to database</h2>

        <!-- Display of any errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="text-left" method="post" action="{{ route('dresses.update',$selected_dress->id) }}">
        
        <!-- +++ VERY IMPORTANT +++ -->
        @method('PUT')
        @csrf
            
            <!-- Input name -->
            <div class="mb-3">
                <label for="inputEmail" class="form-label">NAME</label>
                <input type="text" class="form-control bg-dark text-light" name="name" id="inputEmail" aria-describedby="emailHelp" value="{{$selected_dress->name}}">
            </div>

            <!-- Input item ID -->
            <div class="mb-3">
                <label for="inputItemId" class="form-label">ITEM ID</label>
                <input type="text" class="form-control bg-dark text-light" name="item_id" id="inputItemId" value="{{$selected_dress->item_id}}">
            </div>

            <!-- Input color -->
            <div class="mb-3">
                <label for="inputColor" class="form-label">COLOR</label>
                <input type="text" class="form-control bg-dark text-light" name="color" id="inputColor" value="{{$selected_dress->color}}">
            </div>

            <!-- Input size -->
            <div class="mb-3">
                <label for="inputSize" class="form-label">SIZE</label>
                <select name="size" id="inputSize" class="form-control bg-dark text-light">
                    <option value="" selected>--</option>
                    <option value="S" {{ $selected_dress->size == 'S' ? 'selected=selected' : '' }}>S</option>
                    <option value="M" {{ $selected_dress->size == 'M' ? 'selected=selected' : '' }}>M</option>
                    <option value="L" {{ $selected_dress->size == 'L' ? 'selected=selected' : '' }}>L</option>
                    <option value="XL" {{ $selected_dress->size == 'XL' ? 'selected=selected' : '' }}>XL</option>
                    <option value="XXL" {{ $selected_dress->size == 'XXL' ? 'selected=selected' : '' }}>XXL</option>
                    <option value="28" {{ $selected_dress->size == '28' ? 'selected=selected' : '' }}>28</option>
                    <option value="30" {{ $selected_dress->size == '30' ? 'selected=selected' : '' }}>30</option>
                    <option value="32" {{ $selected_dress->size == '32' ? 'selected=selected' : '' }}>32</option>
                    <option value="34" {{ $selected_dress->size == '34' ? 'selected=selected' : '' }}>34</option>
                    <option value="36" {{ $selected_dress->size == '36' ? 'selected=selected' : '' }}>36</option>
                    <option value="38" {{ $selected_dress->size == '38' ? 'selected=selected' : '' }}>38</option>
                </select>
            </div>

            <!-- Input price -->
            <div class="mb-3">
                <label for="inputPrice" class="form-label">PRICE</label>
                <input type="number" class="form-control bg-dark text-light" name="price" id="inputPrice" value="{{$selected_dress->price}}">
            </div>

            <!-- Input overview -->
            <div class="mb-3">
                <label for="inputOverview" class="form-label">OVERVIEW</label>
                <textarea class="form-control bg-dark text-light" id="inputOverview" name="overview" rows="10">{{$selected_dress->overview}}</textarea>
            </div>

            <!-- Submit button -->
            <div class="m-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

	</div>

@endsection