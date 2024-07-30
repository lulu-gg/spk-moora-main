<div class="mt-6 mx-6">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-semibold leading-tight">Data Kriteria</h2>
                <x-button-link href="{{ route('kriteria.create') }}">Tambah Kriteria</x-button-link>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    No
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Kode Kriteria
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Nama Kriteria
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Bobot Kriteria
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Jenis Kriteria
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Sub Kriteria
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-left text-xs font-semibold uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kriterias as $index => $krit)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $krit->kode }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $krit->name }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $krit->bobot }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $krit->type ? 'Benefit' : 'Cost' }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <x-button-link href="{{ route('subkriteria.create', $krit->id) }}">Tambah</x-button-link>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center space-x-4">
                                        <a href="{{ route('kriteria.edit', $krit->id) }}" class="text-indigo-600 hover:text-indigo-900">Ubah</a>
                                        <button wire:click="delete({{ $krit->id }})" class="text-red-600 hover:text-red-900">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center" colspan="7">
                                    Data kriteria masih kosong.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
