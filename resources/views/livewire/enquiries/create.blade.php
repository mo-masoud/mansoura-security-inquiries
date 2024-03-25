 <form wire:submit="create" id="enqForm">
     <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
         <div class="w-1/2 mb-4">
             <div class="col-span-6 sm:col-span-4">
                 <x-label for="code" value="الكود" />
                 <x-input id="code" type="number" class="mt-1 block w-full" wire:model="code" />
                 <x-input-error for="code" class="mt-2" />
             </div>
         </div>

         <div class="grid grid-cols-2 gap-6 border-t pt-4">
             <div>
                 <x-label for="car_no" value="رقم السيارة" />
                 <x-input id="car_no" type="text" class="mt-1 block w-full" wire:model="car_no" />
                 <x-input-error for="car_no" class="mt-2" />
             </div>

             <div>
                 <x-label for="chassis_no" value="رقم الشاسية" />
                 <x-input id="chassis_no" type="text" class="mt-1 block w-full" wire:model="chassis_no" />
                 <x-input-error for="chassis_no" class="mt-2" />
             </div>

             <div>
                 <x-label for="engine_no" value="رقم الماتور" />
                 <x-input id="engine_no" type="text" class="mt-1 block w-full" wire:model="engine_no" />
                 <x-input-error for="engine_no" class="mt-2" />
             </div>

             <div>
                 <x-label for="owner_name" value="اسم المالك" />
                 <x-input id="owner_name" type="text" class="mt-1 block w-full" wire:model="owner_name" />
                 <x-input-error for="owner_name" class="mt-2" />
             </div>

             <div>
                 <x-label for="owner_address" value="عنوان المالك" />
                 <x-input id="owner_address" type="text" class="mt-1 block w-full" wire:model="owner_address" />
                 <x-input-error for="owner_address" class="mt-2" />
             </div>

             <div>
                 <x-label for="owner_national_id" value="رقم بطاقة المالك" />
                 <x-input id="owner_national_id" type="text" class="mt-1 block w-full"
                     wire:model="owner_national_id" />
                 <x-input-error for="owner_national_id" class="mt-2" />
             </div>

             <div>
                 <x-label for="owner_phone_no" value="رقم المالك" />
                 <x-input id="owner_phone_no" type="text" class="mt-1 block w-full" wire:model="owner_phone_no" />
                 <x-input-error for="owner_phone_no" class="mt-2" />
             </div>

             <div>
                 <x-label for="owner_image" value="صورة المالك" />
                 <x-input id="owner_image" type="file" class="mt-1 block w-full" wire:model="owner_image" />
                 <x-input-error for="owner_image" class="mt-2" />
             </div>

             <div>
                 <x-label for="driver_name" value="اسم السائق" />
                 <x-input id="driver_name" type="text" class="mt-1 block w-full" wire:model="driver_name" />
                 <x-input-error for="driver_name" class="mt-2" />
             </div>

             <div>
                 <x-label for="driver_address" value="عنوان السائق" />
                 <x-input id="driver_address" type="text" class="mt-1 block w-full" wire:model="driver_address" />
                 <x-input-error for="driver_address" class="mt-2" />
             </div>

             <div>
                 <x-label for="driver_national_id" value="رقم بطاقة السائق" />
                 <x-input id="driver_national_id" type="text" class="mt-1 block w-full"
                     wire:model="driver_national_id" />
                 <x-input-error for="driver_national_id" class="mt-2" />
             </div>

             <div>
                 <x-label for="driver_image" value="صورة السائق" />
                 <x-input id="driver_image" type="file" class="mt-1 block w-full" wire:model="driver_image" />
                 <x-input-error for="driver_image" class="mt-2" />
             </div>

             <div>
                 <x-label for="car_type" value="نوع السيارة" />
                 <select name="car_type" id="car_type" wire:model="car_type"
                     class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                     <option value="بيجو">بيجو</option>
                     <option value="ميكروباص">ميكروباص</option>
                     <option value="تاكسي">تاكسي</option>
                     <option value="توكتوك">توكتوك</option>
                     <option value="رحلات">رحلات</option>
                 </select>
                 <x-input-error for="car_type" class="mt-2" />
             </div>

             <div>
                 <x-label for="car_brand" value="الماركة" />
                 <x-input id="car_brand" type="text" class="mt-1 block w-full" wire:model="car_brand" />
                 <x-input-error for="car_brand" class="mt-2" />
             </div>

             <div>
                 <x-label for="car_model" value="الموديل" />
                 <x-input id="car_model" type="text" class="mt-1 block w-full" wire:model="car_model" />
                 <x-input-error for="car_model" class="mt-2" />
             </div>

             <div>
                 <x-label for="line" value="خط السير" />
                 <x-input id="line" type="text" class="mt-1 block w-full" wire:model="line" />
                 <x-input-error for="line" class="mt-2" />
             </div>

             <div>
                 <x-label for="center" value="وحدة المرور" />
                 <x-input id="center" type="text" value="وحدة مرور المنصورة" readonly
                     class="mt-1 block w-full read-only:bg-slate-200" wire:model="center" />
                 <x-input-error for="center" class="mt-2" />
             </div>

             <div>
                 <x-label for="license_date" value="تاريخ انتهاء الرخصة" />
                 <x-input id="license_date" type="date" class="mt-1 block w-full" wire:model="license_date" />
                 <x-input-error for="license_date" class="mt-2" />
             </div>
         </div>
     </div>

     <div
         class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
         <x-button>
             حفظ
         </x-button>
     </div>
 </form>
