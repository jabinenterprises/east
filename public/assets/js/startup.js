window.addEventListener('load', function () {
    const startupAnimation = document.getElementById('startup-animation');
    const mainContent = document.getElementById('main-content');
    const body = document.getElementById('body');

    if (!sessionStorage.getItem('startupPlayed')) {
        // Show custom animation
        startupAnimation.style.display = 'flex';

        // After animation plays (example: 4 seconds), fade out
        setTimeout(function () {
            startupAnimation.classList.add('fade-out');
            setTimeout(function () {
                startupAnimation.style.display = 'none';
                mainContent.style.display = 'block';

                setTimeout(function () {
                    mainContent.classList.add('visible');
                }, 50);

                sessionStorage.setItem('startupPlayed', 'true');

            }, 1000); // match CSS transition duration
        }, 3700); // total animation time
    } else {
        // Already played -> show main content directly
        mainContent.style.display = 'block';
        mainContent.classList.add('visible');
        body.style.display('none');
    }
});

// const logo = document.querySelectorAll("#east_logo path");

// for (let i = 0; i < logo.length; i++) {
//     console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
// }