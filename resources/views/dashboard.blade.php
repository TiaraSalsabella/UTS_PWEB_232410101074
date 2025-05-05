@extends('layouts.app')
@section('title', 'Dashboard')

@section('contents')
@if (session('success'))
    <x-alert type="success" :message="session('success')" />
@endif

<div class="p-4 bg-blue-50 min-h-screen">
    <h1 class="text-xl font-semibold text-blue-800 mb-3">Dashboard</h1>
    <h2 class="text-lg text-blue-700 mb-4">Halo, {{ $user['username'] }}!</h2>

    <div class="flex gap-3 mb-6">
        <a href="/pengelolaan" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700">
            Pengelolaan
        </a>

        <form action="{{ route('profile') }}" method="POST">
            @csrf
            <input type="hidden" name="username" value="{{ $user['username'] }}">
            <input type="hidden" name="password" value="{{ $user['password'] }}">
            <button type="submit" class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-700">
                Profil Saya
            </button>
        </form>
    </div>
</div>
@endsection
