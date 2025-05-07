<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyTask</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center px-4"
      style="background: linear-gradient(135deg, #547792 0%, #213448 100%);">

    <div class="w-full max-w-md rounded-xl p-8 backdrop-blur-sm bg-white/20 dark:bg-gray-800/50
                shadow-xl border border-white/10 dark:border-gray-700/50">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white dark:text-teal-300">
                Welcome to MyTask
            </h2>
            <p class="text-white/80 dark:text-gray-300 mt-2">
                Please login to continue
            </p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET" class="space-y-4">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-white/90 dark:text-gray-200 mb-2">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    required
                    class="w-full px-4 py-3 rounded-lg border border-white/20 dark:border-gray-600
                           bg-white/30 dark:bg-gray-700/50 text-white placeholder-white/70
                           focus:ring-2 focus:ring-white/50 focus:border-transparent"
                    placeholder="Enter your username"
                />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-white/90 dark:text-gray-200 mb-2">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 rounded-lg border border-white/20 dark:border-gray-600
                           bg-white/30 dark:bg-gray-700/50 text-white placeholder-white/70
                           focus:ring-2 focus:ring-white/50 focus:border-transparent"
                    placeholder="Enter your password"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-white/90 hover:bg-white text-teal-600 dark:text-teal-700 font-bold
                       py-3 px-4 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg
                       focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2
                       focus:ring-offset-teal-500"
            >
                Login
            </button>
        </form>
    </div>

</body>
</html>
