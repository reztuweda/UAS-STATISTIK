<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="David Mario">
    <meta name="description" content="Admin Statistik">
    <meta name="keywords" content="admin, statistik, david mario">

    <title>STATISTIK | ILKOM 055</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

    <!-- Shortcut Web Icon -->
    <link rel="shortcut icon" href="/img/logo.png">
    <!-- <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style> -->
    
</head>
<body>
    

    <div class="flex items-center justify-center min-h-screen px-5 py-5 bg-white min-w-screen">
        <div class="w-full overflow-hidden text-gray-500 bg-gray-100 shadow-xl rounded-3xl" style="max-width:1000px">
            <div class="w-full md:flex">
                <div class="hidden w-1/2 px-10 py-10 bg-gray-500 md:block">
                    <img src="img/Account-amico.svg" alt="" class="w-full h-full">
                </div>
                <div class="w-full px-5 py-10 md:w-1/2 md:px-10">
                    <div class="mb-10 text-center">
                        <h1 class="text-3xl font-bold text-gray-900">LOGIN</h1>
                        <p>Enter your account to Login</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="email" value="{{ __('Email') }}" class="px-1 text-xs font-semibold">Email</label>
                                <div class="flex">
                                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-email-outline"></i></div>
                                    <input id="email" type="email" name="email" :value="old('email')" required autofocus class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-gray-500" placeholder="name@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="password" value="{{ __('Password') }}" class="px-1 text-xs font-semibold">Password</label>
                                <div class="flex">
                                    <div class="z-10 flex items-center justify-center w-10 pl-1 text-center pointer-events-none"><i class="text-lg text-gray-400 mdi mdi-lock-outline"></i></div>
                                    <input id="password" type="password" name="password" required autocomplete="new-password" class="w-full py-2 pl-10 pr-3 -ml-10 border-2 border-gray-200 rounded-lg outline-none focus:border-gray   -500" placeholder="************">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        </div>
                            <div class="flex my-6 -mx-3">
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button type="submit" class="block w-full max-w-xs px-3 py-3 mx-auto font-semibold text-white bg-gray-600 rounded-lg hover:bg-black focus:bg-indigo-700">LOGIN</button>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="w-auto p-1 ml-4 text-sm text-gray-700 underline border-2 rounded-md border-black/60 hover:bg-white dark:text-gray-500">Register</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
