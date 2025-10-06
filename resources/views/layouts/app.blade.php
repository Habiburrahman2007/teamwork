<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="argon/build/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="argon/build/assets/img/favicon.png" />
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="argon/build/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="argon/build/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="argon/build/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- Hamburger Button (mobile only) -->
    <button id="hamburger-btn"
        class="lg:hidden fixed top-4 left-4 z-50 bg-blue-600 text-white p-2 rounded-md shadow-md focus:outline-none">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class="absolute w-full bg-blue-500 min-h-25 -z-10"></div>
    <aside
        class="hidden lg:block fixed h-screen flex-col w-64 p-4 my-4 overflow-y-auto transition-all duration-200 
        bg-white border border-gray-300 shadow-lg rounded-2xl z-50">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <a href="/" class="text-lg font-bold text-gray-800">
                <i class="ni ni-app text-blue-500 mr-2"></i> Katalog Portofolio
            </a>
            <!-- Tombol Close (hanya muncul di mobile) -->
            <button id="close-sidebar" class="lg:hidden text-gray-500 hover:text-gray-700 absolute top-4 right-4">
                <i class="fas fa-times"></i>
            </button>

        </div>

        <hr class="border-gray-300 mb-4" />

        <!-- Menu -->
        <ul class="flex flex-col gap-1">
            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-150
            {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i
                        class="ni ni-tv-2 mr-3 text-base {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-700' }}"></i>
                    Dashboard
                </a>
            </li>

            <!-- Add Portfolio -->
            <li>
                <a href="{{ route('add-portfolio') }}"
                    class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-150
            {{ request()->routeIs('add-portfolio') ? 'bg-blue-100 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i
                        class="ni ni-fat-add mr-3 text-base {{ request()->routeIs('add-portfolio') ? 'text-blue-600' : 'text-gray-500' }}"></i>
                    Add Portfolio
                </a>
            </li>

            <!-- Section title -->
            <li class="mt-4 mb-1">
                <h6 class="pl-4 text-xs font-bold uppercase text-gray-500 tracking-wider">
                    Account Pages
                </h6>
            </li>

            <!-- Profile -->
            <li>
                <a href="#"
                    class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-150
            {{ request()->routeIs('profile') ? 'bg-blue-100 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i
                        class="ni ni-single-02 mr-3 text-base {{ request()->routeIs('profile') ? 'text-blue-600' : 'text-gray-500' }}"></i>
                    Profile
                </a>
            </li>
        </ul>
    </aside>



    <main class="h-full max-h-screen w-full p-6">
        {{ $slot }}
    </main>
    <script>
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const sidebar = document.querySelector('aside');
        const closeSidebarBtn = document.getElementById('close-sidebar');

        hamburgerBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });

        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.add('hidden');
        });
    </script>



</body>
<script src="argon/build/assets/js/plugins/chartjs.min.js" async></script>
<script src="argon/build/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<script src="argon/build/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>
