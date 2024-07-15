<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Book an appointment</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/favicon.ico') }}">
</head>

<body>

    <div class="m-auto w-96 my-44">
        <h1 class="text-center text-3xl">Appointment Form</h1>
        <h1 class="text-center text-3xl">THIS IS EDIT</h1>
        <p class="text-center font-light mb-3">Powered by <span class="text-curious-blue-500">Denta</span><span class="text-shamrock-500">Sync</span></p>
        <form method="post" action="{{route('editPatient')}}">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="patient_name" class="block mb-2 text-sm font-medium text-gray-900">Patient Name</label>
                    <input type="text" name="patient_name" id="patient_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$value->patient_name}}" placeholder="John" required />
                    <input type="hidden" name="id" id="id" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$value->id}}" placeholder="John" required />
                </div>
                <div>
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Age</label>
                    <input type="text" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$value->age}}" placeholder="Doe" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                    <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$value->phone}}" placeholder="123-45-678" required />
                </div>
                <div>
                    <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select id="doctor" name="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" {{ $value->doctor == '' ? 'selected' : '' }}>Choose a doctor</option>
                        <option value="mama mo" {{ $value->doctor == 'mama mo' ? 'selected' : '' }}>mama mo</option>
                        <option value="mama ko" {{ $value->doctor == 'mama ko' ? 'selected' : '' }}>mama ko</option>
                        <option value="mama niya" {{ $value->doctor == 'mama niya' ? 'selected' : '' }}>mama niya</option>
                        <option value="mama nila anty" {{ $value->doctor == 'mama nila anty' ? 'selected' : '' }}>mama nila anty</option>
                    </select>
                </div>


                <div>
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900">Service</label>
                    <input type="text" name="service" id="service" value="{{$value->service}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" required />
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>