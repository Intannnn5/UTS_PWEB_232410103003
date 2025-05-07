@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md mt-5 mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Profil Pengguna</h2>

        <div class="space-y-4">
            <div>
                <p class="text-gray-600">Nama Lengkap:</p>
                <p class="text-lg font-medium text-gray-900 bg-gray-100 p-2 rounded tracking-widest">Intan Purnama</p>
            </div>

            <div>
                <p class="text-gray-600">Email:</p>
                <p class="text-lg font-medium text-gray-900 bg-gray-100 p-2 rounded tracking-widest">user@gmail.com</p>
            </div>

            <div>
                <p class="text-gray-600">Username:</p>
                <p class="text-lg font-medium text-gray-900 bg-gray-100 p-2 rounded tracking-widest">
                    {{ request('username') ?? 'Guest' }}
                </p>
            </div>

            <div>
                <p class="text-gray-600">Password:</p>
                <p class="text-lg font-medium text-gray-900 bg-gray-100 p-2 rounded tracking-widest">
                    {{ str_repeat('*', strlen(request('password') ?? 'Guest')) }}
                </p>
            </div>

            <!-- Tombol Edit -->
            <div class="pt-2 flex justify-end">
                <form method="" action="">
                    @csrf
                    <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Edit
                    </button>
                </form>
            </div>

            <!-- Tombol Logout -->
            <div class="flex justify-end">
                <form method="" action="">
                    @csrf
                    <button type="submit"
                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
