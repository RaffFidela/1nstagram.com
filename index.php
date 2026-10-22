<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fictional photo-sharing app mockup for classroom learning.">
    <title>PhotoLoop — Classroom Demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="demo-banner">
        <span>CLASSROOM DEMO</span>
        <p>PhotoLoop is a fictional interface. No account or personal information is collected.</p>
    </div>

    <div class="app-shell">
        <aside class="sidebar" aria-label="Main navigation">
            <a class="brand" href="#" aria-label="PhotoLoop home">photoloop<span>•</span></a>
            <nav class="main-nav">
                <a class="nav-link active" href="#home"><span class="nav-icon">⌂</span><span>Home</span></a>
                <a class="nav-link" href="#search"><span class="nav-icon">⌕</span><span>Search</span></a>
                <a class="nav-link" href="#explore"><span class="nav-icon">▦</span><span>Explore</span></a>
                <a class="nav-link" href="#messages"><span class="nav-icon">➤</span><span>Messages</span><span class="message-dot"></span></a>
                <a class="nav-link" href="#notifications"><span class="nav-icon">♡</span><span>Notifications</span></a>
                <a class="nav-link" href="#create"><span class="nav-icon">⊞</span><span>Create</span></a>
                <a class="nav-link" href="#profile"><span class="nav-avatar mini-avatar">Y</span><span>Profile</span></a>
            </nav>
            <button class="more-button" type="button"><span class="nav-icon">☰</span><span>More</span></button>
        </aside>

        <main class="content" id="home">
            <div class="mobile-header">
                <a class="brand" href="#home">photoloop<span>•</span></a>
                <button class="icon-button" type="button" aria-label="Notifications">♡</button>
            </div>

            <section class="feed" aria-label="Photo feed">
                <div class="stories" aria-label="Stories">
                    <button class="story" type="button"><span class="story-ring add-story"><span>+</span></span><span>Your story</span></button>
                    <button class="story" type="button"><span class="story-ring story-one"><span>☀</span></span><span>maya.sun</span></button>
                    <button class="story" type="button"><span class="story-ring story-two"><span>✿</span></span><span>leo.jpg</span></button>
                    <button class="story" type="button"><span class="story-ring story-three"><span>☁</span></span><span>nina.draws</span></button>
                    <button class="story" type="button"><span class="story-ring story-four"><span>♫</span></span><span>theo.wav</span></button>
                    <button class="story extra-story" type="button"><span class="story-ring story-five"><span>✦</span></span><span>aria.explores</span></button>
                </div>

                <article class="post">
                    <header class="post-header">
                        <span class="avatar avatar-maya">M</span>
                        <div class="post-author"><strong>maya.sun</strong><span>Somewhere sunny</span></div>
                        <button class="more-post" type="button" aria-label="More post options">•••</button>
                    </header>
                    <div class="post-art art-sunset" role="img" aria-label="Illustration of a sunset over hills">
                        <span class="sun"></span><span class="hill hill-back"></span><span class="hill hill-front"></span>
                        <span class="art-caption">golden hour<br>state of mind</span>
                    </div>
                    <div class="post-actions">
                        <button class="action-button like-button" type="button" aria-label="Like post" aria-pressed="false">♡</button>
                        <button class="action-button comment-focus" type="button" aria-label="Comment">▢</button>
                        <button class="action-button share-button" type="button" aria-label="Share">➤</button>
                        <button class="action-button save-button" type="button" aria-label="Save post" aria-pressed="false">♧</button>
                    </div>
                    <div class="post-copy">
                        <p class="like-count"><strong>1,204 likes</strong></p>
                        <p><strong>maya.sun</strong> taking the long way home 🌅 <a href="#sunset">#littlemoments</a></p>
                        <button class="view-comments" type="button">View all 18 comments</button>
                        <p class="timestamp">2 HOURS AGO</p>
                    </div>
                    <form class="comment-form">
                        <label class="sr-only" for="comment-one">Add a comment</label>
                        <input id="comment-one" type="text" placeholder="Add a comment..." maxlength="120">
                        <button type="submit" disabled>Post</button>
                    </form>
                </article>

                <article class="post second-post">
                    <header class="post-header">
                        <span class="avatar avatar-leo">L</span>
                        <div class="post-author"><strong>leo.jpg</strong><span>Weekend wander</span></div>
                        <button class="more-post" type="button" aria-label="More post options">•••</button>
                    </header>
                    <div class="post-art art-coast" role="img" aria-label="Illustration of a blue ocean and a small sailboat">
                        <span class="coast-sun"></span><span class="ocean"></span><span class="wave wave-one"></span><span class="wave wave-two"></span>
                        <span class="sailboat">⛵</span><span class="coast-caption">out of office</span>
                    </div>
                    <div class="post-actions">
                        <button class="action-button like-button" type="button" aria-label="Like post" aria-pressed="false">♡</button>
                        <button class="action-button comment-focus" type="button" aria-label="Comment">▢</button>
                        <button class="action-button share-button" type="button" aria-label="Share">➤</button>
                        <button class="action-button save-button" type="button" aria-label="Save post" aria-pressed="false">♧</button>
                    </div>
                    <div class="post-copy">
                        <p class="like-count"><strong>892 likes</strong></p>
                        <p><strong>leo.jpg</strong> sea you soon 🌊</p>
                        <button class="view-comments" type="button">View all 9 comments</button>
                        <p class="timestamp">5 HOURS AGO</p>
                    </div>
                    <form class="comment-form">
                        <label class="sr-only" for="comment-two">Add a comment</label>
                        <input id="comment-two" type="text" placeholder="Add a comment..." maxlength="120">
                        <button type="submit" disabled>Post</button>
                    </form>
                </article>
            </section>

            <aside class="suggestions" aria-label="Suggested accounts">
                <div class="my-profile">
                    <span class="avatar avatar-you">Y</span>
                    <div><strong>you.demo</strong><span>Learning the ropes</span></div>
                    <button type="button" class="text-button">Switch</button>
                </div>
                <div class="suggestion-heading"><strong>Suggested for you</strong><button type="button" class="text-button see-all">See All</button></div>
                <div class="suggestion-row"><span class="avatar avatar-nina">N</span><div><strong>nina.draws</strong><span>Followed by maya.sun</span></div><button class="text-button follow-button" type="button">Follow</button></div>
                <div class="suggestion-row"><span class="avatar avatar-theo">T</span><div><strong>theo.wav</strong><span>New to PhotoLoop</span></div><button class="text-button follow-button" type="button">Follow</button></div>
                <div class="suggestion-row"><span class="avatar avatar-aria">A</span><div><strong>aria.explores</strong><span>Suggested for you</span></div><button class="text-button follow-button" type="button">Follow</button></div>
                <p class="footer-links">About · Help · Press · API · Jobs · Privacy · Terms</p>
                <p class="copyright">© 2026 PHOTOLOOP CLASSROOM DEMO</p>
            </aside>
        </main>
    </div>
    <div class="toast" role="status" aria-live="polite"></div>
</body>
</html>
