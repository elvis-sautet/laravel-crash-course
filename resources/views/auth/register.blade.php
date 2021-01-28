@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
            <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')
                border-red-500
            @enderror" id="name" placeholder="Your name" name="name" value="{{ old('name') }}">  
            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>

                  <div class="mb-4">
            <label for="username" class="sr-only">username</label>
            <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('username')
                border-red-500
            @enderror" id="uname" placeholder="Your username" name="username"  value="{{ old('name') }}" >  

             @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
                  <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email')
                border-red-500
            @enderror" id="email" placeholder="Your email" name="email"  value="{{ old('name') }}">  
             @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
                  <div class="mb-4">
            <label for="password" class="sr-only">password</label>
            <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')
                border-red-500
            @enderror" id="password" placeholder="Your password" name="password">  
             @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
            </div>
                  <div class="mb-4">
            <label for="repeat password" class="sr-only">repeat password</label>
            <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="repeat password" placeholder="Repeat password" name="password_confirmation">  
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
            </form>
        </div>
    </div>
@endsection