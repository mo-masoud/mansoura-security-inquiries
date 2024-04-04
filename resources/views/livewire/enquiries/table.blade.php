<div>

    @if ($enquiries->isEmpty())
        <div class="p-6 text-center text-gray-500">
            لا يوجد استعلامات
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 shadow-sm border-b border-gray-200 sm:rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        @foreach ($columns as $column)
                            <th scope="col"
                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ $column['name'] }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($enquiries as $row)
                        <tr>
                            @foreach ($columns as $column)
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if ($column['field'] === 'actions')
                                        <div class="flex items-start gap-x-4">
                                            @foreach ($column['actions'] as $action)
                                                @if ($action === 'edit')
                                                @elseif ($action === 'delete')
                                                    <button wire:click="confirmDeletion({{ $row->id }})"
                                                        class="text-red-600 hover:text-red-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>

                                                    </button>
                                                @elseif($action === 'print')
                                                    <a href="{{ route('enquiries.print', $row->id) }}" target="_blank"
                                                        class="text-blue-600 hover:text-blue-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                                        </svg>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    @else
                                        {{ @$row->{$column['field']} }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-4">
                {{ $enquiries->links() }}
            </div>
        </div>

        <x-dialog-modal wire:model.live="confirmingDeletion">
            <x-slot name="title">
                حذف الإستعلام
            </x-slot>

            <x-slot name="content">
                <div class="py-8 text-gray-700">
                    هل أنت متأكد من حذف الإستعلام؟
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingDeletion')" wire:loading.attr="disabled">
                    إلغاء
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="delete" wire:loading.attr="disabled">
                    حذف
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    @endif


</div>
