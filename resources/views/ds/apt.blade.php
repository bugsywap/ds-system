@include('partials.header')
@vite(['resources/js/dropdown_apt.js'])
<div id="main-cont-apt" class="font-poppins p-4 tabletm:ml-56">
    <div id="main-cont-wrapper" class="p-4 border-2 border-gray-100 border-dashed rounded-lg">
        <h1 class="text-2xl tablet:text-3xl font-semibold text-curious-blue-600">Appointments</h1>
        <p class="font-regular text-sm text-curious-blue-600">A list of your new and old bookings</p>
        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" class="tabletm:hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mt-4" type="button">
            <span>Notifications</span>
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-target="#styled-profile" data-label="Notifications">Notifications</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-target="#styled-dashboard" data-label="Pending">Pending</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-target="#styled-settings" data-label="Archive">Archive</a>
                </li>
            </ul>
        </div>

        <!-- Tabs for PC -->
        <div class="mb-4 border-b border-gray-200 phone:hidden tabletm:block">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-curious-blue-600 hover:text-curious-blue-600 border-curious-blue-600" data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Notifcations</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Pending</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Archive</button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div id="default-styled-tab-content" class="mt-4">
            <div class="hidden p-4 rounded-lg bg-curious-blue-200" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for patient....">
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md mt-4 rounded-lg">
                    <table class="w-full table-fixed text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-curious-blue-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Patient ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Patient Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mobile
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dr. Assigned
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Recent Treatment
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">
                                    1
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Donut Mr.
                                </th>
                                <td class="px-6 py-4">
                                    30
                                </td>
                                <td class="px-6 py-4">
                                    0999999999
                                </td>
                                <td class="px-6 py-4">
                                    Dra. Pokers
                                </td>
                                <td class="px-6 py-4 break-words">
                                    Sangla Ipin NA MALAKI WITH DIAMONDS AND GOLD SA ILALIM TAS UMAAPOY PAG BUMUGA
                                </td>
                                <td class="px-6 py-4">
                                    <button class="bg-shamrock-400 text-white rounded-lg px-6 py-2 hover:bg-shamrock-500">Patient Info</button>

                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-curious-blue-200" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for patient....">
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md mt-4 rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-curious-blue-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Patient Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Schedule
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Service
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Medical History
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Donut Mr.
                                </th>
                                <td class="px-6 py-4">
                                    30
                                </td>
                                <td class="px-6 py-4">
                                    July 10, 2031
                                </td>
                                <td class="px-6 py-4">
                                    Kunin Wisdom Tooth
                                </td>
                                <td class="px-6 py-4 w-96">
                                    Lumolobo Mata , Tumitibok puso pag nakikita ka, nag dadry lalamunan pag kausap ka
                                </td>
                                <td class="flex flex-col items-center px-6 py-4 w-56">
                                    <div class="pb-2">
                                        <button class="bg-shamrock-400 text-white rounded-lg px-8 py-2 hover:bg-shamrock-500">Confirm Patient</button>
                                    </div>
                                    <div>
                                        <button class="bg-curious-blue-400 text-white rounded-lg px-5 py-2 hover:bg-curious-blue-500">Reschedule Patient</button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-curious-blue-200" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for patient....">
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md mt-4 rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-curious-blue-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Patient ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Patient Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Age
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mobile
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dr. Assigned
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Recent Treatment
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b ">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Elega
                            </th>
                            <td class="px-6 py-4">
                                52
                            </td>
                            <td class="px-6 py-4">
                                09998886666
                            </td>
                            <td class="px-6 py-4">
                                Dr. Spakol
                            </td>
                            <td class="px-6 py-4">
                                Burst fade na ipin
                            </td>
                            <td class="px-6 py-4">
                                <button class="bg-shamrock-400 text-white rounded-lg px-6 py-2 hover:bg-shamrock-500">Patient Info</button>

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="flex justify-center items-center -space-x-px text-sm mt-4">
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-curious-blue-100 hover:text-curious-blue-700">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-blue-600 bg-blue-50  border border-gray-300 hover:bg-curious-blue-100 hover:text-curious-blue-700">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-curious-blue-100 hover:text-curious-blue-700">2</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8  border border-gray-300 bg-white hover:bg-curious-blue-100 hover:text-curious-blue-700">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-curious-blue-100 hover:text-curious-blue-700">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-curious-blue-100 hover:text-curious-blue-700">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-curious-blue-100 hover:text-curious-blue-700">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@include('partials.footer')