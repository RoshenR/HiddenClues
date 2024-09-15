document.querySelector('.rules_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#rules_section').scrollIntoView({
        behavior: 'smooth'
    });
});

document.querySelector('.section_btn').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#first_section').scrollIntoView({
        behavior: 'smooth'
    });
});
