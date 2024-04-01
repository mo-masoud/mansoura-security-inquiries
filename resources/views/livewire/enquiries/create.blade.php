 <form wire:submit.prevent="create(Object.fromEntries(new FormData($event.target)))" id="enqForm">
     <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

         <div class="grid grid-cols-2 gap-6">
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
                 <div class="flex items-center gap-x-2 mt-1 w-full">
                     <x-button type="button" id="start-owner-camera">افتح الكاميرا</x-button>
                     <x-button type="button" id="owner-capture" class="hidden">اخذ صورة</x-button>
                 </div>
                 <div id="onwer-image-display" class="mt-2">
                     @if ($owner_image)
                         <img src="{{ $owner_image }}" width="320" height="240" />
                     @endif
                 </div>
                 <video id="owner-video" width="320" height="240" autoplay hidden></video>
                 <canvas id="owner-canvas" width="320" height="240" hidden></canvas>
                 <x-input id="owner_image" type="hidden" name="owner_image" value="{{ $owner_image }}" />
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
                 <div class="flex items-center gap-x-2 mt-1 w-full">
                     <x-button type="button" id="start-driver-camera">افتح الكاميرا</x-button>
                     <x-button type="button" id="driver-capture" class="hidden">اخذ صورة</x-button>
                 </div>
                 <div id="driver-image-display" class="mt-2">
                     @if ($driver_image)
                         <img src="{{ $driver_image }}" width="320" height="240" />
                     @endif
                 </div>
                 <video id="driver-video" width="320" height="240" autoplay hidden></video>
                 <canvas id="driver-canvas" width="320" height="240" hidden></canvas>
                 <x-input id="driver_image" type="hidden" name="driver_image" value="{{ $driver_image }}" />
                 <x-input-error for="driver_image" class="mt-2" />
             </div>

             <div>
                 <x-label for="car_type" value="نوع السيارة" />
                 <select name="car_type" id="car_type" wire:model="car_type"
                     class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                     <option value="ملاكي">ملاكي</option>
                     <option value="نقل">نقل</option>
                     <option value="ميكروباص">ميكروباص</option>
                     <option value="دراجة نارية">دراجة نارية</option>
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


 <script>
     let onwerVideoStream = null;
     document.getElementById('start-owner-camera').addEventListener('click', async () => {

         const ownerCaptureButton = document.getElementById('owner-capture');
         ownerCaptureButton.classList.remove('hidden');

         const display = document.getElementById('onwer-image-display');
         display.innerHTML = '';

         const video = document.getElementById('owner-video');
         try {
             onwerVideoStream = await navigator.mediaDevices.getUserMedia({
                 video: true
             });
             video.srcObject = onwerVideoStream;
             video.style.display = 'block'; // Show the video element
         } catch (error) {
             console.error('Error accessing the camera', error);
         }
     });

     document.getElementById('owner-capture').addEventListener('click', () => {
         const canvas = document.getElementById('owner-canvas');
         const video = document.getElementById('owner-video');
         const context = canvas.getContext('2d');
         context.drawImage(video, 0, 0, canvas.width, canvas.height);

         const imageDataURL = canvas.toDataURL('image/jpeg');

         document.getElementById('owner_image').value = imageDataURL;

         video.style.display = 'none';

         if (onwerVideoStream) {
             onwerVideoStream.getTracks().forEach(track => track.stop());
         }

         const img = document.createElement('img');
         img.src = imageDataURL;
         img.width = 320;
         img.height = 240;

         const display = document.getElementById('onwer-image-display');
         display.innerHTML = '';
         display.appendChild(img);

         const ownerCaptureButton = document.getElementById('owner-capture');
         ownerCaptureButton.classList.add('hidden');
     });

     let driverVideoStream = null;
     document.getElementById('start-driver-camera').addEventListener('click', async () => {

         const driverCaptureButton = document.getElementById('driver-capture');
         driverCaptureButton.classList.remove('hidden');

         const display = document.getElementById('driver-image-display');
         display.innerHTML = '';

         const video = document.getElementById('driver-video');
         try {
             driverVideoStream = await navigator.mediaDevices.getUserMedia({
                 video: true
             });
             video.srcObject = driverVideoStream;
             video.style.display = 'block'; // Show the video element
         } catch (error) {
             console.error('Error accessing the camera', error);
         }
     });

     document.getElementById('driver-capture').addEventListener('click', () => {
         const canvas = document.getElementById('driver-canvas');
         const video = document.getElementById('driver-video');
         const context = canvas.getContext('2d');
         context.drawImage(video, 0, 0, canvas.width, canvas.height);

         const imageDataURL = canvas.toDataURL('image/jpeg');

         document.getElementById('driver_image').value = imageDataURL;

         video.style.display = 'none';

         if (driverVideoStream) {
             driverVideoStream.getTracks().forEach(track => track.stop());
         }

         const img = document.createElement('img');
         img.src = imageDataURL;
         img.width = 320;
         img.height = 240;

         const display = document.getElementById('driver-image-display');
         display.innerHTML = '';
         display.appendChild(img);

         const driverCaptureButton = document.getElementById('driver-capture');
         driverCaptureButton.classList.add('hidden');
     });
 </script>
