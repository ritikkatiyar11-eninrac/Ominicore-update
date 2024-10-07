fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
        const ipAddress = data.ip;
        const userData = {
            ip: ipAddress,
            count: 1
        };
        document.cookie = "user_data=" + encodeURIComponent(JSON.stringify(userData)) + "; path=/; max-age=" + 60 * 60 * 24;
    })
    .catch(error => console.error('Error fetching IP address:', error));

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value, days) {
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
}

function totrackVisit() {
    const userDataCookie = getCookie("user_data");
    let userData = userDataCookie ? JSON.parse(decodeURIComponent(userDataCookie)) : { ip: null, count: 0 };

    // Increment visit count
    userData.count = userData.count + 1;
    setCookie("user_data", JSON.stringify(userData), 7);

    console.log(`User IP: ${userData.ip}, Visit Count: ${userData.count}`);

    if (userData.count > 5) {
        alert("You have visited this post more than 5 times! Please consider subscribing for more views.");
    }
}

window.onload = totrackVisit;
