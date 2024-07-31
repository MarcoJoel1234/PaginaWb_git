import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu-button');
    const dropdownContent = document.querySelector('.dropdown-content');

    menuButton.addEventListener('click', function () {
        showOrCloseMenu(menuButton, dropdownContent);
    });
});


function showOrCloseMenu(button, dropdownContent) {
    if (dropdownContent.style.display === 'none' || dropdownContent.style.display === '') {
        button.style.backgroundColor = '#fcfcfc';
        dropdownContent.style.display = 'block';
    }else{
        button.style.backgroundColor = '#0e5dd3';
        dropdownContent.style.display = 'none';
    }
}
