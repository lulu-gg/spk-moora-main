<div class="mt-6 mx-6">
    <x-jet-form-section submit="update">
        <x-slot name="title">
            Ubah Alternatif
        </x-slot>

        <x-slot name="description">
            Ubah detail data alternatif.
        </x-slot>

        <x-slot name="form">
            {{-- input kode --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="kode" value="Kode Alternatif" />
                <x-jet-input id="kode" wire:model="alternatif.kode" type="text" class="mt-1 block w-full" autofocus />
                <x-jet-input-error for="kode" class="mt-2" />
            </div>
            {{-- input nama alternatif --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="name" value="Nama Alternatif" />
                <x-jet-input id="name" wire:model="alternatif.name" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            {{-- input kelas --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="kelas" value="Kelas" />
                <x-jet-input id="kelas" wire:model="alternatif.kelas" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="kelas" class="mt-2" />
            </div>
            {{-- input kota --}}
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="kota" value="Kota" />
                <x-jet-input id="kota" wire:model="alternatif.kota" type="text" class="mt-1 block w-full" />
                <x-jet-input-error for="kota" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Tersimpan.
            </x-jet-action-message>

            <x-jet-button>
                Simpan
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>
