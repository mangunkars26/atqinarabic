

<!-- Modal -->
<div id="modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 transition-opacity"></div>
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-md mx-auto">
            <div class="p-8">
                <!-- Konten modal -->
                <h2 class="text-lg font-semibold mb-4">Add Category</h2>
                <!-- Form untuk menambahkan kategori -->
                <form action="{{ url('categories') }}" method="post">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            @error('name') border-red-500 @enderror oninput="updateSlug()">
                    </div>
                    @error('name')
                        <div class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-4">
                        <label for="slug" class="block text-sm font-medium text-gray-700">Nama Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('name') }}"
                            class="mt-1 p-2 block w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500
                        @error('slug') border-red-500 @enderror">
                    </div>
                    @error('slug')
                        <div class="mt-1 text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    {{-- <!-- Tombol untuk menutup modal -->
                    <div id="errorContainer" class="hidden text-red-500"></div> --}}

                    <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Save</button>
                        <button id="closeModalButton" type="button"
                            class="ml-2 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk menangani tampilan modal -->
<script>
    // Ambil tombol-tombol dan modal
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('modal');

    // Tambahkan event listener untuk tombol "Add Category"
    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden'); // Tampilkan modal
    });

    // Tambahkan event listener untuk tombol "Close"
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden'); // Sembunyikan modal
    });

    function updateSlug() {
        const nameInput = document.getElementById('name');
        const slugInput = document.getElementById('slug');

        // Mengambil nilai dari input kategori
        let name = nameInput.value.trim().toLowerCase();

        // Menghapus spasi dengan tanda hubung
        name = name.replace(/\s+/g, '-');

        // Mengisi nilai input slug dengan nilai dari input kategori yang telah diubah
        slugInput.value = name;
    }
</script>
