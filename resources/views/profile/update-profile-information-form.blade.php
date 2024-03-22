<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        المعلومات الشخصية
    </x-slot>

    <x-slot name="description">
        استخدم هذه الصفحة لتحديث معلوماتك الشخصية واسم المستخدم.
    </x-slot>

    <x-slot name="form">


        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="الاسم" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="username" value="اسم المستخدم" />
            <x-input id="username" type="text" class="mt-1 block w-full" wire:model="state.username" required
                autocomplete="username" />
            <x-input-error for="username" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            تم الحفظ.
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            حفظ
        </x-button>
    </x-slot>
</x-form-section>
