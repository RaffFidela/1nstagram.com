<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fictional PhotoLoop sign-in page for classroom learning.">
    <title>Sign in · PhotoLoop Demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <main class="page">
        <section class="login-card" aria-labelledby="brand">
            <div class="demo-label"><span class="demo-dot"></span> CLASSROOM DEMO · FICTIONAL APP</div>
            <a class="brand" id="brand" href="#" aria-label="PhotoLoop demo home">photoloop<span>•</span></a>
            <p class="intro">A little place for your favorite moments.</p>

            <form class="login-form" id="login-form" autocomplete="off">
                <label for="username">Email or username</label>
                <input id="username" name="username" type="text" placeholder="Enter a demo username" autocomplete="off" required>

                <label for="password">Password</label>
                <div class="password-wrap">
                    <input id="password" name="password" type="password" placeholder="Enter any demo password" autocomplete="new-password" required>
                    <button class="show-password" type="button" aria-controls="password" aria-pressed="false">Show</button>
                </div>

                <button class="submit-button" type="submit">Sign in</button>
            </form>

            <button class="forgot-link" type="button">Forgot password?</button>

            <div class="divider"><span></span><b>OR</b><span></span></div>

            <button class="create-button" type="button">Create a demo account</button>
            <p class="privacy-note">This is only a visual learning demo. Form entries stay in your browser, are immediately cleared, and are never sent or saved.</p>
        </section>
        <footer>PhotoLoop is fictional and is not affiliated with Instagram or Meta.</footer>
    </main>
    <div class="toast" role="status" aria-live="polite"></div>
</body>
</html>
