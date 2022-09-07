{{-- contact form --}}
<form action="#" class="mb-6" action="" method="POST">
    @csrf 
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
            email</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5"
            placeholder="name@company.com" required>
    </div>
    <div class="mb-6">
        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
        <input type="text" id="subject" name="subject"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-w-orange focus:border-w-orange block w-full p-2.5"
            placeholder="Let us know how we can help you" required>
    </div>
    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your
            message</label>
        <textarea id="message" rows="4" name="message"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-w-orange focus:border-w-orange"
            placeholder="Your message..."></textarea>
    </div>
    <button type="submit"
        class="text-white bg-w-green hover:scale-105 w-full focus:ring-4 focus:ring-w-green font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 block">Send
        message</button>
</form>
