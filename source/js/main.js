// 3rd party packages from NPM
import $ from 'jquery';

// Our modules / classes
import MobileNav from './modules/MobileNav';
import Modal from './modules/Modal';
import CookieTray from './modules/CookieTray';
import Preloader from './modules/Preloader';

// Instantiate a new object using our modules/classes

document.addEventListener("DOMContentLoaded", function(event) { 
    var mobileNav = new MobileNav();
    var modal = new Modal();
    var cookieTray = new CookieTray();
    var preloader = new Preloader;
});

