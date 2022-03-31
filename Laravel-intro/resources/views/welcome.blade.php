@extends('layouts.app')

@section('welcome')

    <h2>Hi. Welcome to my first Laravel project.</h2>
    <p>It may look messy but don't worry. I will fix it soon.</p>

    <h4>There you go. Have a form and give your data away.</h4>
    <form action="" method="post">
        @csrf

        <div class="mb-3 w-25">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Jane Doe" value="{{ old('name') }}">
            @error('name')
            <p class="text-danger mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 w-25">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Janedoe@email.com" value="{{ old('email') }}">
            @error('email')
            <p class="text-danger mb-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 w-75 d-flex">
            <div class="me-3 mb-3 w-25">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Wallstreet" value="{{ old('street') }}">
                @error('street')
                <p class="text-danger mb-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 w-25">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="915" value="{{ old('number') }}">
                @error('number')
                <p class="text-danger mb-0">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-3 w-75 d-flex">
            <div class="me-3 mb-3 w-25">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Gent" value="{{ old('city') }}">
                @error('city')
                <p class="text-danger mb-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3 w-25">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="915" value="{{ old('country') }}">
                @error('country')
                <p class="text-danger mb-0">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <input type="submit" value="Take my data">
    </form>

    <div class="pt-5">
        <h2>Visitors</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visitors as $visitor)
                <tr>
                    <th scope="row">{{ $visitor->id }}</th>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
