// script.js
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function(event) {
        // Contoh validasi form
        const nama = document.getElementById('nama').value;
        const tanggal_lahir = document.getElementById('tanggal_lahir').value;
        const jenis_kelamin = document.getElementById('jenis_kelamin').value;
        const nama_ortu = document.getElementById('nama_ortu').value;
        const no_hp_ortu = document.getElementById('no_hp_ortu').value;
        const alamat_ortu = document.getElementById('alamat_ortu').value;
        const sekolah_asal = document.getElementById('sekolah_asal').value;
        const tahun_lulus = document.getElementById('tahun_lulus').value;

        if (nama === '' || tanggal_lahir === '' || jenis_kelamin === '' || nama_ortu === '' || no_hp_ortu === '' || alamat_ortu === '' || sekolah_asal === '' || tahun_lulus === '') {
            alert('Mohon lengkapi semua field!');
            event.preventDefault();
        }
    });
});