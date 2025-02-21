<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Activity / Create') }}
            </h2>
            <x-primary-link :href="route('activity.index')">
                {{ __('Back') }}
            </x-primary-link>
        </div>
    </x-slot>

    <div class="">
        <div class="mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="">
                        <form method="POST" action="{{route('activity.store')}}" class="w-1/2">
                            @csrf

                            <div class="mb-4">
                                <x-label for="table" :value="__('Day')" />
                                <x-select-input id="table" name="table" class="mt-1 block w-full" :value="old('table')" required autofocus >
                                    <option value="activities_mondays">Monday</option>
                                    <option value="activities_tuesdays">Tuesday</option>
                                    <option value="activities_wednesdays">Wednesday</option>
                                    <option value="activities_thursdays">Thursday</option>
                                    <option value="activities_fridays">Friday</option>
                                    <option value="activities_saturdays">Saturday</option>
                                    <option value="activities_sundays">Sunday</option>
                                </x-select-input>
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>

                            <div class="mb-4">
                                <x-label for="time" :value="__('Time')" />
                                <x-text-input id="time" name="time" type="time" class="mt-1 block w-full" :value="old('time')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>
                            <div class="mb-4">
                                <x-label for="activity" :value="__('Activity')" />
                                <x-text-input id="activity" name="activity" type="text" class="mt-1 block w-full" :value="old('activity')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('activity')" />
                            </div>
                            <div class="mb-4">
                                <x-label for="guide" :value="__('Guide')" />
                                <x-text-input id="guide" name="guide" type="text" class="mt-1 block w-full" :value="old('guide')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('guide')" />
                            </div>

                            <div class="mt-6">
                                <x-primary-button type="submit">
                                    {{ __('Create') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
