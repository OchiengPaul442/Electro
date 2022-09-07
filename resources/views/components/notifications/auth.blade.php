 {{-- error messages --}}
 @if (Session::has('success'))
     <div class="notification_drop w-full h-full absolute top-5 ">
         <div class="flex justify-center">
             <div class="text-center bg-white w-96 shadow-md shadow-w-orange rounded-lg z-50 p-3">
                 <span class="text-green-700 font-bold">{{ Session::get('success') }}</span>
             </div>
         </div>
     </div>
 @elseif (Session::has('fail'))
     <div class="notification_drop w-full h-full absolute top-5 ">
         <div class="flex justify-center">
             <div class="text-center bg-white w-96 shadow-md shadow-w-orange rounded-lg z-50 p-3">
                 <span class="text-red-700 font-bold">{{ Session::get('fail') }}</span>
             </div>
         </div>
     </div>
 @elseif (Session::has('error'))
     <div class="notification_drop w-full h-full absolute top-5 ">
         <div class="flex justify-center">
             <div class="text-center bg-white w-96 shadow-md shadow-w-orange rounded-lg z-50 p-3">
                 <span class="text-red-700 font-bold">{{ Session::get('error') }}</span>
             </div>
         </div>
     </div>
 @endif

 {{-- form input errors --}}
 {{-- displays all errors that occur --}}
 @if ($errors->any())
     {!! implode(
         '',
         $errors->all('
        <div class="notification_drop w-full h-full absolute top-5 ">
              <div class="flex justify-center">
                  <div class="text-center bg-white w-96 shadow-md shadow-w-orange rounded-lg z-50 p-3">
                      <span class="text-red-700 font-bold"> :message </span>
                  </div>
              </div>
          </div>
         '),
     ) !!}
 @endif
 
