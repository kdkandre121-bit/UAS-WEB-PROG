import './bootstrap';
// Pastikan DOM sudah siap
document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen modal, gambar, dan caption
    const modal = document.getElementById('image-modal');
    const modalImage = document.getElementById('modal-image-content');
    const modalCaption = document.getElementById('modal-image-caption');
    
    // Fungsi untuk menampilkan modal
    window.showModal = function(imageSrc, imageTitle) {
        modalImage.src = imageSrc; // Set URL gambar
        modalImage.alt = imageTitle; // Set Alt text
        modalCaption.textContent = imageTitle; // Set keterangan
        
        modal.classList.remove('hidden'); // Tampilkan modal
        document.body.classList.add('overflow-hidden'); // Cegah scroll body
    }

    // Fungsi untuk menyembunyikan modal
    window.hideModal = function() {
        modal.classList.add('hidden'); // Sembunyikan modal
        document.body.classList.remove('overflow-hidden'); // Izinkan scroll body
    }
    
    // Sembunyikan modal ketika tombol ESC ditekan
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            window.hideModal();
        }
    });
});