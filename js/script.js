

/* Script upon Mouse Enter the Social Media Icons
        - Animates using Animate.css */
$("a.social-media-button").on("mouseenter", function(){
    $(this).addClass("animate__animated animate__heartBeat");
});

/* Script upon Mouse Leave the Social Media Icons
        - Animates using Animation.css  */
$("a.social-media-button").on("mouseleave", function(){
    $(this).removeClass("animate__animated animate__heartBeat");
});

/* Script upon Mouse Enter on the Contact Us form "Send Button"
        - Animates using Animate.css */
$("button.contact-us-form-submit-button").on("mouseenter", function(){
    $(this).addClass("animate__animated animate__pulse")
});

/* Script upon Mouse Leaving the Contact Us form "Send Button"
        - Animates using Animate.css */
$("button.contact-us-form-submit-button").on("mouseleave", function(){
    $(this).removeClass("animate__animated animate__pulse")
});

/* Contact Form validation script */
var form = document.querySelector('.needs-validation');
form.addEventListener('submit', function(event){
if(form.checkValidity() == false){
    event.preventDefault();
    event.stopPropagation();
}
form.classList.add('was-validated')
});

// TODO Bootstrap popover for Blog button on Navbar - Remove once blog button is functional
$(function () {
    $('[data-toggle="popover"]').popover()
});