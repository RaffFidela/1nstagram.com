const toast = document.querySelector(".toast");
let toastTimer;

function showToast(message) {
    toast.textContent = message;
    toast.classList.add("visible");
    window.clearTimeout(toastTimer);
    toastTimer = window.setTimeout(() => toast.classList.remove("visible"), 2200);
}

document.querySelectorAll(".like-button").forEach((button) => {
    button.addEventListener("click", () => {
        const liked = button.getAttribute("aria-pressed") !== "true";
        button.setAttribute("aria-pressed", String(liked));
        button.classList.toggle("liked", liked);
        button.textContent = liked ? "♥" : "♡";
        button.setAttribute("aria-label", liked ? "Unlike post" : "Like post");
        const count = button.closest(".post").querySelector(".like-count strong");
        const total = Number(count.textContent.replace(/[^\d]/g, "")) + (liked ? 1 : -1);
        count.textContent = `${total.toLocaleString()} likes`;
        showToast(liked ? "Post liked in this demo" : "Like removed");
    });
});

document.querySelectorAll(".save-button").forEach((button) => {
    button.addEventListener("click", () => {
        const saved = button.getAttribute("aria-pressed") !== "true";
        button.setAttribute("aria-pressed", String(saved));
        button.textContent = saved ? "✓" : "♧";
        showToast(saved ? "Saved in this demo" : "Removed from saved");
    });
});

document.querySelectorAll(".follow-button").forEach((button) => {
    button.addEventListener("click", () => {
        const following = button.textContent.trim() !== "Following";
        button.textContent = following ? "Following" : "Follow";
        showToast(following ? "Following in this demo" : "Unfollowed in this demo");
    });
});

document.querySelectorAll(".comment-form").forEach((form) => {
    const input = form.querySelector("input");
    const submit = form.querySelector("button");

    input.addEventListener("input", () => {
        submit.disabled = input.value.trim().length === 0;
    });

    form.addEventListener("submit", (event) => {
        event.preventDefault();
        const comment = input.value.trim();
        if (!comment) return;

        const commentLine = document.createElement("p");
        commentLine.innerHTML = `<strong>you.demo</strong> ${escapeHtml(comment)}`;
        form.parentElement.querySelector(".post-copy").insertBefore(
            commentLine,
            form.parentElement.querySelector(".view-comments")
        );
        input.value = "";
        submit.disabled = true;
        showToast("Comment added locally");
    });
});

document.querySelectorAll(".comment-focus").forEach((button) => {
    button.addEventListener("click", () => {
        button.closest(".post").querySelector(".comment-form input").focus();
    });
});

document.querySelectorAll(".story, .share-button, .more-post, .more-button, .nav-link, .icon-button, .view-comments, .suggestion-heading .text-button, .my-profile .text-button").forEach((button) => {
    button.addEventListener("click", (event) => {
        if (button.matches("a")) event.preventDefault();
        if (button.classList.contains("story")) {
            showToast("Stories are examples in this classroom demo");
        } else if (button.classList.contains("view-comments")) {
            showToast("Comments shown here are demo content");
        } else if (button.classList.contains("share-button")) {
            showToast("Sharing is disabled in this demo");
        } else if (button.matches(".more-post, .more-button")) {
            showToast("This menu is a visual demo");
        } else if (button.matches(".text-button")) {
            showToast("Account switching is disabled in this demo");
        } else {
            showToast("This section is a visual demo");
        }
    });
});

function escapeHtml(value) {
    const element = document.createElement("span");
    element.textContent = value;
    return element.innerHTML;
}