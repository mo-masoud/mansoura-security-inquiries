<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            الرئيسية
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        مرحبا بك في لوحة التحكم
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8 mt-4">
                        <x-users-count :users="$users" />

                        <x-officers-count :officers="$officers" />

                        <x-total-enq-count :number="$enquiries" />

                        <x-today-enq-count :number="$todayEnquiries" />
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
