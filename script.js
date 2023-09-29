// script.js
document.addEventListener("DOMContentLoaded", function () {
    const loadingContainer = document.getElementById("loading-container");
    const generateButton1 = document.getElementById("generate-button1");
    const generateButton2 = document.getElementById("generate-button2");
    const generateButton3 = document.getElementById("generate-button3");
    const generateButton4 = document.getElementById("generate-button4");
    const generateButton5 = document.getElementById("generate-button5");
    const generateButton6 = document.getElementById("generate-button6");

    generateButton1.addEventListener("click", function () {
        // Show loading container
        loadingContainer.style.display = "flex";

        // Simulate loading progress and redirect (as in the previous example)
        let progress = 0;
        const interval = setInterval(function () {
            if (progress >= 100) {
                clearInterval(interval);
                // Redirect to another page after loading is complete
                window.location.href = "quotation1.php";
            } else {
                progress += 3; // Adjust the speed of progress
            }
        }, 50); // Adjust the interval as needed
    });

    
    generateButton2.addEventListener("click", function () {
        // Show loading container
        loadingContainer.style.display = "flex";

        // Simulate loading progress and redirect (as in the previous example)
        let progress = 0;
        const interval = setInterval(function () {
            if (progress >= 100) {
                clearInterval(interval);
                // Redirect to another page after loading is complete
                window.location.href = "quotation1.php";
            } else {
                progress += 3; // Adjust the speed of progress
            }
        }, 50); // Adjust the interval as needed
    });

    
    generateButton3.addEventListener("click", function () {
        // Show loading container
        loadingContainer.style.display = "flex";

        // Simulate loading progress and redirect (as in the previous example)
        let progress = 0;
        const interval = setInterval(function () {
            if (progress >= 100) {
                clearInterval(interval);
                // Redirect to another page after loading is complete
                window.location.href = "quotation1.php";
            } else {
                progress += 3; // Adjust the speed of progress
            }
        }, 50); // Adjust the interval as needed
    });




generateButton4.addEventListener("click", function () {
    // Show loading container
    loadingContainer.style.display = "flex";

    // Simulate loading progress and redirect (as in the previous example)
    let progress = 0;
    const interval = setInterval(function () {
        if (progress >= 100) {
            clearInterval(interval);
            // Redirect to another page after loading is complete
            window.location.href = "quotation1.php";
        } else {
            progress += 3; // Adjust the speed of progress
        }
    }, 50); // Adjust the interval as needed
});


generateButton5.addEventListener("click", function () {
    // Show loading container
    loadingContainer.style.display = "flex";

    // Simulate loading progress and redirect (as in the previous example)
    let progress = 0;
    const interval = setInterval(function () {
        if (progress >= 100) {
            clearInterval(interval);
            // Redirect to another page after loading is complete
            window.location.href = "quotation1.php";
        } else {
            progress += 3; // Adjust the speed of progress
        }
    }, 50); // Adjust the interval as needed
});


generateButton6.addEventListener("click", function () {
    // Show loading container
    loadingContainer.style.display = "flex";

    // Simulate loading progress and redirect (as in the previous example)
    let progress = 0;
    const interval = setInterval(function () {
        if (progress >= 100) {
            clearInterval(interval);
            // Redirect to another page after loading is complete
            window.location.href = "quotation1.php";
        } else {
            progress += 3; // Adjust the speed of progress
        }
    }, 50); // Adjust the interval as needed
});
});