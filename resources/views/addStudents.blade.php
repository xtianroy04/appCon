@extends('layouts.app')

@section('title')
 Add Student |
@endsection

@section('content')
@include('layouts.header')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Add Student</h1>

    <form action="{{ route('processAdd')}}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First Name:</label>
            <input type="text" name="first_name" id="first_name" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
            <input type="text" name="address" id="address" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age:</label>
            <input type="number" name="age" id="age" class="border rounded w-full py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender:</label>
            <select name="gender" id="gender" class="border rounded w-full py-2 px-3" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="school" class="block text-gray-700 text-sm font-bold mb-2">School:</label>
            <input type="text" name="school" id="school" class="border rounded w-full py-2 px-3" required>
        </div>

        <button type="submit" class="bg-green-500 text-white p-2 rounded hover:bg-green-700">Add Student</button>
        <a href="{{ route('home')}}" class="bg-gray-300 text-gray-700 p-2 rounded ml-2">Back</a>
    </form>
</div>
@endsection