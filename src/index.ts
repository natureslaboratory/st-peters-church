import "@natureslaboratory/responsive-nav";
import "./glide";

const scrollToTopButton = document.getElementById("scrollToTop");
scrollToTopButton.addEventListener("click", () => {
    window.scrollTo(0, 0);
})

const postTitle = document.getElementById("postTitle");
console.log(postTitle.style.fontSize);
if (postTitle.innerHTML.length > 15) {
    postTitle.classList.add("c-hero__title--small");
}

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener("resize", () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
})

