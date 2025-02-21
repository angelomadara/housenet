<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Activities') }}
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

                    <header class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Activities List') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("List of all clients of housenet.") }}
                        </p>
                    </header>

                    <div class="">



                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button data-tabs-target="#monday_activities" class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" type="button" role="tab" aria-controls="profile" aria-selected="false">Monday</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button data-tabs-target="#tuesday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab"  type="button" role="tab" aria-controls="dashboard" aria-selected="false">Tuesday</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button data-tabs-target="#wednesday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-styled-tab"  type="button" role="tab" aria-controls="settings" aria-selected="false">Wednesday</button>
                                </li>
                                <li role="presentation">
                                    <button data-tabs-target="#thursday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-styled-tab"  type="button" role="tab" aria-controls="contacts" aria-selected="false">Thursday</button>
                                </li>
                                <li role="presentation">
                                    <button data-tabs-target="#friday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-styled-tab"  type="button" role="tab" aria-controls="contacts" aria-selected="false">Friday</button>
                                </li>
                                <li role="presentation">
                                    <button data-tabs-target="#saturday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-styled-tab"  type="button" role="tab" aria-controls="contacts" aria-selected="false">Saturday</button>
                                </li>
                                <li role="presentation">
                                    <button data-tabs-target="#sunday_activities" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-styled-tab"  type="button" role="tab" aria-controls="contacts" aria-selected="false">Sunday</button>
                                </li>
                            </ul>
                        </div>
                        <div id="default-styled-tab-content">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="monday_activities" role="tabpanel" aria-labelledby="profile-tab">
                                {{-- <h4>Monday Activity</h4> --}}
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Time
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Activity
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Guide
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($monday_activities as $activity)
                                            <tr>
                                                <td>{{$activity->time}}</td>
                                                <td>{{$activity->activity}}</td>
                                                <td>{{$activity->guide}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">No activities found</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tuesday_activities" role="tabpanel" aria-labelledby="dashboard-tab">

                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="wednesday_activities" role="tabpanel" aria-labelledby="settings-tab">
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="thursday_activities" role="tabpanel" aria-labelledby="contacts-tab">
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="friday_activities" role="tabpanel" aria-labelledby="contacts-tab">
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="saturday_activities" role="tabpanel" aria-labelledby="contacts-tab">
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="sunday_activities" role="tabpanel" aria-labelledby="contacts-tab">
                                <table class="datatable w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Birthdate
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
