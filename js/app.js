window.addEventListener("DOMContentLoaded", (event) => {
    const site_header = document.querySelector("#site-header");
    const white_list_items = document.querySelectorAll(".white-list-item");
    const logo_site = document.querySelector("#logo-site-header");
    window.addEventListener("scroll", (event) => {
        updateHeader(site_header, white_list_items, logo_site);
    });
    updateHeader(site_header, white_list_items, logo_site);
});


function updateHeader(site_header, white_list_items, logo_site){
    if(window.scrollY == 0) {
        site_header.classList.add("header-background-hidden");
        white_list_items.forEach(item => { item.classList.add("nav-item-show-line"); });
    } else {
        site_header.classList.remove("header-background-hidden");
        white_list_items.forEach(item => { item.classList.remove("nav-item-show-line"); });
        if(window.scrollY > window.screen.height/2) {
            logo_site.classList.remove("logo-hidden");
        } else {
            logo_site.classList.add("logo-hidden");
        }
    }
}