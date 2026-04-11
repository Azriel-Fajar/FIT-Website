// ===========================
// Desktop Dropdown
// ===========================
const desktopDropdownButton = document.getElementById('desktopDropdownButton');
const desktopDropdownMenu = document.getElementById('desktopDropdownMenu');
const desktopTriangle = document.getElementById('desktopTriangle');
const dropDown = document.querySelector('.group');

if (desktopDropdownButton && desktopDropdownMenu) {
    desktopDropdownButton.addEventListener('click', (e) => {
        e.stopPropagation();
        const isHidden = desktopDropdownMenu.classList.contains('hidden');
        if (isHidden) {
            desktopDropdownMenu.classList.remove('hidden');
            desktopDropdownMenu.classList.add('flex');
        } else {
            desktopDropdownMenu.classList.add('hidden');
            desktopDropdownMenu.classList.remove('flex');
        }
        desktopTriangle && desktopTriangle.classList.toggle('rotate-180');
        dropDown && dropDown.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!desktopDropdownButton.contains(e.target)) {
            desktopDropdownMenu.classList.add('hidden');
            desktopDropdownMenu.classList.remove('flex');
            desktopTriangle && desktopTriangle.classList.remove('rotate-180');
            dropDown && dropDown.classList.remove('active');
        }
    });
}

// ===========================
// Mobile Hamburger Menu
// ===========================
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');

if (hamburger && mobileMenu && overlay) {
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full');
        overlay.classList.toggle('hidden');
    });

    overlay.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        if (typeof mobileDropdownMenu !== 'undefined' && mobileDropdownMenu) {
            mobileDropdownMenu.classList.add('hidden');
            mobileDropdownMenu.classList.remove('flex');
        }
        if (typeof mobileTriangle !== 'undefined' && mobileTriangle) {
            mobileTriangle.classList.remove('rotate-180');
        }
    });
}

// ===========================
// Mobile Dropdown
// ===========================
const mobileDropdownButton = document.getElementById('mobileDropdownButton');
const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
const mobileTriangle = document.getElementById('mobileTriangle');

if (mobileDropdownButton && mobileDropdownMenu) {
    mobileDropdownButton.addEventListener('click', () => {
        const isHidden = mobileDropdownMenu.classList.contains('hidden');
        if (isHidden) {
            mobileDropdownMenu.classList.remove('hidden');
            mobileDropdownMenu.classList.add('flex');
        } else {
            mobileDropdownMenu.classList.add('hidden');
            mobileDropdownMenu.classList.remove('flex');
        }
        mobileDropdownButton.classList.toggle('text-transparent');
        mobileDropdownButton.classList.toggle('bg-clip-text');
        mobileDropdownButton.classList.toggle('bg-gradient-to-r');
        mobileDropdownButton.classList.toggle('from-pink-400');
        mobileDropdownButton.classList.toggle('via-purple-400');
        mobileDropdownButton.classList.toggle('to-blue-400');
        mobileTriangle && mobileTriangle.classList.toggle('rotate-180');
    });
}

// ===========================
// Countdown Timer
// ===========================
const countdownEl = document.getElementById('countdown');

if (countdownEl) {
    const batasWaktu = new Date("2025-08-05T00:00:00").getTime();

    function formatJam(waktu) {
        return waktu < 10 ? "0" + waktu : String(waktu);
    }

    function updateCountdown() {
        const now = new Date().getTime();
        const jarak = batasWaktu - now;

        if (jarak < 0) {
            countdownEl.innerHTML = "00 : 00 : 00 : 00";
            return;
        }

        const hari = Math.floor(jarak / (1000 * 60 * 60 * 24));
        const jam = Math.floor((jarak % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const menit = Math.floor((jarak % (1000 * 60 * 60)) / (1000 * 60));
        const detik = Math.floor((jarak % (1000 * 60)) / 1000);

        countdownEl.innerHTML = `${formatJam(hari)} : ${formatJam(jam)} : ${formatJam(menit)} : ${formatJam(detik)}`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
}
