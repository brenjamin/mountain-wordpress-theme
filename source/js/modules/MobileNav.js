

class MobileNav {
    constructor() {
        this.button = $('.mobile-nav__button');
        this.mobileNav = $('.mobile-nav');
        this.events();
    }

    events() {
        this.button.on('click', this.toggleNavigation.bind(this));
    }

    toggleNavigation() {
        this.mobileNav.toggleClass('active');
    }
}

export default MobileNav;