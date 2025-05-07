@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 mx-4 my-[50px] sm:mx-8 sm:my-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Tugas</h1>

        <!-- Form Tambah Tugas -->
        <div class="mb-6">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="flex gap-4">
                    <input type="text" name="judul" placeholder="Judul Tugas" class="p-2 border border-gray-200 rounded-md w-full" required>
                    <button type="submit" class="bg-blue-500 text-white text-xs px-3 py-1 rounded-md">Tambah Tugas</button>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Id</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Judul</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $task['id'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $task['judul'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <form action=" " method="POST" class="inline-block">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex justify-end space-x-15">
                                        <button type="submit" name="status" value="Selesai"
                                            class="px-4 py-2 rounded-md
                                            @if($task['status'] === 'Selesai')
                                                bg-green-600 text-white
                                            @else
                                                bg-gray-200 text-gray-600
                                            @endif
                                            hover:bg-green-700 hover:text-white">
                                            Selesai
                                        </button>

                                        <button type="submit" name="status" value="Hapus"
                                            class="px-4 py-2 rounded-md
                                            @if($task['status'] === 'Hapus')
                                                bg-red-600 text-white
                                            @else
                                                bg-gray-200 text-gray-600
                                            @endif
                                            hover:bg-red-700">
                                            Hapus
                                        </button>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
