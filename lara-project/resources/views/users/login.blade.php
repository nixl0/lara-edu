@extends('base')


@section('title')
    Log in
@endsection


@section('content')
    <div class="bg-slate-100 p-5 mx-5 mt-5 rounded-2xl">

        <h1 class="text-center text-2xl font-bold uppercase">Log in</h1>
        <h3 class="text-center font-bold mb-5">Enter your credentials</h3>

        <form method="POST" action="/users/authenticate">
            @csrf

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
            <div class="pb-5">
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
            <button
                type="submit" class="text-white bg-slate-500 hover:bg-slate-600 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 mb-5 transition duration-200">
                Login
            </button>

            <p>
                Don't have an account?
                <a href="/register" class="text-slate-500 hover:text-slate-600 transition duration-200">Register</a>
            </p>

        </form>

    </div>
@endsection
