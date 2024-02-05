@extends('layouts.app')

@section('title')
 Update Student |
@endsection

@section('content')
    @include('layouts.header')

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Update Student</h1>

        @if(session('error'))
            <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('updateStudent', $student->id) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                <input type="text" id="address" name="address" value="{{ $student->address }}" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age:</label>
                <input type="text" id="age" name="age" value="{{ $student->age }}" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender:</label>
                <select name="gender" id="gender" class="w-full border border-gray-300 p-2 rounded">
                    <option value="male" @if($student->gender == 'male') selected @endif>Male</option>
                    <option value="female" @if($student->gender == 'female') selected @endif>Female</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="school" class="block text-gray-700 text-sm font-bold mb-2">School:</label>
                <input type="text" id="school" name="school" value="{{ $student->school }}" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Update</button>
                <a href="{{ route('home')}}" class="bg-gray-300 text-gray-700 p-2 rounded ml-2">Back</a>
            </div>
        </form>
    </div>
@endsection
