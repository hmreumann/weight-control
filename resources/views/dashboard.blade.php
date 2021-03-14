<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    New Weight Button
                </div>
                <div class="p-6">

                    <table class="border-collapse border border-gray-800 text-sm">
                        <thead class="text-center">
                            <tr>
                                <th class="border border-gray-600 ...">Date</th>
                                <th class="border border-gray-600 p-2">Weight (Kg)</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="border border-gray-600 p-2">1/3/2020</td>
                                <td class="border border-gray-600 p-2">83,8</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-600 p-2">1/3/2020</td>
                                <td class="border border-gray-600 p-2">83,8</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-600 p-2">1/3/2020</td>
                                <td class="border border-gray-600 p-2">83,8</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>