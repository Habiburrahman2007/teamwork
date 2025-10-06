<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="argon/build/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="argon/build/assets/img/favicon.png" />
    <title>{{$title}}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="argon/build/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="argon/build/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="argon/build/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 min-h-25 -z-10"></div>
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Sidebar</span>
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">

        <!-- Dashboard -->
        <li class="mt-0.5 w-full">
            <a href="{{ route('dashboard') }}"
                class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold transition-colors
                {{ request()->routeIs('dashboard') ? 'bg-blue-500/13 text-blue-500' : 'text-slate-700 dark:text-white dark:opacity-80' }}">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal ni ni-tv-2
                    {{ request()->routeIs('dashboard') ? 'text-blue-500' : 'text-slate-700' }}"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
            </a>
        </li>

        <!-- Add Portfolio -->
        <li class="mt-0.5 w-full">
            <a href="{{ route('add-portfolio') }}"
                class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold transition-colors
                {{ request()->routeIs('add-portfolio') ? 'bg-blue-500/13 text-blue-500' : 'text-slate-700 dark:text-white dark:opacity-80' }}">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal ni ni-tv-2
                    {{ request()->routeIs('add-portfolio') ? 'text-blue-500' : 'text-slate-700' }}"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Add Portfolio</span>
            </a>
        </li>

        <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                Account Pages
            </h6>
        </li>

        <!-- Profile -->
        <li class="mt-0.5 w-full">
            <a href="#"
                class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold transition-colors
                {{ request()->routeIs('profile') ? 'bg-blue-500/13 text-blue-500' : 'text-slate-700 dark:text-white dark:opacity-80' }}">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="relative top-0 text-sm leading-normal ni ni-single-02
                    {{ request()->routeIs('profile') ? 'text-blue-500' : 'text-slate-700' }}"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
            </a>
        </li>

    </ul>
</div>

    </aside>

    <main class="h-full max-h-screen w-full p-6">
        {{ $slot }}
    </main>

</body>
<script src="argon/build/assets/js/plugins/chartjs.min.js" async></script>
<script src="argon/build/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<script src="argon/build/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>
