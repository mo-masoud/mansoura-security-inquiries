 @props(['number' => 0])

 <div class="border-2 border-blue-500 rounded-lg">
     <div class="flex items-center gap-x-2 bg-blue-50 rounded-t-lg p-4">
         <span class="flex items-center justify-center rounded-xl bg-blue-500 text-white p-2">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
             </svg>

         </span>
         <span class="font-semibold">اجمالي عدد الإستعلامات:</span>
         <span>{{ $number }}</span>
     </div>

     <div class="flex items-center justify-between gap-x-2 p-4">
         <a href="{{ route('enquiries.index') }}"
             class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
             عرض
         </a>

         <a href="{{ route('enquiries.create') }}"
             class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
             إضافة
         </a>
     </div>
 </div>
