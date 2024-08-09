// script.js

// Example of smooth scrolling (optional, modern browsers support smooth scrolling in CSS)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Produk
function showDeskripsi() {
    document.querySelector('.deskripsi').style.display = 'grid';
    document.querySelector('.ulasan').style.display = 'none';
    document.querySelector('.tab-title-deskripsi').style.color= 'black';
    document.querySelector('.tab-title-ulasan').style.color= 'grey';
}

function showUlasan() {
    document.querySelector('.deskripsi').style.display = 'none','grid';
    document.querySelector('.ulasan').style.display = 'block';
    document.querySelector('.tab-title-deskripsi').style.color= 'grey';
    document.querySelector('.tab-title-ulasan').style.color= 'black';
}

// Ambil elemen gambar utama dan gambar detail
const mainProductImage = document.getElementById('mainProductImage');
const detailImages = document.querySelectorAll('.detail a img');

// Tambahkan event listener untuk setiap gambar detail
detailImages.forEach(img => {
    img.addEventListener('click', function() {
        // Ubah src gambar utama menjadi src gambar yang diklik
        mainProductImage.src = this.src;
    });
});

