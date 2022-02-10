<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            Mobile Number OTP Verification
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your Mobile Number ') }}
        </div>

     

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('otpPage') }}">
                @csrf
                <div>
                <x-label for="mobile" :value="__('Mobile')" />

                <x-input id="mobile" class="block mt-1 w-full" type="number" name="mobile" :value="old('mobile')" required autofocus />
            </div>
                <div>
                <x-label for="mobile_otp" :value="__('Mobile OTP')" />

                <x-input id="mobile_otp" class="block mt-1 w-full" type="number" name="mobile_otp" :value="old('mobile_otp')" required autofocus />
            </div>
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">Submit  </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
