<!-- FAQ Sections -->
<section>
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <div class="mx-auto px-10 mt-7 mb-7 text-center">
            <h2 class="text-3xl md:text-4xl mb-4 text-green-800 font-bold">Pertanyaan Sering Ditanyakan</h2>
        </div>

        <!-- FAQ item 1 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Saya belum pernah belajar bahasa Arab sama sekali. Apakah bisa ikut?                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Sangat bisa. Kelas ini didesain untuk 0 bahasa Arab.</p>
            </div>
        </div>

        <!-- FAQ item 2 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Apakah ikut kelas ini dijamin bisa ngomong dan baca kitab Arab?
                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Untuk bisa mencapai itu, butuh usaha dan waktu. Lebih jelas,  <span class="font-extrabold">silakan lihat alur belajar Atqin <a href="/testimoni">disini</a>.</span></p>
            </div>
        </div>

        <!-- FAQ item 3 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Apakah kelas ini ada yang offline?</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Tidak, untuk saat ini hanya ada kelas online.</p>
            </div>
        </div>

        <!-- FAQ item 4 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Apakah peserta bisa pilih waktu?
                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Kelas gratis dan reguler waktunya ditentukan. Kelas  privat bebas pilih waktu dan jadwal.</p>
            </div>
        </div>

        <!-- FAQ item 5 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Apakah ada bahan ajar yang disediakan?
                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Ya, setiap peserta akan mendapatkan bahan ajar berupa modul dan akses ke materi online.</p>
            </div>
        </div>

        <!-- FAQ item 6 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Berapa biaya untuk mengikuti kelas ini?
                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Kelas gratis tidak dikenakan biaya. Untuk kelas reguler dan privat, biaya akan diinformasikan pada saat pendaftaran.</p>
            </div>
        </div>

        <!-- FAQ item 7 -->
        <div x-data="{ open: false }" class="border rounded-lg mb-4">
            <button @click="open = !open"
                class="faq-button w-full bg-white text-left p-4 hover:bg-green-600 hover:text-white focus:outline-none relative overflow-hidden transition duration-300 ease-in-out"
                :class="{ 'bg-green-700 text-white': open, 'bg-white text-gray-800': !open }">
                <i :class="{ 'fa-chevron-up': open, 'fa-chevron-down': !open }" class="fas transition-transform duration-300 ease-in-out mr-2"></i>
                <span>Apakah di kursus ini dapat sertifikat?
                </span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-4"
                class="p-4">
                <p class="text-gray-700">Ya, setiap peserta yang telah selesai kursus akan dapat sertifikat.</p>
            </div>
        </div>
    </div>
</section>