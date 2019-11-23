
	function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function switch_color(color) {
    var body = document.getElementsByTagName("BODY")[0];
    var a = document.getElementsByTagName("A");
    var colored = document.getElementsByClassName("colored");
    switch (color) {
        case 'white':
            document.cookie = "color=white";
            document.getElementById("sidebar_logo_img").src = "./img/logo.png";
            document.getElementById("footer_logo_img").src = "./img/logo.png";
            body.style.cssText = "color: black; background: url(./images/christmas-white.png)";
            for (let item of colored) {
                item.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
            }

            for (let item of a) {
                item.style.color = 'black';
            }

            for (let item of colored) {
                item.style.boxShadow = "inset 0 0 30px rgba(0,0,0,0.5)";
            }
            break;
        case 'black':
            document.cookie = "color=black";
            document.getElementById("sidebar_logo_img").src = "./img/logo_light.png";
            document.getElementById("footer_logo_img").src = "./img/logo_light.png";
            for (let item of colored) {
                item.style.backgroundColor = 'rgba(0,0,0,0.8)';
            }
            for (let item of a) {
                item.style.color = 'white';
            }

            for (let item of colored) {
                item.style.boxShadow = "inset 0 0 30px rgba(255,255,255,0.5)";
            }
            body.style.cssText = "color: white; background: url(./images/christmas-dark.png)";
            break;
    }
}