// Validasi JavaScript untuk semua field dalam form
$(document).ready(function () {
    $(".form-card").on("submit", function (event) {
        let isValid = true;

        // Validasi untuk Program Studi
        if ($("#Programstudi").val().trim() === "") {
            isValid = false;
            alert("Program Studi harus diisi.");
        }

        // Validasi untuk Jenjang
        if ($("#Jenjang").val() === null || $("#Jenjang").val().trim() === "") {
            isValid = false;
            alert("Jenjang harus dipilih.");
        }

        // Validasi untuk Nama Lengkap
        if ($("#fname").val().trim() === "") {
            isValid = false;
            alert("Nama Lengkap harus diisi.");
        }

        // Validasi untuk Tempat Tanggal Lahir
        if ($("#tempatTanggalLahir").val().trim() === "") {
            isValid = false;
            alert("Tempat Tanggal Lahir harus diisi.");
        }

        // Validasi untuk Jenis Kelamin
        if ($("#gender").val() === null || $("#gender").val().trim() === "") {
            isValid = false;
            alert("Jenis Kelamin harus dipilih.");
        }

        // Validasi untuk Status
        if ($("#status").val() === null || $("#status").val().trim() === "") {
            isValid = false;
            alert("Status harus dipilih.");
        }

        // Validasi untuk Kebangsaan
        if ($("#Kebangsaan").val().trim() === "") {
            isValid = false;
            alert("Kebangsaan harus diisi.");
        }

        // Validasi untuk Alamat Rumah
        if ($("#AlamatRumah").val().trim() === "") {
            isValid = false;
            alert("Alamat Rumah harus diisi.");
        }

        // Validasi untuk Kode Pos
        if ($("#kodePos").val().trim() === "") {
            isValid = false;
            alert("Kode Pos harus diisi.");
        }

        // Validasi untuk No. Telepon/HP
        if ($("#HP").val().trim() === "") {
            isValid = false;
            alert("No. Telepon/HP harus diisi.");
        }

        // Validasi untuk Email
        const email = $("#email").val().trim();
        if (email === "" || !validateEmail(email)) {
            isValid = false;
            alert("Email harus diisi dengan format yang benar.");
        }

        // Validasi untuk Pendidikan Terakhir
        if ($("#PendidikanTerakhir").val().trim() === "") {
            isValid = false;
            alert("Pendidikan Terakhir harus diisi.");
        }

        // Validasi untuk Nama Perguruan Tinggi/Sekolah
        if ($("#Sekolah").val().trim() === "") {
            isValid = false;
            alert("Nama Perguruan Tinggi/Sekolah harus diisi.");
        }

        // Validasi untuk Program Studi pada Pendidikan
        if ($("#ProgramStudi").val().trim() === "") {
            isValid = false;
            alert("Program Studi pada Pendidikan harus diisi.");
        }

        // Validasi untuk Tahun Lulus
        if ($("#Tahunlulus").val().trim() === "") {
            isValid = false;
            alert("Tahun Lulus harus diisi.");
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    // Fungsi untuk validasi email
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
