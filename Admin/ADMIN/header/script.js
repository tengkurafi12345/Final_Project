// Menampilkan dan menyembunyikan menu
document.getElementById('menu-btn').addEventListener('click', () => {
    document.querySelector('.side-bar').classList.toggle('active');
});
document.getElementById('close-btn').addEventListener('click', () => {
    document.querySelector('.side-bar').classList.remove('active');
});

// Tombol toggle mode (dark/light mode)
document.getElementById('toggle-btn').addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

// Tombol search
document.getElementById('search-btn').addEventListener('click', () => {
    document.querySelector('.search-form').classList.toggle('active');
});
