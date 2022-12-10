@extends('base')


@section('title')
    Register
@endsection


@section('content')
    
    <div class="bg-slate-100 p-5 mx-5 mt-5 rounded-2xl">

        <h1 class="text-center text-2xl font-bold uppercase">Register</h1>
        <h3 class="text-center font-bold mb-5">Create an account</h3>

        <form method="POST" action="/users">
            @csrf

            {{-- name --}}
            <div class="pb-2">
                <label for="name">
                    Name
                </label>
                <div class="mt-2">
                    <input name="name" type="text" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm" value="{{ old('name') }}">
                </div>
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- email --}}
            <div class="pb-2">
                <label for="email">
                    Email
                </label>
                <div class="mt-2">
                    <input name="email" type="text" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm" value="{{ old('email') }}">
                </div>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- password --}}
            <div class="pb-2">
                <label for="password">
                    Password
                </label>
                <div class="mt-2">
                    <input name="password" type="text" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm" value="{{ old('password') }}">
                </div>
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- password_confirmation --}}
            <div class="pb-5">
                <label for="password_confirmation">
                    Confirm Password
                </label>
                <div class="mt-2">
                    <input name="password_confirmation" type="text" required
                        class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm" value="{{ old('password_confirmation') }}">
                </div>
                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mb-5 transition duration-200">
                Register
            </button>

            <p>
                Already have an account?
                <a href="/login" class="text-slate-500 hover:text-slate-600 transition duration-200">Log in</a>
            </p>

        </form>

    </div>

@endsection