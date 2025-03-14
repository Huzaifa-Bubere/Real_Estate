// JavaScript code to toggle content when a help link is clicked
const helpLinks = document.querySelectorAll('.help-link');
const helpContents = document.querySelectorAll('.help-content');

helpLinks.forEach((link, index) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        helpContents.forEach((content, contentIndex) => {
            if (contentIndex === index) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
});
