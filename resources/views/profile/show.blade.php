<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-red-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(220 252 231 / var(--tw-bg-opacity));
        }
    </style>
</head>
<body>
<x-app-layout  >
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Bienvenido ')}} {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div >
        <div class="pb-8 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 space-y-6">
            <div class="bg-red-700">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
                @endif
            </div>
            
            <div class="bg-red-700">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class=" mt-10 sm:mt-0 ">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-jet-section-border />
                @endif

            </div>
           
            <div class="bg-red-700">
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class=" mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-jet-section-border />
                @endif
            </div>



            

            
            
            <div class=" mt-10 sm:mt-0 bg-red-700">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <div class="bg-red-700">
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />

                    <div class=" mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif

            </div>


        </div>
    </div>
</x-app-layout>

</body>
</html>
