document.getElementById('login-btn').addEventListener('click', function() {
    window.location.href = 'login.html';
});

document.getElementById('signup-btn').addEventListener('click', function() {
    window.location.href = 'signup.html';
});

document.getElementById('get-location-btn').addEventListener('click', function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            document.getElementById('current-location').innerText = `Latitude: ${lat}, Longitude: ${lon}`;
        });
    } else {
        document.getElementById('current-location').innerText = "Geolocation is not supported by this browser.";
    }
});
