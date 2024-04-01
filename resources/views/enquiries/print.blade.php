<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css'])

</head>

<body class="font-sans antialiased" onload="window.print()">

    <div class="min-h-screen container mx-auto px-20 py-12">
        <h1 class="text-center text-2xl font-bold">الاستمارة رقم: {{ $enquiry->id }}</h1>
        <div class="grid grid-cols-2 gap-4 mt-8">

            @if ($enquiry->owner_image)
                <div>
                    <x-label value="صورة مالك السيارة" />
                    <span class="mt-1 block w-full rounded-md">
                        <img src="{{ Storage::url($enquiry->owner_image) }}" class="object-contain w-full h-40">
                    </span>
                </div>
            @endif

            @if ($enquiry->driver_image)
                <div>
                    <x-label value="صورة سائق السيارة" />
                    <span class="mt-1 block w-full rounded-md">
                        <img src="{{ Storage::url($enquiry->driver_image) }}" class="object-contain w-full h-40">
                    </span>
                </div>
            @endif

            <div>
                <x-label value="رقم السيارة" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->car_no }}
                </span>
            </div>

            <div>
                <x-label value="رقم الشاسية" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->chassis_no }}
                </span>
            </div>

            <div>
                <x-label value="رقم الماتور" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->engine_no }}
                </span>
            </div>

            <div>
                <x-label for="owner_name" value="اسم المالك" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->owner_name }}
                </span>
            </div>

            <div>
                <x-label for="owner_address" value="عنوان المالك" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->owner_address }}
                </span>
            </div>

            <div>
                <x-label for="owner_national_id" value="رقم بطاقة المالك" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->owner_national_id }}
                </span>
            </div>

            <div>
                <x-label for="owner_phone_no" value="رقم المالك" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->owner_phone_no }}
                </span>
            </div>

            <div>
                <x-label for="driver_name" value="اسم السائق" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->driver_name }}
                </span>
            </div>

            <div>
                <x-label for="driver_address" value="عنوان السائق" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->driver_address }}
                </span>
            </div>

            <div>
                <x-label for="driver_national_id" value="رقم بطاقة السائق" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->driver_national_id }}
                </span>
            </div>

            <div>
                <x-label for="car_type" value="نوع السيارة" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->car_type }}
                </span>
            </div>

            <div>
                <x-label for="car_brand" value="الماركة" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->car_brand }}
                </span>
            </div>

            <div>
                <x-label for="car_model" value="الموديل" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->car_model }}
                </span>
            </div>

            <div>
                <x-label for="line" value="خط السير" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->line ?? '-' }}
                </span>
            </div>

            <div>
                <x-label for="license_date" value="تاريخ انتهاء الرخصة" />

                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->license_date }}
                </span>
            </div>

            <div>
                <x-label value="تاريخ صرف الكود" />
                <span class="mt-1 block w-full border rounded-md p-0.5 bg-gray-100 text-lg">
                    {{ $enquiry->created_at }}
                </span>
            </div>

        </div>
    </div>
</body>

</html>
