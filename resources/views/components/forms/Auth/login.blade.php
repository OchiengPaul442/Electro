{{-- login form --}}
<form class="p-4" action="{{ route('loginUser') }}" method="POST">
    @csrf
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-semibold text-w-blue">Your
            email</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5"
            placeholder="paul@yahoo.com" value="{{ old('email') }}">
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-semibold text-w-blue">Your
            password</label>
        <input type="password" id="password" name="password"
            class="bg-gray-50 border border-gray-300 text-w-blue text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5">
    </div>
    <div class="flex justify-between items-start mb-6">
        <div class="flex items-center">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-w-orange">
            </div>
            <label for="remember" class="ml-2 text-sm font-semibold text-w-blue">Remember
                me</label>
        </div>
        <div class="font-semibold">
            <a href="#" id="forgotpwd-btn" class="text-w-darkbrown">Forgot Password?</a>
        </div>
    </div>
    <button type="submit" name="login" 
        class="text-white bg-w-green hover:scale-105 focus:ring-4 focus:outline-none focus:ring-w-green font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Sign
        in</button>
</form>
