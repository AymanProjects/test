import { emblaCarouselAutoplayDefault, emblaCarouselDefault } from './embla-carousel.js';
import { addDotBtnsAndClickHandlers } from './carousel-dot-buttons.js'
const OPTIONS = { loop: true }
const plugins = [emblaCarouselAutoplayDefault()]

export function setupCarousels() {
    const emblaNodes = document.querySelectorAll('.embla');
    console.log(emblaNodes)
    emblaNodes.forEach(node => {
        initCarousel(node);
    });
}

function initCarousel(emblaNode) {
    const viewportNode = emblaNode.querySelector('.embla__viewport')
    const dotsNode = emblaNode.querySelector('.embla__dots')
    const emblaApi = emblaCarouselDefault(viewportNode, OPTIONS, plugins)
    const onNavButtonClick = (emblaApi) => {
        const autoplay = emblaApi?.plugins()?.autoplay
        if (!autoplay) return

        const resetOrStop =
            autoplay.options.stopOnInteraction === false
                ? autoplay.reset
                : autoplay.stop

        resetOrStop()
    }
    const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(
        emblaApi,
        dotsNode,
        onNavButtonClick
    )
    emblaApi.on('destroy', removeDotBtnsAndClickHandlers)
}