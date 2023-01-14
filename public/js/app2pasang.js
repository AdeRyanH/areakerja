if ($(window).width() < 1070) {
    var pasangform = document.getElementById("pasangform");
    var pasangform1 = document.getElementById("pasangform1");
    var pasangform2 = document.getElementById("pasangform2");
    pasangform.style.width='150%';
    pasangform.style.marginLeft='-25%';
    pasangform1.style.width='150%';
    pasangform1.style.marginLeft='-25%';
    pasangform2.style.width='150%';
    pasangform2.style.marginLeft='-25%';
} else if ($(window).width() > 1900) {
    var footer = document.getElementById("footer");
    footer.style.marginTop='4%';
}
