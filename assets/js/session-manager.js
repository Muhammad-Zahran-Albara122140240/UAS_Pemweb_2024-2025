function incrementSessionCount(page) {
    // Get existing session data or initialize
    let sessionCounts = JSON.parse(sessionStorage.getItem("pageCounts")) || {};
    
    // Increment count for the given page
    if (!sessionCounts[page]) {
        sessionCounts[page] = 0;
    }
    sessionCounts[page]++;
    
    // Save back to session storage
    sessionStorage.setItem("pageCounts", JSON.stringify(sessionCounts));
}

function displaySessionCounts() {
    let sessionCounts = JSON.parse(sessionStorage.getItem("pageCounts")) || {};
    const pageCountsElement = document.getElementById("pageCounts");

    // Generate display string
    let displayText = Object.keys(sessionCounts)
        .map(page => `Page number ${page} count: ${sessionCounts[page]}`)
        .join("<br>");

    pageCountsElement.innerHTML = displayText || "No pages visited yet.";
}
