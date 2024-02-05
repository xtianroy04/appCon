@extends('layouts.app')

@section('content')
@include('layouts.header')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Student List
    </h1>
    {{-- Success Message  --}}
    @if(session('success'))
        <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-end">
        <a href="{{ route('addForm') }}" class="bg-green-500 text-white p-2 rounded ml-2 mb-2 flex items-center hover:bg-green-700">
            <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add Student
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">First Name</th>
                    <th class="py-2 px-4 border-b">Last Name</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Age</th>
                    <th class="py-2 px-4 border-b">Gender</th>
                    <th class="py-2 px-4 border-b">School</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">{{ $student->first_name }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->last_name }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->address }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->age}}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->gender }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->school }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <form action="{{ route('delete', $student->id) }}"  method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 text-white p-2 rounded hover:bg-red-700">Delete</button>
                            </form>      
                            <a href="{{ route('updateForm', $student->id)}}">
                                <button class="bg-yellow-500 text-white p-2 rounded hover:bg-yellow-700 mt-2">Update</button>
                            </a>
                        </td>                    
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-2 px-4 border-b text-center">
                            <div class="bg-red-200 text-red-800 p-2 rounded mb-2">
                                <h1>No data found!</h1>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="flex justify-center mt-4">
            {{ $students->links() }}
        </div>
    </div>
</div>
@endsection
