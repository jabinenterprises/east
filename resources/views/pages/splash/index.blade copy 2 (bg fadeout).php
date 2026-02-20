<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Splash</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            height: 100%;
        }

        /* Full-screen splash container */
        #splash-container {
            width: 100%;
            height: 100%;
            background-color: #181818;
            /* splash background */
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            /* ensure it’s on top */
        }

        #logo {
            opacity: 0;
            /* hidden initially */
        }

        /* Start animation class */
        #logo.start-animation {
            opacity: 1;
            animation: fill-color 0.5s ease forwards 3.5s;
        }

        #logo.start-animation path:nth-child(1) {
            stroke-dasharray: 978px;
            stroke-dashoffset: 978px;
            animation: line-anim 2s ease forwards;
        }

        #logo.start-animation path:nth-child(2) {
            stroke-dasharray: 873px;
            stroke-dashoffset: 873px;
            animation: line-anim 2s ease forwards 0.5s;
        }

        #logo.start-animation path:nth-child(3) {
            stroke-dasharray: 975px;
            stroke-dashoffset: 975px;
            animation: line-anim 2s ease forwards 1s;
        }

        #logo.start-animation path:nth-child(4) {
            stroke-dasharray: 708px;
            stroke-dashoffset: 708px;
            animation: line-anim 2s ease forwards 1.5s;
        }

        @keyframes line-anim {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes fill-color {
            from {
                fill: transparent;
            }

            to {
                fill: white;
            }
        }

        /* Fade-out the entire splash container */
        .fade-out {
            animation: fadeOut 1s forwards;
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                visibility: hidden;
            }
        }
    </style>
</head>

<body>
    <div id="splash-container">
        <svg id="logo" width="681" height="202" viewBox="0 0 681 202" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M137.318 5.04547V46.5914H52.5V79.773H130.682V121.409H52.5V154.682H137.318V196.227H2.5V5.04547H137.318Z"
                stroke="white" stroke-width="5" />
            <path
                d="M279.432 5.04547L280.005 6.74664L342.823 192.928L343.936 196.227H290.256L289.706 194.476L277.982 157.136H217.357L205.658 194.475L205.109 196.227H151.427L152.54 192.928L215.358 6.74664L215.932 5.04547H279.432ZM229.634 117.955H265.681L247.638 60.4888L229.634 117.955Z"
                stroke="white" stroke-width="5" />
            <path
                d="M427.114 2.5C441.818 2.50003 454.707 5.00198 465.71 10.0947H465.709C476.744 15.1138 485.393 22.2166 491.555 31.4277C497.73 40.6577 500.851 51.3242 500.977 63.3379L501.004 65.8633H453.103L452.897 63.5898C452.347 57.5337 449.943 53.021 445.767 49.7969L445.74 49.7754C441.617 46.4982 435.495 44.6817 427.023 44.6816C421.402 44.6816 416.886 45.4167 413.387 46.7832C409.838 48.1698 407.365 50.0072 405.772 52.1973L405.763 52.209L405.755 52.2197C404.143 54.3869 403.301 56.8751 403.25 59.7715L403.248 59.8359C403.144 62.2132 403.609 64.1817 404.548 65.834C405.605 67.5843 407.141 69.1959 409.231 70.6484C411.453 72.0888 414.169 73.3975 417.409 74.5547C420.272 75.5772 423.47 76.4955 427.009 77.3057L428.547 77.6465L428.562 77.6494L428.577 77.6533L444.577 81.2891H444.576C453.924 83.3201 462.222 86.0393 469.449 89.4648H469.45C476.744 92.8939 482.922 97.0093 487.938 101.835H487.937C493.026 106.672 496.893 112.26 499.514 118.589C502.139 124.926 503.46 131.978 503.523 139.707V139.74C503.46 151.929 500.373 162.532 494.164 171.431C487.967 180.311 479.097 187.043 467.692 191.68L467.691 191.679C456.345 196.317 442.765 198.591 427.023 198.591C411.204 198.591 397.297 196.221 385.361 191.409C373.365 186.573 363.951 179.181 357.223 169.217C350.462 159.202 347.073 146.662 346.886 131.759L346.855 129.228H394.831L394.972 131.576C395.314 137.214 396.81 141.736 399.332 145.277C401.882 148.859 405.4 151.609 409.978 153.508C414.649 155.42 420.132 156.409 426.477 156.409C432.326 156.409 437.155 155.618 441.032 154.122L441.044 154.118C445.026 152.604 447.917 150.564 449.88 148.085C451.829 145.623 452.825 142.836 452.884 139.638C452.825 136.674 451.919 134.259 450.213 132.26L450.203 132.248L450.193 132.237C448.422 130.113 445.549 128.131 441.345 126.403L441.326 126.396L441.307 126.387C437.127 124.587 431.706 122.901 425.003 121.345L425 121.344L405.555 116.8V116.801C389.156 113.04 376.036 106.922 366.362 98.3232L366.355 98.3174C356.475 89.4708 351.642 77.5367 351.705 62.8076C351.646 50.817 354.877 40.208 361.449 31.084C367.984 22.0107 376.995 14.9889 388.38 9.98438C399.778 4.97462 412.705 2.5 427.114 2.5Z"
                stroke="white" stroke-width="5" />
            <path d="M677.522 5.04547V46.5914H621.068V196.227H571.705V46.5914H515.159V5.04547H677.522Z" stroke="white"
                stroke-width="5" />
        </svg>
    </div>

    <script>
        const logo = document.getElementById('logo');
        const splashContainer = document.getElementById('splash-container');

        const initialDelay = 2000; // show background for 2s
        const totalAnimationDuration = 4000; // duration of animation
        const fadeDuration = 1000; // fade-out duration

        // Start animation after initial delay
        setTimeout(() => {
            logo.classList.add('start-animation');

            // Fade out entire splash container after animation
            setTimeout(() => {
                splashContainer.classList.add('fade-out');

                setTimeout(() => {
                    window.location.href = "{{ url('/') }}"; // redirect to home
                }, fadeDuration);

            }, totalAnimationDuration);

        }, initialDelay);
    </script>
</body>

</html>