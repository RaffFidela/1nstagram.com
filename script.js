const form = document.querySelector("#login-form");
const username = document.querySelector("#username");
const password = document.querySelector("#password");
const showPassword = document.querySelector(".show-password");
const toast = document.querySelector(".toast");
let toastTimer;

function showToast(message) {
    toast.textContent = message;
    toast.classList.add("visible");
    window.clearTimeout(toastTimer);
    toastTimer = window.setTimeout(() => toast.classList.remove("visible"), 2600);
}

showPassword.addEventListener("click", () => {
    const reveal = password.type === "password";
    password.type = reveal ? "text" : "password";
    showPassword.textContent = reveal ? "Hide" : "Show";
    showPassword.setAttribute("aria-pressed", String(reveal));
});

form.addEventListener("submit", (event) => {
    event.preventDefault();
    if (!form.reportValidity()) return;

    username.value = "";
    password.value = "";
    password.type = "password";
    showPassword.textContent = "Show";
    showPassword.setAttribute("aria-pressed", "false");
    showToast("Demo only: nothing was sent or saved.");
    username.focus();
});

document.querySelector(".forgot-link").addEventListener("click", () => {
    showToast("Password recovery is not available in this visual demo.");
});

document.querySelector(".create-button").addEventListener("click", () => {
    showToast("Account creation is not available in this visual demo.");
});
