@extends('layouts.app')
@section('title', 'Profil Pengguna')

@section('contents')
<div class="min-h-screen bg-blue-50 p-5">
    <h1 class="text-xl font-semibold text-blue-700 mb-4">Profil Pengguna</h1>

    <div class="bg-white p-4 rounded shadow text-sm text-gray-800 space-y-2">
        <p><span class="font-medium">Username:</span> {{ $user['username'] }}</p>
        <p><span class="font-medium">Password:</span> {{ $user['password'] }}</p>
    </div>
</div>
@endsection
