

fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
        const ipAddress = data.ip;
        document.cookie = "user_ip=" + ipAddress + "; path=/; max-age=" + 60 * 60 * 24;
    })
    .catch(error => console.error('Error fetching IP address:', error));

const userIpCookie = document.cookie.match("(^|;)\\s*user_ip=([^;]+)");
const userIpAddress = userIpCookie ? userIpCookie[2] : null;

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value, days) {
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
}
// http://localhost/omnicore/post/${postid}

function totrackVisit() {
    const userIpCookieAddress = "user_ip" + userIpAddress
    console.log(userIpAddress)
    let visitCount = parseInt(getCookie(userIpCookieAddress)) || 0;

    visitCount = visitCount + 1;
    setCookie(userIpCookieAddress, visitCount, 7);

    document.querySelector(".overlay-for-subscribe").classList.add("d-none")

    if (visitCount > 5) {
        document.querySelector(".overlay-for-subscribe").classList.remove("d-none")
        document.querySelector(".main-deltails-content").classList.add("d-none")
        // window.location.href = "http://localhost/omnicore/login"
        alert("You have visited this post more than 5 times! Please consider subscribing for more views.");
    }
}

window.onload = totrackVisit