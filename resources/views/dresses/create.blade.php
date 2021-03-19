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

        <form class="text-left" method="post" action="{{ route('dresses.store') }}">
        
        <!-- +++ VERY IMPORTANT +++ -->
        @method('POST')
        @csrf
            
            <!-- Input name -->
            <div class="mb-3">
                <label for="inputEmail" class="form-label">NAME</label>
                <input type="text" class="form-control bg-dark text-light" name="name" id="inputEmail" aria-describedby="emailHelp">
            </div>

            <!-- Input item ID -->
            <div class="mb-3">
                <label for="inputItemId" class="form-label">ITEM ID</label>
                <input type="text" class="form-control bg-dark text-light" name="item_id" id="inputItemId">
            </div>

            <!-- Input color -->
            <div class="mb-3">
                <label for="inputColor" class="form-label">COLOR</label>
                <input type="text" class="form-control bg-dark text-light" name="color" id="inputColor">
            </div>

            <!-- Input size -->
            <div class="mb-3">
                <label for="inputSize" class="form-label">SIZE</label>
                <select name="size" id="inputSize" class="form-control bg-dark text-light">
                    <option value="" selected>--</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="28">28</option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                    <option value="36">36</option>
                    <option value="38">38</option>
                </select>
            </div>

            <!-- Input price -->
            <div class="mb-3">
                <label for="inputPrice" class="form-label">PRICE</label>
                <input type="number" class="form-control bg-dark text-light" name="price" id="inputPrice">
            </div>

            <!-- Input overview -->
            <div class="mb-3">
                <label for="inputOverview" class="form-label">OVERVIEW</label>
                <textarea class="form-control bg-dark text-light" id="inputOverview" name="overview" rows="10"></textarea>
            </div>

            <!-- Submit button -->
            <div class="m-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

	</div>

@endsection