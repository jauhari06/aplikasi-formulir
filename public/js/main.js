function tambahBaris() {
    // Cari tombol yang diklik dan elemen form-card terdekat
    const button = event.target;
    const formCard = button.closest(".form-card");
    const tableBody = formCard.querySelector("tbody");
    const tableRow = tableBody.querySelector("tr");

    // Duplikasi baris terakhir di tabel
    const newRow = tableRow.cloneNode(true);

    // Bersihkan nilai input pada baris baru
    const inputs = newRow.querySelectorAll("input");
    inputs.forEach((input) => (input.value = ""));

    // Tambahkan baris baru ke dalam tbody
    tableBody.appendChild(newRow);
}

function hapusBaris() {
    // Cari elemen form-card terdekat
    const formCard = document.querySelector(".form-card");
    const tableBody = formCard.querySelector("tbody");
    const rows = tableBody.querySelectorAll("tr");

    // Hapus baris terakhir jika lebih dari satu baris
    if (rows.length > 1) {
        rows[rows.length - 1].remove();
    }
}
