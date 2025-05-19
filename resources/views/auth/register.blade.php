<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'elegant': '0px 2px 15px rgba(0, 0, 0, 0.04), 0px 10px 30px rgba(0, 0, 0, 0.08)',
                        'card': '0px 4px 25px rgba(0, 0, 0, 0.05)',
                    },
                }
            }
        }
    </script>
    <!-- Auth CSS -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>

<body>
    <div class="animated-bg">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <div class="login-card w-full max-w-md bg-white rounded-2xl shadow-elegant p-8 md:p-10">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-2xl font-bold text-gray-800 ml-2">Admin Smart Trash Bin</span>
                </div>
            </div>

            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="space-y-5">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <div class="relative">
                            <input id="nama_lengkap" name="nama_lengkap" type="text" required class="input-field w-full py-2.5 pl-10 rounded-lg focus:outline-none transition-colors bg-gray-50" placeholder="John Doe">
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                        <div class="relative">
                            <input id="telepon" name="telepon" type="text" required class="input-field w-full py-2.5 pl-10 rounded-lg focus:outline-none transition-colors bg-gray-50" placeholder="08123456789">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <input id="email" name="email" type="email" required class="input-field w-full py-2.5 pl-10 rounded-lg focus:outline-none transition-colors bg-gray-50" placeholder="your@email.com">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required class="input-field w-full py-2.5 pl-10 rounded-lg focus:outline-none transition-colors bg-gray-50" placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <div class="relative">
                            <input id="password_confirmation" name="password_confirmation" type="password" required class="input-field w-full py-2.5 pl-10 rounded-lg focus:outline-none transition-colors bg-gray-50" placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="btn-primary w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white focus:outline-none">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>

            <!-- Sign In Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:text-primary-700">Sign in</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
</body>
</html>
