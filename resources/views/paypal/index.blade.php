@extends('layouts.app')

@section('content')
    <div class="bg-indigo-600 p-8 rounded-md shadow-md max-w-md mx-auto my-8">
        <h1 class="text-4xl font-extrabold text-white text-center mb-8">Make A Payment</h1>

        @if (session()->has('success'))
            <div class="bg-green-500 text-white py-2 px-4 mb-4 rounded-md">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="flex justify-center">
            <a href="{{ route('make.payment') }}" class="bg-blue-500 hover:bg-blue-600 text-white uppercase rounded-full font-extrabold px-8 py-3 transition duration-300 ease-in-out">Pay $50 with PayPal 👉</a>
        </div>
    </div>
@endsection
