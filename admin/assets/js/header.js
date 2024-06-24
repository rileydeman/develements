let forms = document.querySelectorAll("form");

for (let i = 0; i < forms.length; i++) {
    forms[i].childNodes[1].addEventListener("keydown", (e) => {
        if (e.keyCode === "Enter") {
            forms[i].submit();
        }
    })
}

let menuIcon = document.getElementById("menuIconImg");
let menu = document.querySelector("aside");
let menuOpen = false;

menuIcon.addEventListener("click", (e) => {
    menu.style.right = 0;
    menuOpen = !menuOpen;
});

let menuCloseIcon = document.getElementById("exitIcon");

menuCloseIcon.addEventListener("click", (e) => {
    if (windowWidth < 768) {
        menu.style.right = "-80%";
    } else if (windowWidth < 1279) {
        menu.style.right = "-50%";
    }

    menuOpen = !menuOpen;
})

let windowWidth = window.innerWidth;

setInterval(setWidth, 1)

function setWidth() {
    windowWidth = window.innerWidth;

    if (!menuOpen) {
        if (windowWidth < 768) {
            menu.style.right = "-80%";
        } else if (windowWidth < 1279) {
            menu.style.right = "-50%";
        }
    }
}