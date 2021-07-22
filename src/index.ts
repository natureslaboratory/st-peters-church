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

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

