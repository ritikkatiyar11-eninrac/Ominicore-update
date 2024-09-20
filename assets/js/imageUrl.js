const imagesContainer = document.getElementById('image-container');
const loader = document.getElementById('loader');
const mediaSearch = document.getElementById("media-search");

imagesContainer.style.height = '600px';
imagesContainer.style.overflowY = 'auto';

let allImages = []; // Store all fetched images

async function fetchImages(page) {
    const apiUrl = `http://localhost/omnicore/api/v1/media/get?page=${page}`;
    const response = await fetch(apiUrl);
    const data = await response.json();

    // Concatenate new images to the allImages array
    allImages = allImages.concat(data.responseData.data);
    displayImages(allImages); // Display all images initially
}

function displayImages(images) {
    imagesContainer.innerHTML = ''; // Clear previous images
    if (images.length === 0) {
        // Show message if no images found
        imagesContainer.innerHTML = '<p>Image not found</p>';
        return;
    }

    let rowDiv = document.createElement('div');
    rowDiv.setAttribute('class', 'row align-items-center w-100');
    rowDiv.setAttribute('style', 'gap: 15px 0;');

    images.forEach(item => {
        let colDiv = document.createElement('div');
        colDiv.setAttribute('class', 'col-md-3');
        colDiv.innerHTML = `<div class="img-thumbnail position-relative">
                <button class="media-close-btn btn-danger" data-id="${item.ATT_ID}">x</button>
                <div class="main-thumbnail">
                    <img src="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}thumbnail/${item.ATT_TITLE}" 
                         alt="${item.ATT_TITLE}" 
                         loading="lazy" 
                         width="200" 
                         height="150"> 
                    <input type="text" disabled="" value="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}${item.ATT_TITLE}">
                    <input type="hidden" class="media-title" value="${item.ATT_TITLE}">
                </div>
            </div>`;
        rowDiv.appendChild(colDiv);
    });
    imagesContainer.appendChild(rowDiv);
}

mediaSearch.addEventListener("input", () => {
    const searchValue = mediaSearch.value.toLowerCase();
    const filteredImages = allImages.filter(item => item.ATT_SLUG.toLowerCase().includes(searchValue));

    displayImages(filteredImages); // Show filtered images or "Image not found" message
});

let page = 1;
let isLoading = false;

function loadMoreImages() {
    if (isLoading) return;
    isLoading = true;
    loader.style.display = 'block';

    fetchImages(page).then(() => {
        page++;
    }).finally(() => {
        isLoading = false;
    });
}

fetchImages(page);

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
    if (scrollTop + clientHeight >= scrollHeight - 10) {
        loadMoreImages();
    }
}, 200));
