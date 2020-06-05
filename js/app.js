window.addEventListener("DOMContentLoaded", (event) => {
    const site_header = document.querySelector("#site-header");
    interactiveHeaderStylesOnScroll(site_header);
    changeNavMobileOnClick(site_header);

    setupLinksWithScroll({ links: "a.link-with-scroll", duration: 500 });

    const newsletter_form = document.querySelector("#newsletter-form");
    newsletter_form.addEventListener("submit", (event) => {
        event.preventDefault();
        const dataToSend = {
            url: "add-to-newsletter.php",
            formData: new FormData(newsletter_form),
            success: () => { 
                document.querySelector("#container-result-form-newsletter").innerHTML = "<p class='success'>S'ha enviat correctament</p>";
                newsletter_form.reset();
            },
            error: () => {
                document.querySelector("#container-result-form-newsletter").innerHTML = "<p class='error'>S'ha produït un error</p>";
            }
        };
        sendDataUsingPOST(dataToSend);
    });

    const more_info_form = document.querySelector("#more-info-form");
    more_info_form.addEventListener("submit", (event) => {
        event.preventDefault();
        const dataToSend = {
            url: "add-to-companies.php",
            formData: new FormData(more_info_form),
            success: () => { 
                document.querySelector("#container-result-form-more-info").innerHTML = "<p class='success'>S'ha enviat correctament</p>";
                more_info_form.reset();
            },
            error: () => {
                document.querySelector("#container-result-form-more-info").innerHTML = "<p class='error'>S'ha produït un error</p>";
            }
        }
        sendDataUsingPOST(dataToSend);
    });

    const cookies_message = document.querySelector("#cookies-message");
    if(cookies_message) {
        const cookies_button = document.querySelector("#cookies-button");
        cookies_button.addEventListener("click", (event) => {
            setCookie("cookies-accepted", true, 1000);
            cookies_message.classList.add("hidden");
        });
    }
});



function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}