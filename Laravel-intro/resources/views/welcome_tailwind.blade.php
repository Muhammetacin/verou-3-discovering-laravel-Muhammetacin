@extends('layouts.app')

@section('welcome-tailwind')

    <h2>Hi. Welcome to my first Laravel project.</h2>
    <p>It may look messy but don't worry. I will fix it soon.</p>

    <h4>There you go. Have a form and give your data away.</h4>

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
{{--    <form action="" method="post">--}}
{{--        @csrf--}}

{{--        <div class="mb-3 w-25">--}}
{{--            <label for="name" class="form-label">Name</label>--}}
{{--            <input type="text" class="form-control" name="name" id="name" placeholder="Jane Doe"--}}
{{--                   value="{{ old('name') }}">--}}
{{--            @error('name')--}}
{{--            <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="mb-3 w-25">--}}
{{--            <label for="email" class="form-label">Email</label>--}}
{{--            <input type="email" class="form-control" name="email" id="email" placeholder="Janedoe@email.com"--}}
{{--                   value="{{ old('email') }}">--}}
{{--            @error('email')--}}
{{--            <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="mb-3 w-75 d-flex">--}}
{{--            <div class="me-3 mb-3 w-25">--}}
{{--                <label for="street" class="form-label">Street</label>--}}
{{--                <input type="text" class="form-control" id="street" name="street" placeholder="Wallstreet"--}}
{{--                       value="{{ old('street') }}">--}}
{{--                @error('street')--}}
{{--                <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="mb-3 w-25">--}}
{{--                <label for="number" class="form-label">Number</label>--}}
{{--                <input type="number" class="form-control" id="number" name="number" placeholder="915"--}}
{{--                       value="{{ old('number') }}">--}}
{{--                @error('number')--}}
{{--                <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="mb-3 w-75 d-flex">--}}
{{--            <div class="me-3 mb-3 w-25">--}}
{{--                <label for="city" class="form-label">City</label>--}}
{{--                <input type="text" class="form-control" id="city" name="city" placeholder="Gent"--}}
{{--                       value="{{ old('city') }}">--}}
{{--                @error('city')--}}
{{--                <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="mb-3 w-25">--}}
{{--                <label for="country" class="form-label">Country</label>--}}
{{--                <input type="text" class="form-control" id="country" name="country" placeholder="Belgium"--}}
{{--                       value="{{ old('country') }}">--}}
{{--                @error('country')--}}
{{--                <p class="text-danger mb-0">{{ $message }}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <input type="submit" value="Take my data">--}}
{{--    </form>--}}

    <br>

    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Password
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    City
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    State
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>New Mexico</option>
                        <option>Missouri</option>
                        <option>Texas</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                    Zip
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
            </div>
        </div>
    </form>

    <div class="pt-5">
        <h2>Visitors</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Street & number</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visitors as $visitor)
                <tr>
                    <th scope="row">{{ $visitor->id }}</th>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->email }}</td>
                    <td>{{ $visitor->address->street }}, {{ $visitor->address->number }}</td>
                    <td>{{ $visitor->address->city }}</td>
                    <td>{{ $visitor->address->country }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
