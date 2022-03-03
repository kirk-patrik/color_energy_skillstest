document.addEventListener("DOMContentLoaded", function () {
    // heading letter circle
    let headingCirc = document.querySelectorAll('.isCircle');
    headingCirc.forEach(item => {
        let newHTML = '';
        let splits = item.innerHTML.split('');
        splits.forEach(split => {
            newHTML += `<span>${split}</span>`;
        });
        item.innerHTML = newHTML;
    });
});