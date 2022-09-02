@extends('layouts.layout-main')
@section('content')
<div class="container max-w-screen-xs">
  <div class="p-4 sm:p-6 md:p-8 w-full bg-white border border-gray-200 rounded-lg shadow-md">
    <form action="/login" method="post" class="space-y-6">
      <h5 class="text-2xl text-center font-medium text-gray-900">Login</h5>
      @if (session()->has('loginError'))
      <div id="loginError" class="flex p-4 mb-4 bg-red-100 border-t-2 border-red-500" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div class="ml-3 text-sm font-medium text-red-700">
          {{ session('loginError') }}
        </div>
      </div>
      @endif
      @csrf
      <div>
        <label for="email" class="block ml-2 mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" name="email" id="email" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500" placeholder="Email" autofocus required>
        @error('email')
        <p class="mt-2 text-sm text-red-600"><span class="font-medium">{{ $message }}</span></p>
        @enderror
      </div>
      <div>
        <label for="password" class="block ml-2 mb-2 text-sm font-medium text-gray-900">Password</label>
        <input type="password" name="password" id="password" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500" placeholder="Password" required>
      </div>
      <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
    </form>
  </div>
</div>
@endsection
