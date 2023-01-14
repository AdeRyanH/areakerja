const translate = document.querySelectorAll(".translate");
const big_title = document.querySelector(".big-title");
const header = document.querySelector("header");
const shadow = document.querySelector(".shadow");
const content = document.querySelector(".content");
const section = document.querySelector("section");
const image_container = document.querySelector(".imgContainer");
const opacity = document.querySelectorAll(".opacity");
const border = document.querySelector(".border");

// let header_height = header.offsetHeight;
let section_height = section.offsetHeight;

if ($(window).width() < 1070) {
    var formluar = document.getElementById("form-luar");
    var maincontent = document.getElementById("main-content");
    var formdalam = document.getElementById("form-dalam");
    formluar.style.width='100%';
    formluar.style.marginLeft='5%';
    formluar.style.marginRight='5%';
    formdalam.style.width='100%';
    formdalam.style.marginLeft='0%';
    formdalam.style.marginRight='5%';
    // maincontent.style.marginTop='60%';
    // document.getElementById("slick").style.display='none';
    document.getElementById("top-rate-side").style.display='block';
}

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;
    let sectionY = section.getBoundingClientRect();

    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    });

    opacity.forEach(element => {
        element.style.opacity = scroll / (sectionY.top + section_height);
    })

    big_title.style.opacity = - scroll / (header_height / 2) + 1;
    shadow.style.height = `${scroll * 0.5 + 300}px`;

    content.style.transform = `translateY(${scroll / (section_height + sectionY.top) * 50 - 50}px)`;
    image_container.style.transform = `translateY(${scroll / (section_height + sectionY.top) * -50 + 50}px)`;

    border.style.width = `${scroll / (sectionY.top + section_height) * 30}%`;
})
