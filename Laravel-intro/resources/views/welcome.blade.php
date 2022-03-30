@extends('layouts.app')

@section('welcome')

    <h2>Hi. Welcome to my first Laravel project.</h2>
    <p>It may look messy but don't worry. I will fix it soon.</p>

    <h4>There you go. Have a form and give your data away.</h4>
    <form action="" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br>

        @error('name')
            <p class="text-danger mb-0">{{ $message }}</p>
        @enderror

        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}"><br>

        @error('email')
            <p class="text-danger mb-0">{{ $message }}</p>
        @enderror

        <br>
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
