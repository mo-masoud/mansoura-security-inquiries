<div>
    <div class="flex items-center justify-between border-b pb-2">
        <div class="flex items-center gap-x-2 text-xl">
            <span class="flex items-center justify-center rounded-xl bg-teal-500 text-white p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </span>
            <span>بحث الإستمارات</span>
        </div>

        <button wire:click="resetSearch" class="px-4 py-2 bg-rose-500 text-white rounded-md">حذف البحث</button>
    </div>

    <div class="mt-4">

        <div class="flex items-end mt-4">
            <div class="w-1/2">
                <x-label for="code" value="الكود" />
                <x-input id="code" type="number" class="mt-1 block w-full" wire:model="code" />
            </div>
            <button wire:click="search" class="px-4 py-2 bg-teal-500 text-white rounded-md mr-4">بحث</button>
        </div>

        <div class="mt-4 border-t pt-4">
            @if ($enquiry)
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <x-label value="صورة مالك السيارة" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm">
                            <img src="{{ Storage::url($enquiry->owner_image) }}" class="object-contain w-full h-80">
                        </span>
                    </div>

                    <div>
                        <x-label value="صورة سائق السيارة" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm">
                            <img src="{{ Storage::url($enquiry->driver_image) }}" class="object-contain w-full h-80">
                        </span>
                    </div>

                    <div>
                        <x-label value="الكود" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->code }}
                        </span>
                    </div>

                    <div>
                        <x-label value="رقم السيارة" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->car_no }}
                        </span>
                    </div>

                    <div>
                        <x-label value="رقم الشاسية" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->chassis_no }}
                        </span>
                    </div>

                    <div>
                        <x-label value="رقم الماتور" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->engine_no }}
                        </span>
                    </div>

                    <div>
                        <x-label for="owner_name" value="اسم المالك" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->owner_name }}
                        </span>
                    </div>

                    <div>
                        <x-label for="owner_address" value="عنوان المالك" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->owner_address }}
                        </span>
                    </div>

                    <div>
                        <x-label for="owner_national_id" value="رقم بطاقة المالك" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->owner_national_id }}
                        </span>
                    </div>

                    <div>
                        <x-label for="owner_phone_no" value="رقم المالك" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->owner_phone_no }}
                        </span>
                    </div>

                    <div>
                        <x-label for="driver_name" value="اسم السائق" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->driver_name }}
                        </span>
                    </div>

                    <div>
                        <x-label for="driver_address" value="عنوان السائق" />
                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->driver_address }}
                        </span>
                    </div>

                    <div>
                        <x-label for="driver_national_id" value="رقم بطاقة السائق" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->driver_national_id }}
                        </span>
                    </div>

                    <div>
                        <x-label for="car_type" value="نوع السيارة" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->car_type }}
                        </span>
                    </div>

                    <div>
                        <x-label for="car_brand" value="الماركة" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->car_brand }}
                        </span>
                    </div>

                    <div>
                        <x-label for="car_model" value="الموديل" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->car_model }}
                        </span>
                    </div>

                    <div>
                        <x-label for="line" value="خط السير" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->line }}
                        </span>
                    </div>

                    <div>
                        <x-label for="license_date" value="تاريخ انتهاء الرخصة" />

                        <span class="mt-1 block w-full border rounded-md shadow-sm p-2 bg-gray-100 text-lg">
                            {{ $enquiry->license_date }}
                        </span>
                    </div>

                </div>
            @endif
        </div>
    </div>
</div>
