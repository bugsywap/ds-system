<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Welcome to DentaSync</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/favicon.ico') }}">
</head>

<body class="font-poppins">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-3 mt-2 ms-3 text-sm text-gray-500 rounded-lg tabletm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-56 h-screen transition-transform -translate-x-full tabletm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-curious-blue-800">
            <a href="#home" class="flex">
                <img class="h-8 tablet:h-10 laptops:h-12 mx-auto mt-4 mb-8" src="{{ asset('imgs/ds.webp') }}" alt="dentasync-logo">
            </a>
            <ul class="space-y-8 font-medium text-center">
                <li>
                    <a href="{{ route('index') }}" class="flex items-center p-3 text-gray-50 rounded-lg hover:bg-shamrock-400 focus:bg-shamrock-400 group {{ Route::currentRouteName() == 'index' ? 'bg-shamrock-400' : '' }}">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('appointments') }}" class="flex items-center p-3 text-gray-50 rounded-lg hover:bg-shamrock-400 focus:bg-shamrock-400 group {{ Route::currentRouteName() == 'appointments' ? 'bg-shamrock-400' : '' }}">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}" class="flex items-center p-3 text-gray-50 rounded-lg hover:bg-shamrock-400 focus:bg-shamrock-400 group {{ Route::currentRouteName() == 'calendar' ? 'bg-shamrock-400' : '' }}">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('patient_list') }}" class="flex items-center p-3 text-gray-50 rounded-lg hover:bg-shamrock-400 focus:bg-shamrock-400 group {{ in_array(Route::currentRouteName(), ['patient_list', 'patient_info']) ? 'bg-shamrock-400' : '' }}">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Patients</span>
                    </a>
                </li>



                <li>
                    <a href="{{ route('visual_gallery') }}" class="flex items-center p-3 text-gray-50 rounded-lg hover:bg-shamrock-400 focus:bg-shamrock-400 group {{ Route::currentRouteName() == 'visual_gallery' ? 'bg-shamrock-400' : '' }}">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Visual Gallery</span>
                    </a>
                </li>
            </ul>
            <ul class="pt-4 mt-8 space-y-2 font-medium border-t text-center">
                <li>
                    <a href="#" class="flex items-center p-3 mt-4 text-gray-50 rounded-lg border border-gray-50 hover:bg-shamrock-400 focus:bg-shamrock-400 group">
                        <span class="flex-1 whitespace-nowrap group-hover:text-dswhite group-focus:text-dswhite">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>