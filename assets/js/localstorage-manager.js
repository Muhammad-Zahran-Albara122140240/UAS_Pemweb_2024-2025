function saveToLocalStorage() {
    const value = document.getElementById("localStorageValue").value;
    if (value) {
        localStorage.setItem("userData", value);
        document.getElementById("savedData").innerText = value;
        alert("Data saved to localStorage!");
    } else {
        alert("Please enter a value before saving.");
    }
}
