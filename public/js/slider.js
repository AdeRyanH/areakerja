window['script' + r] = document.createElement("script");
window['script' + r].type = "text/javascript";
window['script' + r].innerText = 'window["slider' +
    r + '"] =document.getElementById("costum-slider' +
    r + '").addEventListener("input",function(event) {window["value' +
    r + '"] = event.target.value;document.getElementById("current-value' +
    r + '").innerText = window["value' +
    r + '"];});';
document.body.appendChild(window['script' + r]);
r++;