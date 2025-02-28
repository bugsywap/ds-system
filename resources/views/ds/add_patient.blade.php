<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/next_section.js'])
    <title>Book an appointment</title>
</head>

<body>
    <div class="m-auto">
        <div class="bg-curious-blue-200 py-8 mb-3">
            <h1 class="text-center font-bold text-3xl text-curious-blue-600">Appointment Form</h1>
            <div class=" m-auto flex justify-center items-center">
                <p class="text-center font-light text-curious-blue-600">Powered by</p>
                <img class="h-5" src="{{ asset('imgs/ds.webp') }}" alt="dentasync-logo">
            </div>
        </div>
        <form class="m-auto w-[90%]" id="appointmentForm" method="post" action="{{route('addPatient')}}">
            @csrf
            <div id="section1-1" class="grid gap-4 mb-3 grid-cols-3">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required />
                </div>
                <div>
                    <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900">Middle Initial</label>
                    <input type="text" name="middle_name" id="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="D" required />
                </div>
            </div>
            <div id="section1-2" class="grid gap-4 mb-6 grid-cols-2">
                <div>
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Age</label>
                    <input type="text" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                    <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" required />
                </div>
            </div>


            <button type="button" id="nextButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
            <div id="section2" class="gap-6 mb-6 grid-cols-1 hidden">
                <div>
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select id="doctor" name="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Doctor</option>
                        <option value="mama mo">mama mo</option>
                        <option value="mama ko">mama ko</option>
                        <option value="mama niya">mama niya</option>
                        <option value="mama nila anty">mama nila anty</option>
                    </select>
                </div>
                <div>
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900">Service</label>
                    <input type="text" name="service" id="service" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" required />
                </div>
                <div class="flex justify-between items-center">
                    <button type="button" id="backButton" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Back</button>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>