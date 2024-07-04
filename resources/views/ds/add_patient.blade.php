@include('partials.header')

<div class="m-auto w-96 my-44">
    <form method="post" action="{{route('addPatient')}}">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Doe" required />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" required />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>

@include('partials.footer')