@include('partials.header')

<div id="main-cont-index" class="font-poppins p-4 tabletm:ml-56">
    <div id="main-cont-wrapper" class="p-4 border-2 border-gray-100 border-dashed rounded-lg">
        <h1 class="text-2xl tablet:text-3xl font-semibold text-curious-blue-600">Hello, Dr. John Doe</h1>
        <p class="font-light text-sm text-curious-blue-600">See what's happening in your clinic today.</p>


        <div class="flex phone:flex-col tabletm:flex-row tabletm:justify-between items-center">
            <div class="flex tabletm:flex-col justify-between tabletm:justify-center items-center w-full tabletm:w-52 laptops:w-72 desktops:w-96 h-24 tabletm:h-44 bg-white border border-gray-200 rounded-lg shadow-sm mt-4 tabletm:mt-4">
                <div class="p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 60 60">
                        <path fill="#157EB1" d="M8.571 8.571a8.572 8.572 0 1 1 17.144 0 8.572 8.572 0 0 1-17.144 0Zm29.053 6.789.18.137a8.571 8.571 0 1 0-.18-.137Zm-15.047 6.069a8.57 8.57 0 1 1 15.157 8.004 8.57 8.57 0 0 1-15.157-8.004Zm-16.148 0H17.87a12.9 12.9 0 0 0 2.546 12.857h-1.131A10.715 10.715 0 0 0 9.193 41.39a15.856 15.856 0 0 1-3.999-2.327C1.971 36.471 0 32.64 0 27.857a6.428 6.428 0 0 1 6.429-6.428Zm34.285 12.857c4.65 0 8.61 2.961 10.093 7.105a16.2 16.2 0 0 0 3.999-2.327C58.029 36.471 60 32.64 60 27.857a6.428 6.428 0 0 0-6.429-6.428H42.13c.471 1.341.728 2.785.728 4.285a12.86 12.86 0 0 1-3.274 8.572h1.131Zm5.945 8.263c.312.754.484 1.585.484 2.451 0 4.783-1.967 8.614-5.194 11.207C38.773 58.757 34.513 60 30 60s-8.773-1.243-11.949-3.793C14.83 53.614 12.857 49.783 12.857 45a6.412 6.412 0 0 1 6.429-6.429h21.428a6.43 6.43 0 0 1 5.945 3.978Z" />
                    </svg>

                </div>
                <div class="text-right tabletm:text-center p-4 tabletm:p-0 text-curious-blue-600">
                    <h1 class="text-2xl font-bold">4024</h1>
                    <h1 class="font-regular text-[0.8rem] mb-1">Overall Patients</h1>
                </div>
            </div>


            <div class="flex tabletm:flex-col justify-between tabletm:justify-center items-center w-full tabletm:w-52 laptops:w-72 desktops:w-96 h-24 tabletm:h-44 bg-white border border-gray-200 rounded-lg shadow-sm mt-8 tabletm:mt-4">
                <div class="p-4">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 40 41">
                        <path fill="#157EB1" d="M20 20.5c-2.75 0-5.104-.98-7.063-2.938C10.98 15.604 10 13.25 10 10.5s.98-5.104 2.938-7.063C14.896 1.48 17.25.5 20 .5s5.104.98 7.063 2.938C29.02 5.396 30 7.75 30 10.5s-.98 5.104-2.938 7.063C25.105 19.52 22.75 20.5 20 20.5Zm-20 20v-7a7.31 7.31 0 0 1 1.095-3.905A7.324 7.324 0 0 1 4 26.875a37.063 37.063 0 0 1 7.875-2.905 34.53 34.53 0 0 1 16.25 0A37.43 37.43 0 0 1 36 26.875a7.297 7.297 0 0 1 2.907 2.72A7.301 7.301 0 0 1 40 33.5v7H0Z" />
                    </svg>

                </div>

                <div class="text-right tabletm:text-center p-4 tabletm:p-0 text-curious-blue-600">
                    <h1 class="text-2xl font-bold">10</h1>
                    <h1 class="font-regular text-[0.8rem] mb-1">Patients Today</h1>
                </div>
            </div>


            <div class="flex tabletm:flex-col justify-between tabletm:justify-center items-center w-full tabletm:w-52 laptops:w-72 desktops:w-96 h-24 tabletm:h-44 bg-white border border-gray-200 rounded-lg shadow-sm mt-8 tabletm:mt-4">
                <div class="p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="36" fill="none" viewBox="0 0 56 41">
                        <path fill="#157EB1" d="M43 25.5V18h-7.5v-5H43V5.5h5V13h7.5v5H48v7.5h-5Zm-22.5-5c-2.75 0-5.104-.98-7.063-2.938C11.48 15.604 10.5 13.25 10.5 10.5s.98-5.104 2.938-7.063C15.396 1.48 17.75.5 20.5.5s5.104.98 7.063 2.938C29.52 5.396 30.5 7.75 30.5 10.5s-.98 5.104-2.938 7.063C25.605 19.52 23.25 20.5 20.5 20.5Zm-20 20v-7a7.31 7.31 0 0 1 1.095-3.905 7.324 7.324 0 0 1 2.905-2.72 37.063 37.063 0 0 1 7.875-2.905 34.53 34.53 0 0 1 16.25 0 37.43 37.43 0 0 1 7.875 2.905 7.297 7.297 0 0 1 2.907 2.72A7.301 7.301 0 0 1 40.5 33.5v7H.5Z" />
                    </svg>
                </div>
                <div class="text-right tabletm:text-center p-4 tabletm:p-0 text-curious-blue-600">
                    <h1 class="text-2xl font-bold">4</h1>
                    <h1 class="font-regular text-[0.8rem] mb-1">New Patients This Week</h1>
                </div>
            </div>
        </div>

        <div class="flex tabletm:flex-col justify-between items-center w-full h-full bg-white border border-gray-200 rounded-lg shadow-sm mt-8">

            <div class="w-full bg-white rounded-lg shadow p-4 md:p-6">

                <div class="flex justify-between items-start w-full">
                    <div class="flex-col items-center">
                        <div class="flex items-center mb-1 text-right p-4 tabletm:p-0 text-curious-blue-600">
                            <h5 class="text-xl font-regular leading-none text-gray-900 me-1">Most Availed Service</h5>
                            <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600">

                                <div data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">

                    </div>
                </div>

                <!-- Line Chart -->
                <div class="py-6" id="pie-chart"></div>
            </div>


        </div>

    </div>
</div>




@include('partials.footer')