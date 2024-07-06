//----------- Popup Kode Group ------------//
let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}


//--------------------------------------- Js Code Group --------------------------- //

// Ambil input kode group
var groupInput = document.getElementById("kode_grup");

// Tambahkan event listener untuk keypress
groupInput.addEventListener("keypress", function (event) {
    // Jika tombol yang ditekan adalah "Enter"
    if (event.key === "Enter") {
        // Redirect ke halaman baru hanya jika input tidak kosong
        if (groupInput.value.trim() !== "") {
            redirectToNewPage();
        }
    }
});

// Fungsi untuk mengarahkan pengguna ke halaman baru
function redirectToNewPage() {
    var groupCode = groupInput.value.trim(); // Ambil nilai input dan hapus spasi di awal dan akhir
    // Jika input tidak kosong
    if (groupCode !== "") {
        // Bangun URL halaman baru
        var newPageUrl = "dashboard_hackathon-1st-day1";
        window.location.href = newPageUrl; // Arahkan ke halaman baru
    }
}