<section class="flex flex-col md:flex-row h-screen items-center mt-10">
        <div
            class="bg-white p-4 w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/2 px-6 lg:px-16 xl:px-12 flex justify-center">
            <div class="w-full h-100">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-center">Create an account</h1>
                <form class="mt-6" action="#" method="POST">
                    <div class="flex justify-between my-4">
                        <div class="w-1/2">
                            <label class="block text-gray-700" for="fname">First name</label>
                            <input type="text" name="fname" id="fname" placeholder="Enter First name"
                                class="w-11/12 px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                        </div>
                        <div class="w-1/2 flex flex-col items-end">
                            <label class="block text-gray-700 w-11/12" for="lname">Last name</label>
                            <input type="text" name="lname" id="lname" placeholder="Enter Last name"
                                class="w-11/12 px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                        </div>
                    </div>
                    <div class="my-4">
                        <div>
                            <label class="block text-gray-700" for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                        </div>
                    </div>
                    <div class="my-4">
                        <div>
                            <label class="block text-gray-700" for="Phonenumber">Phone number</label>
                            <input type="number" name="Phonenumber" id="Phonenumber" placeholder="Enter Phone number"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                        </div>
                    </div>
                    <div class="flex justify-between my-4">
                        <div class="w-1/2">
                            <label class="block text-gray-700" for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6"
                                class="w-11/12 px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                required>
                        </div>
                        <div class="w-1/2 flex flex-col items-end">
                            <label class="block text-gray-700 w-11/12" for="passwordCnfiramtion">confirm password</label>
                            <input type="password" name="password_confirmation" id="passwordCnfiramtion" placeholder="Enter Password" minlength="6"
                                class="w-11/12 px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                required>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                        Sign up
                    </button>
                </form>
                <p class="my-8">Need an account? <a href="{{ asset('Login')}}"
                        class="text-blue-500 hover:text-blue-700 font-semibold">Log in</a></p>
            </div>
        </div>
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
            <img src="{{ asset('images/imgSingin.png')}}" alt="" class="w-full h-full object-cover">
        </div>
    </section>
