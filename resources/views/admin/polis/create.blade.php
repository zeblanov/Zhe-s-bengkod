<x-layouts.app title="Tambah Poli">

    {{-- Header --}}
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('polis.index') }}" class="inline-flex items-center justify-center w-9 h-9 
                  rounded-lg bg-slate-100 text-slate-500 
                  hover:bg-slate-200 transition">
            <i class="fas fa-arrow-left text-sm"></i>
        </a>

        <h2 class="text-2xl font-bold text-slate-800">
            Tambah Poli
        </h2>
    </div>

    {{-- Card --}}
    <div class="card bg-base-100 shadow-md rounded-2xl border border-slate-200">

        <div class="card-body p-8">

            <form action="{{ route('polis.store') }}" method="POST">
                @csrf

                {{-- Nama Poli --}}
                <<input type="text" name="nama_poli" 
    value="{{ old('nama_poli', $poli->nama_poli ?? '') }}"
    class="w-full px-4 py-2 rounded-lg border-2 focus:border-primary focus:outline-none 
    {{ $errors->has('nama_poli') ? 'border-red-500' : 'border-slate-300' }}"
    required>

                {{-- Keterangan --}}
                <textarea name="keterangan" rows="4" 
    class="w-full px-4 py-2 rounded-lg border-2 focus:border-primary focus:outline-none 
    {{ $errors->has('keterangan') ? 'border-red-500' : 'border-slate-300' }}"
    required>{{ old('keterangan', $poli->keterangan ?? '') }}</textarea>

                {{-- Button --}}
                <div class="flex gap-3">
                    <button type="submit"
                        class="px-6 py-2.5 rounded-lg bg-[#2d4499] hover:bg-[#1e2d6b] 
                               text-white font-semibold text-sm transition">
                        <i class="fas fa-save mr-1"></i> Simpan
                    </button>

                    <a href="{{ route('polis.index') }}"
                        class="px-6 py-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 
                               text-slate-600 font-semibold text-sm transition">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</x-layouts.app>