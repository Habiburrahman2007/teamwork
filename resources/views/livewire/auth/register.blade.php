<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register - Argon Dashboard 2 Tailwind</title>
        <!-- Fonts and icons -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('argon/build/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('argon/build/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <link href="{{ asset('argon/build/assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
        @livewireStyles
    </head>

    <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

        <main class="mt-0 transition-all duration-200 ease-in-out">
            <section class="min-h-screen">
                <!-- Header background -->
                <div
                    class="bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg')]">
                    <span
                        class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
                    <div class="container z-10">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                                <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                                <p class="text-white">A collection of moments, light, and emotions captured through my lens.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                        <div
                            class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">

                                <!-- Header Form -->
                                <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                    <h5>Sign Up</h5>
                                </div>

                                <!-- Livewire Register Form -->
                                <div class="flex-auto p-6">
                                    <form wire:submit.prevent="register">
                                        <div class="mb-4">
                                            <input type="text" wire:model="name" placeholder="Name"
                                                class="placeholder:text-gray-500 text-sm block w-full rounded-lg border border-gray-300 py-2 px-3 focus:border-blue-500 focus:outline-none" />
                                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <input type="email" wire:model="email" placeholder="Email"
                                                class="placeholder:text-gray-500 text-sm block w-full rounded-lg border border-gray-300 py-2 px-3 focus:border-blue-500 focus:outline-none" />
                                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <input type="password" wire:model="password" placeholder="Password"
                                                class="placeholder:text-gray-500 text-sm block w-full rounded-lg border border-gray-300 py-2 px-3 focus:border-blue-500 focus:outline-none" />
                                            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <input type="password" wire:model="password_confirmation"
                                                placeholder="Confirm Password"
                                                class="placeholder:text-gray-500 text-sm block w-full rounded-lg border border-gray-300 py-2 px-3 focus:border-blue-500 focus:outline-none" />
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-white rounded-lg shadow-md bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:bg-slate-700">
                                                Sign up
                                            </button>
                                        </div>

                                        <p class="mt-4 mb-0 text-sm text-center">Already have an account?
                                            <a href="{{ route('login') }}" class="font-bold text-slate-700">Sign in</a>
                                        </p>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Scripts -->
        <script src="{{ asset('argon/build/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('argon/build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}"></script>
        @livewireScripts
    </body>
    </html>
</div>
