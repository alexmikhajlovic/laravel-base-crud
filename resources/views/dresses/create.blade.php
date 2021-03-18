@extends('layouts.app')

@section('title','New Dress')

@section('content')

	<div class="container text-center">

		<h2>Add item to database</h2>

        <form class="text-left" method="post" action="{{ route('dresses.store') }}">

        @method('POST')
        @csrf

            <div class="mb-3">
                <label for="inputEmail" class="form-label">NAME</label>
                <input type="text" class="form-control bg-dark text-light" name="name" id="inputEmail" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="inputItemId" class="form-label">ITEM ID</label>
                <input type="text" class="form-control bg-dark text-light" name="item_id" id="inputItemId">
            </div>

            <div class="mb-3">
                <label for="inputColor" class="form-label">COLOR</label>
                <input type="text" class="form-control bg-dark text-light" name="color" id="inputColor">
            </div>

            <div class="mb-3">
                <label for="inputSize" class="form-label">SIZE</label>
                <input type="text" class="form-control bg-dark text-light" name="size" id="inputSize">
            </div>

            <div class="mb-3">
                <label for="inputPrice" class="form-label">PRICE</label>
                <input type="number" class="form-control bg-dark text-light" name="price" id="inputPrice">
            </div>

            <div class="mb-3">
                <label for="inputOverview" class="form-label">OVERVIEW</label>
                <textarea class="form-control bg-dark text-light" id="inputOverview" name="overview" rows="10"></textarea>
            </div>

            <div class="m-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

	</div>

@endsection