<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Page') }}
            </h2>
            <x-primary-link :href="route('activity.create')">
                {{ __('Create') }}
            </x-primary-link>
        </div>
    </x-slot>

    <div class="">
        <div class="mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error sunt quam perferendis.
                        Dignissimos laboriosam error cum ullam accusamus repellendus iure sequi, quod cumque doloremque.
                        Magnam officia facilis itaque praesentium provident.
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
