@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-600 flex items-center min-h-[70vh]">
    <div class="mx-auto w-screen max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-prose text-center">
        <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
          Sistem
          <strong class="text-indigo-900 mb-3"> MyTask </strong>
        </h1>

        <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed dark:text-gray-200">
          MyTask bisa membantu anda untuk management tugas anda
        </p>

        <div class="mt-4 flex justify-center gap-4 sm:mt-6">
          <a
            class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
            href="{{ route('pengelolaan', ['username' => $username]) }}"
          >
            Get Started
          </a>

          <a
            class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-white"
            href="#"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
</section>
@endsection
