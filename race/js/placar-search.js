let result = document.querySelector(".result-wrapper");
result.style.display = "none";

function searchFor() {
    let input = document.getElementById("search").value.toLowerCase();
    let items = document.querySelectorAll(".placar-wrapper");
    let hasResults = false;

    items.forEach(item => {
        let search = item.getAttribute("data-search").toLowerCase();
        if (search.includes(input)) {
            item.style.display = "block";
            hasResults = true;
        } else {
            item.style.display = "none";
        }
    });

    if (hasResults && input.trim() !== "") {
        result.style.display = "flex";
    } else {
        result.style.display = "none";
    }
}

document.getElementById("search").addEventListener("input", function() {
    searchFor(); 
})