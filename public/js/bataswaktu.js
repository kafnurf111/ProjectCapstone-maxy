function countdownTimer(targetDate) {
    const countdownElement = document.getElementById('countdown');
    const target = new Date(targetDate).getTime();
    const interval = setInterval(() => {
        const now = new Date().getTime();
        const distance = target - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (distance >= 0) {
            countdownElement.innerHTML = `${days}h : ${hours}j : ${minutes}m : ${seconds}d`;
        } else {
            clearInterval(interval);
            countdownElement.innerHTML = "WAKTU HABIS";
        }
    }, 1000);
}

document.addEventListener('DOMContentLoaded', () => {
    countdownTimer("2024-07-06T00:00:00"); // Pastikan format tanggal sudah benar
});