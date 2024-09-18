const imagesContainer = document.getElementById('image-container');
const loader = document.getElementById('loader');

// Set a fixed height for the image container
imagesContainer.style.height = '600px'; // Adjust this value as needed
imagesContainer.style.overflowY = 'auto'; // Enable vertical scrolling

function fetchImages(page) {
    const apiUrl = `http://localhost/omnicore/api/v1/media/get?page=${page}`;
    return fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            let rowDiv = document.createElement('div');
            rowDiv.setAttribute('class', 'row align-items-center w-100');
            rowDiv.setAttribute('style', 'gap: 15px 0;');
            data.responseData.data.forEach(item => {
                let colDiv = document.createElement('div');
                colDiv.setAttribute('class', 'col-md-3');
                colDiv.innerHTML = `<div class="img-thumbnail position-relative">
                <button class="media-close-btn btn-danger" data-id="${item.ATT_ID}">x</button>
                <div class="main-thumbnail">
                    <img src="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}thumbnail/${item.ATT_TITLE}" 
                         alt="${item.ATT_TITLE}" 
                         loading="lazy" 
                         width="200" 
                         height="150"> <!-- Specify width and height to prevent layout shifts -->
                    <input type="text" disabled="" value="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}${item.ATT_TITLE}">
                    <input type="hidden" class="media-title" value="${item.ATT_TITLE}">
                </div>
            </div>`;
                rowDiv.appendChild(colDiv);
            });
            imagesContainer.appendChild(rowDiv);
        });
}

let page = 1;
let isLoading = false; // Flag to prevent multiple loads

function loadMoreImages() {
    if (isLoading) return; // Prevent loading if already in progress
    isLoading = true; // Set loading flag
    loader.style.display = 'block';

    fetchImages(page).then(() => {
        page++; // Increment page after successful fetch
    }).finally(() => {
        isLoading = false; // Reset loading flag after fetch completes
    });
}

fetchImages(page); // Initial fetch

// Debounce function to limit how often the scroll event fires
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

imagesContainer.addEventListener('scroll', debounce(() => {
    const scrollHeight = imagesContainer.scrollHeight;
    const scrollTop = imagesContainer.scrollTop;
    const clientHeight = imagesContainer.clientHeight;

    // Check if the scrollbar is at the bottom
    if (scrollTop + clientHeight >= scrollHeight - 10) { // Using a small threshold to account for rounding
        loadMoreImages();
    }
}, 200)); 
