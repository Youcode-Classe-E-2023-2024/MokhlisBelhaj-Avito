<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
    <title><?php echo SITENAME; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->
    <header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
        <!-- logo -->
    
            <a href="<?php echo URL ?>pages">
                <svg width="322" height="112" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(14 14)">
                        <circle cx="60.65" cy="60.55" r="22.45" fill="#97CF26" />
                        <circle cx="18.45" cy="60.55" r="10.45" fill="#A169F7" />
                        <circle cx="60.65" cy="18.35" r="14.45" fill="#FF6163" />
                        <circle cx="18.45" cy="18.35" r="18.45" fill="#0AF" />
                    </g>
                </svg>
            </a>
     

        <!-- navigation -->
        <nav class="nav font-semibold text-lg">
            <ul class="flex items-center">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="<?php echo URL ?>pages">Produits</a>
                </li>
            </ul>
        </nav>

        <!-- buttons --->
        <div class="w-3/12 flex justify-end ">
            <div class="flex justify-end ">
                <!-- dashbaord -->
            <a href="<?php echo URL ?>pages/dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50%" height="100%" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 27.462 26.484 l -6.619 7.277 l -2.539 -3.99 c -0.297 -0.465 -0.915 -0.604 -1.381 -0.307 s -0.603 0.915 -0.307 1.381 l 3.242 5.094 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.409 0.342 -1.041 -0.067 -1.413 C 28.467 26.045 27.833 26.077 27.462 26.484 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 27.462 47.48 l -6.619 7.277 l -2.539 -3.99 c -0.297 -0.465 -0.915 -0.603 -1.381 -0.307 c -0.466 0.297 -0.603 0.915 -0.307 1.381 l 3.242 5.094 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.408 0.342 -1.041 -0.067 -1.412 C 28.467 47.042 27.833 47.073 27.462 47.48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 27.462 69.5 l -6.619 7.276 l -2.539 -3.99 c -0.296 -0.465 -0.915 -0.603 -1.38 -0.307 c -0.466 0.297 -0.604 0.915 -0.307 1.381 l 3.242 5.095 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.408 0.342 -1.041 -0.067 -1.412 C 28.467 69.062 27.833 69.093 27.462 69.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 36.023 32.657 h 24.312 c 0.553 0 1 -0.448 1 -1 s -0.447 -1 -1 -1 H 36.023 c -0.552 0 -1 0.448 -1 1 S 35.471 32.657 36.023 32.657 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 36.023 53.653 h 6.92 c 0.552 0 1 -0.447 1 -1 s -0.448 -1 -1 -1 h -6.92 c -0.552 0 -1 0.447 -1 1 S 35.471 53.653 36.023 53.653 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 60.335 73.673 H 36.023 c -0.552 0 -1 0.447 -1 1 s 0.448 1 1 1 h 24.312 c 0.553 0 1 -0.447 1 -1 S 60.888 73.673 60.335 73.673 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 77.441 47.537 c -0.523 0 -1.006 -0.304 -1.259 -0.792 c -0.09 -0.175 -0.186 -0.349 -0.286 -0.524 c -0.099 -0.17 -0.201 -0.338 -0.308 -0.506 c -0.297 -0.463 -0.319 -1.033 -0.058 -1.485 c 0.453 -0.786 0.574 -1.701 0.34 -2.578 c -0.235 -0.876 -0.797 -1.609 -1.583 -2.062 l -1.563 -0.903 V 16.35 c 0 -2.617 -2.129 -4.745 -4.745 -4.745 H 56.005 v -0.763 c 0 -2.936 -2.389 -5.324 -5.324 -5.324 h -2.756 C 47.174 2.316 44.316 0 40.944 0 c -3.373 0 -6.23 2.316 -6.981 5.518 h -2.756 c -2.936 0 -5.324 2.389 -5.324 5.324 v 0.763 H 13.907 c -2.617 0 -4.745 2.128 -4.745 4.745 v 68.905 c 0 2.616 2.128 4.745 4.745 4.745 H 67.98 c 2.616 0 4.745 -2.129 4.745 -4.745 V 66.846 l 1.563 -0.902 c 0.786 -0.453 1.348 -1.186 1.583 -2.063 c 0.234 -0.876 0.113 -1.792 -0.34 -2.578 c -0.262 -0.453 -0.248 -1.008 0.034 -1.447 c 0.23 -0.356 0.442 -0.725 0.637 -1.102 c 0.24 -0.468 0.716 -0.759 1.239 -0.759 c 1.873 0 3.396 -1.523 3.396 -3.396 v -3.665 C 80.838 49.061 79.314 47.537 77.441 47.537 z M 27.883 10.842 c 0 -1.833 1.491 -3.324 3.324 -3.324 h 3.599 c 0.512 0 0.94 -0.386 0.995 -0.895 C 36.079 3.987 38.29 2 40.944 2 c 2.653 0 4.865 1.987 5.144 4.623 c 0.054 0.509 0.482 0.895 0.994 0.895 h 3.599 c 1.833 0 3.324 1.491 3.324 3.324 v 3.478 H 27.883 V 10.842 z M 67.98 88 H 13.907 c -1.514 0 -2.745 -1.231 -2.745 -2.745 V 16.35 c 0 -1.514 1.231 -2.745 2.745 -2.745 h 11.976 v 1.715 c 0 0.552 0.448 1 1 1 h 28.122 c 0.553 0 1 -0.448 1 -1 v -1.715 H 67.98 c 1.514 0 2.745 1.231 2.745 2.745 v 21.23 c -0.693 -0.292 -1.453 -0.36 -2.189 -0.163 c -0.876 0.235 -1.608 0.797 -2.063 1.583 c -0.262 0.454 -0.757 0.729 -1.276 0.693 c -0.422 -0.021 -0.847 -0.021 -1.271 0 c -0.519 0.042 -1.011 -0.241 -1.272 -0.693 c -0.453 -0.786 -1.186 -1.348 -2.063 -1.583 c -0.875 -0.234 -1.792 -0.114 -2.577 0.339 L 54.84 39.59 c -0.785 0.454 -1.348 1.186 -1.582 2.062 c -0.235 0.877 -0.114 1.792 0.34 2.578 c 0.262 0.454 0.247 1.009 -0.037 1.45 c -0.229 0.356 -0.439 0.723 -0.634 1.099 c -0.24 0.468 -0.715 0.759 -1.239 0.759 c -1.873 0 -3.396 1.523 -3.396 3.396 v 3.665 c 0 1.872 1.523 3.396 3.396 3.397 c 0.523 0 1.005 0.304 1.26 0.795 c 0.091 0.174 0.185 0.347 0.283 0.519 c 0.101 0.174 0.204 0.345 0.309 0.507 c 0.298 0.465 0.319 1.034 0.058 1.487 c -0.453 0.786 -0.574 1.701 -0.339 2.578 c 0.234 0.876 0.797 1.608 1.582 2.062 l 3.175 1.833 c 0.523 0.302 1.104 0.456 1.692 0.456 c 0.295 0 0.593 -0.039 0.886 -0.117 c 0.876 -0.235 1.608 -0.797 2.063 -1.584 c 0.262 -0.452 0.753 -0.713 1.277 -0.692 c 0.425 0.021 0.847 0.021 1.268 0 c 0.524 -0.024 1.013 0.241 1.273 0.694 c 0.864 1.496 2.7 2.069 4.252 1.418 v 17.304 C 70.726 86.769 69.494 88 67.98 88 z M 78.838 54.599 c 0 0.771 -0.627 1.396 -1.397 1.396 c -1.276 0 -2.433 0.707 -3.018 1.845 c -0.163 0.318 -0.342 0.628 -0.539 0.932 c -0.689 1.074 -0.723 2.428 -0.085 3.532 c 0.187 0.323 0.236 0.699 0.14 1.06 c -0.096 0.36 -0.327 0.661 -0.65 0.848 l -3.174 1.833 c -0.67 0.387 -1.522 0.155 -1.908 -0.512 c -0.638 -1.104 -1.81 -1.74 -3.104 -1.691 c -0.359 0.019 -0.718 0.018 -1.073 0 c -1.268 -0.061 -2.47 0.587 -3.107 1.692 c -0.187 0.323 -0.487 0.554 -0.848 0.65 c -0.361 0.097 -0.737 0.046 -1.06 -0.14 l -3.175 -1.833 c -0.323 -0.187 -0.554 -0.487 -0.65 -0.848 s -0.047 -0.736 0.14 -1.06 c 0.637 -1.103 0.597 -2.469 -0.107 -3.57 c -0.09 -0.138 -0.176 -0.279 -0.259 -0.424 c -0.085 -0.146 -0.165 -0.294 -0.241 -0.44 c -0.597 -1.154 -1.76 -1.873 -3.034 -1.874 c -0.771 0 -1.396 -0.626 -1.396 -1.396 v -3.665 c 0 -0.771 0.627 -1.396 1.397 -1.396 c 1.277 0 2.434 -0.707 3.017 -1.844 c 0.164 -0.318 0.344 -0.63 0.538 -0.932 c 0.691 -1.073 0.724 -2.427 0.086 -3.533 c -0.187 -0.322 -0.236 -0.699 -0.14 -1.059 s 0.327 -0.662 0.65 -0.848 l 3.175 -1.833 c 0.22 -0.126 0.459 -0.187 0.696 -0.187 c 0.482 0 0.953 0.25 1.212 0.698 c 0.638 1.105 1.813 1.754 3.102 1.692 c 0.361 -0.017 0.72 -0.017 1.075 0 c 1.273 0.054 2.468 -0.585 3.106 -1.692 c 0.386 -0.667 1.241 -0.895 1.908 -0.512 l 3.174 1.833 c 0.323 0.187 0.555 0.487 0.65 0.848 c 0.097 0.36 0.047 0.736 -0.14 1.06 c -0.637 1.104 -0.596 2.47 0.104 3.563 c 0.091 0.142 0.178 0.286 0.262 0.431 s 0.164 0.291 0.241 0.44 c 0.598 1.156 1.761 1.874 3.035 1.874 c 0.771 0 1.396 0.626 1.396 1.396 V 54.599 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 66.328 46.184 c -1.761 -0.47 -3.596 -0.229 -5.171 0.681 c -1.576 0.91 -2.704 2.38 -3.176 4.138 c -0.471 1.759 -0.229 3.596 0.681 5.172 s 2.38 2.704 4.139 3.175 c 0.587 0.157 1.183 0.235 1.774 0.235 c 1.181 0 2.347 -0.31 3.396 -0.916 c 1.576 -0.91 2.704 -2.38 3.175 -4.138 c 0.471 -1.759 0.229 -3.595 -0.681 -5.171 S 68.086 46.655 66.328 46.184 z M 69.215 54.013 c -0.333 1.242 -1.13 2.28 -2.243 2.923 c -1.114 0.644 -2.41 0.815 -3.654 0.481 c -1.242 -0.333 -2.28 -1.13 -2.923 -2.243 c -0.644 -1.113 -0.813 -2.411 -0.48 -3.653 c 0.333 -1.243 1.129 -2.281 2.243 -2.924 c 0.741 -0.429 1.564 -0.647 2.398 -0.647 c 0.418 0 0.84 0.056 1.255 0.167 c 1.242 0.333 2.28 1.129 2.923 2.243 C 69.377 51.473 69.548 52.771 69.215 54.013 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                </a>
                <!-- login  -->

                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50%" height="100%" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path d="M 36.137 34.78 c -9.589 0 -17.39 -7.801 -17.39 -17.39 C 18.747 7.801 26.548 0 36.137 0 s 17.39 7.801 17.39 17.39 C 53.527 26.979 45.726 34.78 36.137 34.78 z M 36.137 7 c -5.729 0 -10.39 4.661 -10.39 10.39 s 4.661 10.39 10.39 10.39 s 10.39 -4.661 10.39 -10.39 S 41.866 7 36.137 7 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 11.721 90 c -1.933 0 -3.5 -1.567 -3.5 -3.5 V 61.756 c 0 -11.14 9.063 -20.203 20.203 -20.203 h 15.427 c 6.92 0 13.29 3.505 17.039 9.375 c 1.084 1.698 1.904 3.539 2.438 5.471 c 0.516 1.862 -0.577 3.791 -2.44 4.306 c -1.86 0.519 -3.791 -0.576 -4.306 -2.44 c -0.349 -1.258 -0.884 -2.459 -1.593 -3.568 c -2.456 -3.847 -6.62 -6.143 -11.138 -6.143 H 28.424 c -7.28 0 -13.203 5.923 -13.203 13.203 V 86.5 C 15.221 88.433 13.654 90 11.721 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 60.554 90 c -1.933 0 -3.5 -1.567 -3.5 -3.5 v -2.236 c 0 -1.933 1.567 -3.5 3.5 -3.5 s 3.5 1.567 3.5 3.5 V 86.5 C 64.054 88.433 62.486 90 60.554 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 80.754 68.741 l -8.515 -8.515 c -1.367 -1.367 -3.582 -1.367 -4.949 0 c -1.367 1.366 -1.367 3.583 0 4.949 l 2.54 2.54 H 36.137 c -1.933 0 -3.5 1.567 -3.5 3.5 s 1.567 3.5 3.5 3.5 h 33.693 l -2.541 2.541 c -1.367 1.367 -1.367 3.583 0 4.949 c 0.684 0.684 1.579 1.025 2.475 1.025 s 1.792 -0.342 2.475 -1.025 l 8.515 -8.516 C 82.121 72.323 82.121 70.107 80.754 68.741 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                    </svg>
                </a>
                
            </div>

            <!-- logout  -->
            <!-- <div> 
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20%" height="80%" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                   
                     <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 36.137 34.78 c -9.589 0 -17.39 -7.801 -17.39 -17.39 C 18.747 7.801 26.548 0 36.137 0 s 17.39 7.801 17.39 17.39 C 53.527 26.979 45.726 34.78 36.137 34.78 z M 36.137 7 c -5.729 0 -10.39 4.661 -10.39 10.39 s 4.661 10.39 10.39 10.39 s 10.39 -4.661 10.39 -10.39 S 41.866 7 36.137 7 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 11.721 90 c -1.933 0 -3.5 -1.567 -3.5 -3.5 V 61.756 c 0 -11.14 9.063 -20.203 20.203 -20.203 h 15.427 c 6.92 0 13.29 3.505 17.039 9.375 c 1.084 1.698 1.904 3.539 2.438 5.471 c 0.516 1.862 -0.577 3.791 -2.44 4.306 c -1.86 0.519 -3.791 -0.576 -4.306 -2.44 c -0.349 -1.258 -0.884 -2.459 -1.593 -3.568 c -2.456 -3.847 -6.62 -6.143 -11.138 -6.143 H 28.424 c -7.28 0 -13.203 5.923 -13.203 13.203 V 86.5 C 15.221 88.433 13.654 90 11.721 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 60.554 90 c -1.933 0 -3.5 -1.567 -3.5 -3.5 v -2.236 c 0 -1.933 1.567 -3.5 3.5 -3.5 s 3.5 1.567 3.5 3.5 V 86.5 C 64.054 88.433 62.486 90 60.554 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 33.663 68.741 l 8.515 -8.515 c 1.367 -1.367 3.582 -1.367 4.949 0 c 1.367 1.366 1.367 3.583 0 4.949 l -2.54 2.54 h 33.693 c 1.933 0 3.5 1.567 3.5 3.5 s -1.567 3.5 -3.5 3.5 H 44.586 l 2.541 2.541 c 1.367 1.367 1.367 3.583 0 4.949 c -0.684 0.684 -1.579 1.025 -2.475 1.025 s -1.792 -0.342 -2.475 -1.025 l -8.515 -8.516 C 32.295 72.323 32.295 70.107 33.663 68.741 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                </svg>
            </a> 
            </div> -->
        </div>
    </header>