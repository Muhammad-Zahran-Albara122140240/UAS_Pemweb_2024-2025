document.addEventListener("DOMContentLoaded", function() {
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    const registerForm = document.getElementById("register-form");

    username.addEventListener("keyup", validateUsername);
    email.addEventListener("change", validateEmail);
    password.addEventListener("keyup", validatePassword);
    confirmPassword.addEventListener("input", confirmPasswordMatch);
    registerForm.addEventListener("submit", finalValidation);

    function validateUsername() {
        const feedback = document.getElementById("usernameFeedback");
        const usernameRegex = /^[a-zA-Z0-9]{5,20}$/;

        if (usernameRegex.test(username.value)) {
            feedback.textContent = "Username valid";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Username harus 5-20 karakter, hanya alfanumerik";
            feedback.style.color = "red";
            return false;
        }
    }

    function validateEmail() {
        const feedback = document.getElementById("emailFeedback");
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailRegex.test(email.value)) {
            feedback.textContent = "Email valid";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Format email tidak valid";
            feedback.style.color = "red";
            return false;
        }
    }

    function validatePassword() {
        const feedback = document.getElementById("passwordFeedback");
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if (passwordRegex.test(password.value)) {
            feedback.textContent = "Password kuat";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Password harus minimal 8 karakter dan mencakup angka";
            feedback.style.color = "red";
            return false;
        }
    }

    function confirmPasswordMatch() {
        const feedback = document.getElementById("confirmPasswordFeedback");

        if (confirmPassword.value === password.value && confirmPassword.value !== "") {
            feedback.textContent = "Password cocok";
            feedback.style.color = "green";
            return true;
        } else {
            feedback.textContent = "Password tidak cocok";
            feedback.style.color = "red";
            return false;
        }
    }

    function finalValidation(event) {
        const isUsernameValid = validateUsername();
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();
        const isConfirmPasswordValid = confirmPasswordMatch();

        if (isUsernameValid && isEmailValid && isPasswordValid && isConfirmPasswordValid) {
            alert("Pendaftaran berhasil!"); // Tampilkan alert saat semua validasi sukses
            // Biarkan form terkirim agar halaman refresh
        } else {
            event.preventDefault(); // Cegah submit jika ada field yang tidak valid
            alert("Tolong periksa kembali semua field!");
            return false; // Hentikan submit jika validasi gagal
        }
    }
});