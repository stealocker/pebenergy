/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu and enables TAB key navigation support.
 */
(function() {
    const siteNavigation = document.getElementById('site-header');

    // Return early if the navigation doesn't exist.
    if (!siteNavigation) {
        return;
    }

    const button = document.getElementById('menu-toggle');
    const button_img = button.getElementsByTagName('img')[0];
    const menu_overlay = document.getElementsByClassName('navigation-overlay')[0];

    // Return early if the button doesn't exist.
    if ('undefined' === typeof button) {
        return;
    }

    // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
    button.addEventListener('click', function() {
        siteNavigation.classList.toggle('toggled');

        if (button.getAttribute('aria-expanded') === 'true') {
            button.setAttribute('aria-expanded', 'false');
            menu_overlay.classList.add('navigation-overlay--hidden');
            menu_overlay.classList.remove('navigation-overlay--open');
            button_img.src = lescustom_scripts.templateUrl + "/assets/img/menu-open.svg";
        } else {
            button.setAttribute('aria-expanded', 'true');
            menu_overlay.classList.remove('navigation-overlay--hidden');
            menu_overlay.classList.add('navigation-overlay--open');
            button_img.src = lescustom_scripts.templateUrl + "/assets/img/menu-close.svg";
        }
    });

    function menuToggleKeyDown(e) {
        if (e.key === 'Enter') {
            const button = document.getElementById('menu-toggle');
            const button_img = button.getElementsByTagName('img')[0];
            const menu_overlay = document.getElementsByClassName('navigation-overlay')[0];
            siteNavigation.classList.toggle('toggled');

            if (button.getAttribute('aria-expanded') === 'true') {
                button.setAttribute('aria-expanded', 'false');
                menu_overlay.classList.add('navigation-overlay--hidden');
                menu_overlay.classList.remove('navigation-overlay--open');
                button_img.src = lescustom_scripts.templateUrl + "/assets/img/menu-open.svg";
            } else {
                button.setAttribute('aria-expanded', 'true');
                menu_overlay.classList.remove('navigation-overlay--hidden');
                menu_overlay.classList.add('navigation-overlay--open');
                button_img.src = lescustom_scripts.templateUrl + "/assets/img/menu-close.svg";
            }
        }
    }
}());