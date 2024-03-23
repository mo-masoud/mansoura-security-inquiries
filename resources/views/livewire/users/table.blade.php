<div>

    @if ($users->isEmpty())
        <div class="p-6 text-center text-gray-500">
            لا يوجد موظفين
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
                    @foreach ($users as $row)
                        <tr>
                            @foreach ($columns as $column)
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if ($column['field'] === 'actions')
                                        <div class="flex items-start gap-x-4">
                                            @foreach ($column['actions'] as $action)
                                                @if ($action === 'edit')
                                                    <a href="{{ route('users.edit', $row->id) }}"
                                                        class="text-green-600 hover:text-green-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>

                                                    </a>
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
                {{ $users->links() }}
            </div>
        </div>

        <x-dialog-modal wire:model.live="confirmingDeletion">
            <x-slot name="title">
                حذف الموظف
            </x-slot>

            <x-slot name="content">
                <div class="py-8 text-gray-700">
                    هل أنت متأكد من حذف الموظف؟
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
