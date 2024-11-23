function redirectToWhatsApp(paket) {
    // Ganti dengan nomor WhatsApp yang sesuai
    const phoneNumber = '6281234567890'; 
    const message = `Saya tertarik dengan ${paket} di Zidnan Bimbel.`;

    // Redirect ke WhatsApp dengan pesan
    window.location.href = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
}


// Fungsi untuk mengambil data paket bimbel
fetch('getCourses.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('courseList').innerHTML = data;
    })
    .catch(error => console.error('Error fetching data:', error));

// Fungsi untuk mengarahkan ke WhatsApp
function redirectToWhatsApp(packageName) {
    const phoneNumber = "628123456789"; // Nomor WhatsApp admin
    const message = `Halo, saya tertarik untuk mendaftar di ${packageName}.`;
    window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
}

//pop-up konfirmasi sebelum pengguna diarahkan ke WhatsApp.
function redirectToWhatsApp(course) {
    const confirmMessage = `Anda yakin ingin mendaftar untuk ${course}?`;
    if (confirm(confirmMessage)) {
        const message = `Saya tertarik untuk mendaftar ${course}.`;
        const phoneNumber = '1234567890'; // Ganti dengan nomor WhatsApp Anda
        window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
    }
}


//fitur scroll-to-section
document.querySelectorAll('.navbar a').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector(link.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
