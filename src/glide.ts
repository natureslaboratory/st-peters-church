import Glide, { Images } from "@glidejs/glide";

function getSlides(glide: HTMLElement) {
    return Array.from(glide.getElementsByClassName("c-carousel__slide") as HTMLCollectionOf<HTMLElement>).filter(e => !e.classList.contains("glide__slide--clone"));
}

function getCaptionDiv(glide: HTMLElement) {
    return glide.getElementsByClassName("c-carousel__caption")[0];
}

function getCurrentCaption(glide: HTMLElement, index: number) {
    let slide = getSlides(glide)[index];
    let slideCaption = (slide.getElementsByClassName("c-carousel__slide-caption") as HTMLCollectionOf<HTMLElement>)[0];

    return slideCaption.innerHTML;
}

function setCurrentCaption(glide: HTMLElement, caption: string) {
    let captionDiv = getCaptionDiv(glide);
    if (!captionDiv) {
        console.log("no caption div")
        return;
    } else {
        console.log(captionDiv)
    }
    captionDiv.innerHTML = caption;
}

function hideCaption(glide: HTMLElement) {
    let captionDiv = getCaptionDiv(glide);
    captionDiv.classList.add("hide");
}

function showCaption(glide: HTMLElement) {
    let captionDiv = getCaptionDiv(glide);
    captionDiv.classList.remove("hide");
}

const carousels = Array.from(document.getElementsByClassName("glide") as HTMLCollectionOf<HTMLElement>);

carousels.forEach(c => {
    const glide = new Glide(c, {
        type: "carousel"
    })

    glide.on("run.before", () => {
        hideCaption(c);
    })
    
    glide.on("move.after", () => {
        let newCaption = getCurrentCaption(c, glide.index as number)
        setCurrentCaption(c, newCaption);
        showCaption(c);
    })
    
    glide.on("mount.after", () => {
        let newCaption = getCurrentCaption(c, glide.index as number)
        setCurrentCaption(c, newCaption);
    })
    
    glide.mount();
    
    glide.play(5000);
})





