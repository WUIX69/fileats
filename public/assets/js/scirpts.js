$(function () {
    window.onerror = function (msg, url, line) {
        console.log("Error: " + msg);
        console.log("URL: " + url);
        console.log("Line: " + line);
        return false;
    };

    // Check if jQuery is loaded
    if (typeof jQuery !== "undefined") {
        console.log("jQuery is loaded, version:", jQuery.fn.jquery);
    } else {
        console.error("jQuery is not loaded!");
        return;
    }

    // Check if Chart.js is loaded
    if (typeof Chart === "undefined") {
        console.error("Chart.js is not loaded!");
        return;
    } else {
        console.log("Chart.js is loaded, version:", Chart.version);
    }
});
