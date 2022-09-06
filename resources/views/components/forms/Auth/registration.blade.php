{{-- registration form --}}
<form class="p-4" method="POST" action="{{ route('registerUser') }}">    
    @csrf
    <div class="grid gap-6 mb-2 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-semibold text-w-blue">First
                name</label>
            <input type="text" id="first_name" name="fname"
                class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5 "
                placeholder="" value="{{ old('fname') }}">
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-semibold text-w-blue">Last
                name</label>
            <input type="text" id="last_name" name="lname"
                class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5 "
                placeholder="" value="{{ old('lname') }}">
        </div>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-semibold text-w-blue">Your
            email</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5"
            placeholder="paul@yahoo.com" value="{{ old('email') }}">
    </div>

    <div class="mb-6">
        <label for="phonenumber" class="block mb-2 text-sm font-semibold text-w-blue">Your
            Phone Number</label>
        <input type="text" id="phonenumber" name="phonenumber" value="{{ old('phonenumber') }}"
            class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5">
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-semibold text-w-blue">Your
            password</label>
        <input type="password" id="password" name="password"
            class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5">
    </div>

    <button type="submit"
        class="text-white bg-w-green hover:scale-105 focus:ring-4 focus:outline-none focus:ring-w-orange font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Register
        now</button>
</form>
