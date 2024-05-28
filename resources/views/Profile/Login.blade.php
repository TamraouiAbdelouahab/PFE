<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-Header/>
    <section class="flex flex-col md:flex-row h-screen md:items-center">
        <div class="bg-white p-4 w-full md:max-w-md lg:max-w-full md:mx-auto  md:w-1/2 xl:w-5/12  px-6 lg:px-16 xl:px-12 flex justify-center p-10">
            <div class="w-full h-100">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-center">Welcome back</h1>
                <form class="mt-6" action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700" for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" value="{{ old('email') }}" autofocus autocomplete required>
                        @error('email')
                        <small class="font-medium text-green-300 text-sm" style="color: rgb(220 38 38);">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-700" for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
                    </div>
                    <div class="text-right mt-2">
                        <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                    </div>
                        @error('error')
                        <small class="font-medium text-green-300 text-sm" style="color: rgb(220 38 38);">{{$message}}</small>
                        @enderror
                    <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                        Log In
                    </button>
                </form>
                <p class="my-8">Need an account? <a href="{{ asset('SignUp')}}" class="text-blue-500 hover:text-blue-700 font-semibold">Create an account</a></p>
            </div>
        </div>
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-7/12 h-screen">
            <img src="{{ asset('images/imgSingin.png')}}" alt="" class="w-full h-full object-cover">
        </div>
    </section>
</body>
<script src="{{ asset('js/HeaderResposive.js') }}"></script>
</html>
