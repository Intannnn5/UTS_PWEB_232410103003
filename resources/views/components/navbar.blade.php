@props(['username'])

<header class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-600 fixed w-full z-50">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-teal-600 dark:text-teal-300" href="#">
      <span class="sr-only">Home</span>
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[70px] h-auto">
    </a>

    <div class="flex flex-1 items-center justify-end md:justify-between">
      {{-- Desktop Navigation --}}
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
            <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
              href="{{ route('dashboard', ['username' => $username]) }}">
              Dashboard
            </a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
              href="{{ route('pengelolaan', ['username' => $username]) }}">
              Pengelolaan
            </a>
          </li>
          <li>
            <a class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
              href="{{ route('profile', ['username' => $username]) }}">
              Profile
            </a>
          </li>
        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
          <span class="hidden md:block px-5 py-2.5 text-sm font-medium text-gray-700 dark:text-white">
            @if ($username)
              Selamat datang, {{ $username }}!
            @endif
          </span>
        </div>

        {{-- Hamburger Button --}}
        <button id="hamburger-btn"
          class="block rounded-md bg-gray-100 p-2 text-gray-600 transition hover:bg-gray-200 md:hidden dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
          aria-expanded="false"
          aria-controls="mobile-menu">
          <span class="sr-only">Toggle menu</span>
          <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  {{-- Mobile Nav --}}
  <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 shadow-lg transition-all duration-300 ease-in-out">
    <div class="px-4 pt-2 pb-4 space-y-1">
      <div class="px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-300">
        @if ($username)
          Selamat datang, {{ $username }}!
        @endif
      </div>
      <a href="{{ route('dashboard', ['username' => $username]) }}"
        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50 dark:text-white dark:hover:bg-gray-800">
        Dashboard
      </a>
      <a href="{{ route('pengelolaan', ['username' => $username]) }}"
        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50 dark:text-white dark:hover:bg-gray-800">
        Pengelolaan
      </a>
      <a href="{{ route('profile', ['username' => $username]) }}"
        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50 dark:text-white dark:hover:bg-gray-800">
        Profile
      </a>
    </div>
  </div>
</header>
