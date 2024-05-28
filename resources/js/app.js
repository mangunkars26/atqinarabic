import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';


window.Alpine = Alpine
Alpine.start()

// resources/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    const pageTransition = document.querySelector('.page-transition');

    if (pageTransition) {
        setTimeout(() => {
            pageTransition.classList.remove('page-enter');
        }, 100);
    }
});


window.addEventListener('scroll', () => {
    let scrollButton = document.getElementById('scrollButton');
    if (window.scrollY > 100) {
        scrollButton.classList.add('block');
        scrollButton.classList.remove('hidden');
    } else {
        scrollButton.classList.add('hidden');
        scrollButton.classList.remove('block');
    }
});

// Tambahkan event listener untuk tombol scroll ke atas
document.getElementById('scrollButton').addEventListener('click', () => {
    document.getElementById('top').scrollIntoView({
        behavior: 'smooth'
    });
});
