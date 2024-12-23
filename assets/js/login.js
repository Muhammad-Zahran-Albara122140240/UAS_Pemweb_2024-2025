document.addEventListener("DOMContentLoaded", function() {
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const loginForm = document.getElementById("loginForm");

    // Event listeners untuk validasi input
    username.addEventListener("keyup", validateUsername);
    password.addEventListener("keyup", validatePassword);
    loginForm.addEventListener("submit", finalValidation);

    // Fungsi validasi untuk username
    function validateUsername() {
        const feedback = document.getElementById("usernameFeedback");

        // Cek apakah username tidak kosong
        if (username.value.trim() !== "") {
            feedback.textContent = "Username valid";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Username tidak boleh kosong";
            feedback.style.color = "red";
            return false;
        }
    }

    // Fungsi validasi untuk password
    function validatePassword() {
        const feedback = document.getElementById("passwordFeedback");

        // Cek apakah password tidak kosong (minimal 6 karakter)
        if (password.value.trim() !== "" && password.value.length >= 6) {
            feedback.textContent = "Password valid";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Password harus minimal 6 karakter";
            feedback.style.color = "red";
            return false;
        }
    }

    // Fungsi untuk validasi final saat submit form
    function finalValidation(event) {
        const isUsernameValid = validateUsername();
        const isPasswordValid = validatePassword();

        if (isUsernameValid && isPasswordValid) {
            alert("Login berhasil!"); // Tampilkan alert saat semua validasi sukses
            // Biarkan form terkirim agar halaman refresh
        } else {
            event.preventDefault(); // Cegah submit jika ada field yang tidak valid
            alert("Tolong periksa kembali semua field!");
            return false; // Hentikan submit jika validasi gagal
        }
    }
});
