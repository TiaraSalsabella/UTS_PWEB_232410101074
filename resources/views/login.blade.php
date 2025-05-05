@extends('layouts.app')
@section('title', 'Login Page')

@section('contents')
<div class="min-h-screen flex items-center justify-center bg-blue-50">
  <div class="bg-white p-5 rounded shadow w-full max-w-sm">
    <h1 class="text-xl font-semibold text-blue-600 text-center mb-4">Login</h1>

    {{-- Alert untuk pesan error --}}
    @if (session('error'))
        <x-alert type="error" :message="session('error')" />
    @endif

    <form action="/login" method="POST">
      @csrf
      <div class="mb-3">
        <label class="block text-sm text-blue-700 mb-1">Username</label>
        <input
          type="text"
          name="username"
          class="w-full border border-blue-300 px-3 py-2 rounded focus:ring focus:ring-blue-200 outline-none"
          required>
      </div>

      <div class="mb-4">
        <label class="block text-sm text-blue-700 mb-1">Password</label>
        <input
          type="password"
          name="password"
          class="w-full border border-blue-300 px-3 py-2 rounded focus:ring focus:ring-blue-200 outline-none"
          required>
      </div>

      <button
        type="submit"
        class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
        Masuk
      </button>
    </form>
  </div>
</div>
@endsection
