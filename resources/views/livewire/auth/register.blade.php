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

        <!-- Navbar (sama seperti template Argon) -->
        <nav
            class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
            <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
                <a class="py-1.75 ml-4 mr-4 font-bold text-white text-sm whitespace-nowrap lg:ml-0" href="#"
                    target="_blank"> Argon Dashboard 2 </a>
                <button navbar-trigger
                    class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                    type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                        <span bar1
                            class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                        <span bar2
                            class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                        <span bar3
                            class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
                    </span>
                </button>
            </div>
        </nav>

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
                                <p class="text-white">Use these awesome forms to login or create new account in your
                                    project for free.</p>
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
                                    <h5>Register with</h5>
                                </div>

                                <!-- Social Login Buttons -->
                                <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12 mt-3">
                                    <div class="w-3/12 max-w-full px-1 ml-auto flex-0">
                                        <a href="javascript:;"
                                            class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </div>
                                    <div class="w-3/12 max-w-full px-1 flex-0">
                                        <a href="javascript:;"
                                            class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </div>
                                    <div class="w-3/12 max-w-full px-1 mr-auto flex-0">
                                        <a href="javascript:;"
                                            class="inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                    <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                                        <p
                                            class="z-20 inline px-4 mb-2 font-semibold leading-normal bg-white text-sm text-slate-400">
                                            or</p>
                                    </div>
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

                                        <div class="min-h-6 pl-7 mb-0.5 block">
                                            <input wire:model="terms" type="checkbox" value="1" id="terms"
                                                class="w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 relative float-left mt-1 cursor-pointer appearance-none border border-gray-200 bg-white" />
                                            <label for="terms"
                                                class="mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700">
                                                I agree to the <a href="#" class="font-bold text-slate-700">Terms and
                                                    Conditions</a>
                                            </label>
                                            @error('terms') <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
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

            <!-- Footer -->
            <footer class="py-12">
                <div class="container text-center text-slate-400">
                    <p class="mb-0">Copyright &copy; {{ date('Y') }} Argon Dashboard 2 by Creative Tim.</p>
                </div>
            </footer>
        </main>

        <!-- Scripts -->
        <script src="{{ asset('argon/build/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('argon/build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}"></script>
        @livewireScripts
    </body>

    </html>

</div>
