<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients / Create') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <header class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Client Information') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Create client information form.") }}
                        </p>
                    </header>

                    <form action="" method="POST" class="w-1/2">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="middle_name" :value="__('Middle Name')" />
                            <x-text-input id="middle_name" name="middle_name" type="text" class="mt-1 block w-full" :value="old('middle_name')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('middle_name')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                        </div class="mb-4">

                        <div>
                            <x-input-label for="birth_date" :value="__('Birth Date')" />
                            <x-text-input id="birth_date" name="birth_date" type="date" class="mt-1 block w-full" :value="old('birth_date')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('birth_date')" />
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
