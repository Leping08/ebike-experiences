@extends('layouts.app')

@section('title', 'Contact Us')

@section('description',
    'Contact us for more information about electric bikes in Florida. Our site provides information and
    resources.')

@section('content')
    {{-- @todo make this work in dark mode --}}
    <div class="bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto py-10 h-screen">
            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-5xl">
                <div class="md:flex">
                    <div class="w-full px-4 py-6 bg-gray-100 dark:bg-gray-900">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Contact Us</h2>
                        <p class="mt-3 text-gray-600 dark:text-gray-400">Fill out the form below to send us an email and
                            we'll get back to you as
                            soon as possible.</p>
                        <form class="mt-6" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="mb-6">
                                <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2"
                                    for="name">Name</label>
                                <input type="text" name="name" id="name"
                                    class="dark:text-gray-300 dark:bg-gray-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('name') border-red-500 @enderror"
                                    placeholder="Enter your name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2"
                                    for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="dark:text-gray-300 dark:bg-gray-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('email') border-red-500 @enderror"
                                    placeholder="Enter your email address" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2"
                                    for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone"
                                    class="dark:text-gray-300 dark:bg-gray-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('phone') border-red-500 @enderror"
                                    placeholder="Enter your phone number" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2"
                                    for="message">Message</label>
                                <textarea name="message" id="message" rows="5"
                                    class="dark:text-gray-300 dark:bg-gray-950 w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('message') border-red-500 @enderror"
                                    placeholder="Enter your message">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <button type="submit"
                                    class="w-full bg-indigo-600 text-white rounded-lg px-4 py-3 focus:outline-none focus:bg-indigo-500">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
