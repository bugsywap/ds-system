@include('partials.header')
@vite(['resources/js/dropdown_pl.js' , 'resources/js/add_patient_banner.js'])

<div id="main-cont-pl" class="font-poppins p-4 tabletm:ml-56">
    <div class="relative">
        <div id="alert-2" class="fixed bottom-4 right-4 transform transition-transform duration-500 translate-y-full flex items-center w-[25rem] p-4 mb-4 text-shamrock-800 rounded-lg bg-shamrock-50 {{ Session::has('message') ? '' : 'hidden' }}" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="#383838" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ Session::get('message') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-shamrock-500 rounded-lg focus:ring-2 focus:ring-shamrock-400 p-1.5 hover:bg-shamrock-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
            <div id="loading" class="absolute bottom-0 left-0 h-1 bg-shamrock-300"></div>
        </div>
    </div>




    <div id="main-cont-wrapper" class="p-4 border-2 border-gray-100 border-dashed rounded-lg">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl tablet:text-3xl font-semibold text-curious-blue-600">Patient List</h1>
            <a href="{{ route('add_patient') }}" class="flex justify-between items-center py-2 px-5 bg-shamrock-400 rounded-lg text-white hover:bg-shamrock-500">
                <svg class="w-4 h-4 me-2 text-shamrock-400 group-hover:text-gray-500 ">
                    <path stroke=" white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h14m-7 7V1" />
                </svg>
                Add Patient</a>
        </div>
        <p class="font-regular text-sm text-curious-blue-600">A list of all your patients.</p>
        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" class="tabletm:hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mt-4" type="button">
            <span>All Patients</span>
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-target="#all-patients" data-label="All Patients">All Patients</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-target="#new-patients" data-label="New Patients">New Patients</a>
                </li>

            </ul>
        </div>

        <!-- Tabs for PC -->
        <div class="mb-4 border-b border-gray-200 phone:hidden tabletm:block">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-curious-blue-600 hover:text-curious-blue-600 border-curious-blue-600" data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#all-patients" type="button" role="tab" aria-controls="profile" aria-selected="false">All Patients</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="dashboard-styled-tab" data-tabs-target="#new-patients" type="button" role="tab" aria-controls="dashboard" aria-selected="false">New Patients</button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div id="default-styled-tab-content" class="mt-4">
            <div class="hidden p-4 rounded-lg" id="all-patients" role="tabpanel" aria-labelledby="all-patients">
                <div class="flex justify-between items-center">
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
                        <thead class="text-xs text-gray-700 uppercase bg-curious-blue-100">
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
                            @foreach ($all_patients as $patients)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">
                                    {{$patients -> patient_id}}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$patients -> patient_name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$patients -> age}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$patients -> phone}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$patients -> doctor}}
                                </td>
                                <td class="px-6 py-4 break-words">
                                    {{$patients -> service}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('patient_info', $patients->_id) }}" class="bg-curious-blue-500 text-white rounded-lg px-6 py-2 hover:bg-curious-blue-600">Patient Info</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="hidden p-4 rounded-lg" id="new-patients" role="tabpanel" aria-labelledby="new-patients">
                <div class="flex justify-between items-center">
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
                        <thead class="text-xs text-gray-700 uppercase bg-curious-blue-100">
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
                            @foreach ($new_patients as $newPatients)
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4">
                                    {{$newPatients -> patient_id}}
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$newPatients -> patient_name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$newPatients -> age}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$newPatients -> phone}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$newPatients -> doctor}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$newPatients -> service}}
                                </td>
                                <td class="px-6 py-4">
                                    <button class="bg-curious-blue-500 text-white rounded-lg px-6 py-2 hover:bg-curious-blue-600">Patient Info</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg" id="old-patients" role="tabpanel" aria-labelledby="old-patients">
            <div class="flex justify-between items-center">
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