<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="AuthModalPopup" tabindex="-1" aria-labelledby="AuthModalPopupTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                {{-- form title --}}
                <h5 class="text-xl font-semibold leading-normal text-gray-800" id="AuthModalPopupScrollableLabel">
                    {{-- dynamic text --}}
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative">
                {{-- Login form --}}
                <div id="login-form">
                   @include('components.forms.Auth.login')
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <span class="font-semibold">Dont Have an account ? <a href="#" id="no-account-btn"
                                class="text-w-darkbrown">SignUp</a></span>
                    </div>
                </div>
                {{-- registration form --}}
                <div id="signup-form" class="hidden">
                    @include('components.forms.Auth.registration')
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <span class="font-semibold">Already Have an account ? <a href="#" id="have-account-btn"
                                class="text-w-darkbrown">Login</a></span>
                    </div>
                </div>
                {{-- forgot pwd form --}}
                <div id="forgotpwd-form">
                    @include('components.forms.Auth.forgotpwd')
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <span class="font-semibold">Already Have an account ? <a href="#"
                                id="have-account-btn2" class="text-w-darkbrown">Login</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
