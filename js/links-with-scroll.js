/**
 * It sets up the links you specify with the ability to scroll to the specified positions
 * @param {{links: string, positions: array, duration: int}} links_with_scroll
 * @param {{section_id: string, offset: integer}} links_with_scroll.positions[x]
 */
function setupLinksWithScroll(links_with_scroll) {
    let link_objects = document.querySelectorAll(links_with_scroll.links);
    let duration = links_with_scroll.duration;

    link_objects.forEach(link_object => {
        let section_id = link_object.getAttribute("href");
        let section_object = document.querySelector(section_id);

        let offset = parseInt(section_object.dataset.offsetOnScroll);

        let positionY = section_object.offsetTop - offset;

        link_object.addEventListener("click", (event) => {
            event.preventDefault();
            scrollToY(positionY, duration);
        });
    });
}