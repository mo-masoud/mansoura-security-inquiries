 <form wire:submit="create">
     <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
         <div class="grid grid-cols-6 gap-6">
             <div class="col-span-6 sm:col-span-4">
                 <x-label for="name" value="الاسم" />
                 <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
                 <x-input-error for="name" class="mt-2" />
             </div>

             <div class="col-span-6 sm:col-span-4">
                 <x-label for="username" value="اسم المستخدم" />
                 <x-input id="username" type="text" class="mt-1 block w-full" wire:model="username" />
                 <x-input-error for="username" class="mt-2" />
             </div>

             <div class="col-span-6 sm:col-span-4">
                 <x-label for="password" value="كلمة المرور" />
                 <x-input id="password" type="password" class="mt-1 block w-full" wire:model="password"
                     autocomplete="new-password" />
                 <x-input-error for="password" class="mt-2" />
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
