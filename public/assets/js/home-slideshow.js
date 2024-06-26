//Creating the needed variables
const imgs = ["zwembad_modern.jpg", "nieuwtuin2.jpg", "nieuwtuin3.jpg"];
let slideShow = document.getElementById("homeSlideShow");
let index = 0;

//Set the first image
slideShow.style.backgroundImage = `url('${BASEURL}public/assets/img/${imgs[0]}')`;
index++;

//Set interval time to change the image
setInterval(changeImage, 10000)

//The image change funtion
function changeImage() {
    //changing the image
    slideShow.style.backgroundImage = `url('${BASEURL}public/assets/img/${imgs[index]}')`;
    index++

    //Reset index variable when needed
    if (index >= imgs.length) {
        index = 0;
    }
}