function base_url() {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);
    if (url.hostname === "localhost" || url.hostname === "127.0.0.1") {
        let segment = url.pathname.split('/');
        return url.protocol + "//" + url.host + '/' + segment[1] + '/';
    } else {
        return url.protocol + "//" + url.hostname + '/omni/';
    }
}
