<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Card Pengertian PIP --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Pengertian PIP</h3>
                    <p>
                        Program Indonesia Pintar (PIP) adalah program pemberian bantuan tunai pendidikan kepada anak usia sekolah (usia 6-21 tahun) yang berasal dari keluarga miskin, rentan miskin, atau dengan pertimbangan khusus seperti yatim piatu, penyandang disabilitas, korban musibah, dan lainnya. PIP bertujuan untuk mencegah peserta didik dari kemungkinan putus sekolah, serta diharapkan dapat menarik siswa putus sekolah agar kembali melanjutkan pendidikannya.
                    </p>
                </div>

                {{-- Card Sistem Pendukung Keputusan --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">SISTEM PENDUKUNG KEPUTUSAN PENENTUAN PENERIMA BANTUAN BEASISWA PIP MENGGUNAKAN METODE MOORA</h3>
                    <p>
                        Sistem Pendukung Keputusan ini dirancang untuk menentukan penerima bantuan beasiswa PIP di MI AL-ISLAM Jetis menggunakan metode MOORA (Multi-Objective Optimization on the basis of Ratio Analysis). Metode MOORA membantu dalam memberikan rekomendasi yang lebih objektif berdasarkan beberapa kriteria yang telah ditentukan, sehingga proses penentuan penerima bantuan beasiswa menjadi lebih transparan dan adil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
