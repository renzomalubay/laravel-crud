@extends('layouts.app')

@section('content')
  <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
      <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>
      <form action="" method="POST" class="space-y-6">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email:
          </label>
          <input type="email" id="email" name="email" required
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password:
          </label>
          <input type="password" id="password" name="password" required
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400
                 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div>
          <button type="submit"
            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white
                 bg-blue-600 hover:bg-blue-700
                 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
