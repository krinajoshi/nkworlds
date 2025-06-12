<script>
  // Google Analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-87739642-1', 'auto');
  ga('send', 'pageview');
</script>

<!--header-->
<header class="site-header">
    <div class="container">
        <div class="header-top-bar">
            <div class="logo">
                <a href="index.php"><img class="logo-img" src="images/logo.png" alt="N.K. Worlds Logo"></a>
            </div>
            <div id="google_translate_element" class="google-translate-element-container"></div>
        </div>

        <nav class="main-navigation" aria-label="Main Navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
            <ul id="primary-menu" class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li class="menu-item-has-children">
                    <a href='#'>About Us</a>
                    <button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Show submenu for About Us</span></button>
                    <ul class="sub-menu">
                        <li><a href="aboutus.php">About US</a></li>
                        <li><a href="ourteam.php">Our Team</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="vision_and_mission.php">Vision & Mission</a></li>
                        <li><a href="whyus.php">Why Us?</a></li>
                        <li><a href="client_list.php">Client List</a></li>
                        <li class="menu-item-has-children">
                            <a href="csr_activities.php">We Support</a>
                            <button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Show submenu for We Support</span></button>
                            <ul class="sub-menu">
                                <li><a href="Ayushya.php">Ayushya:The Way Of Life</a></li>
                                <li><a href="blockcancer.php">BlockCANCER</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href='#'>Products</a>
                    <button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Show submenu for Products</span></button>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Fasteners</a>
                            <button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Show submenu for Fasteners</span></button>
                            <ul class="sub-menu">
                                <li><a href="bolts.php">Bolts</a></li>
                                <li><a href="nuts.php">Nuts</a></li>
                                <li><a href="nail_fastners.php">Nail Fastners</a></li>
                                <li><a href="rivets.php">Rivets</a></li>
                                <li><a href="screw.php">Screw</a></li>
                                <li><a href="studs.php">Studs</a></li>
                                <li><a href="washers.php">Washers</a></li>
                            </ul>
                        </li>
                        <li><a href="Spices.php">Spices</a></li>
                        <li><a href="detergent.php">Detergent Powder</a></li>
                        <li><a href="#">Dispo-Hygine Products</a></li>
                        <li><a href="#">Fiber Glass mesh</a></li>
                        <li><a href="#">Textile Printing thickener</a></li>
                        <li><a href="#">Human hairs</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href='consultancy.php'>Corporate Business & Allied Services</a>
                    <button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Show submenu for Corporate Business & Allied Services</span></button>
                    <ul class="sub-menu c_width">
                        <li><a href="bc.php">Export Business Consultancy</a></li>
                        <li><a href="mc.php">Management Consultancy</a></li>
                        <li><a href="bi.php">Business Intelligence services</a></li>
                        <li><a href="sourcing-services.php">Sourcing Services</a></li>
                    </ul>
                </li>
                <li><a href="client_list.php">Network Clients</a></li>
                <li><a href="contact.php">Contact-us</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--/header-->

<script type="text/javascript">
// Ensure Google Translate initializes correctly
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
// Basic responsive menu toggle and dropdown handling
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('#primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            primaryMenu.classList.toggle('open');
            // Toggle visibility for screen readers
            if (primaryMenu.classList.contains('open')) {
                primaryMenu.setAttribute('aria-hidden', 'false');
            } else {
                primaryMenu.setAttribute('aria-hidden', 'true');
            }
        });
    }

    const dropdownToggles = document.querySelectorAll('.main-navigation .dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            event.preventDefault();
            const parentLi = this.closest('li');
            const subMenu = parentLi.querySelector('.sub-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;

            this.setAttribute('aria-expanded', !expanded);
            if (subMenu) {
                subMenu.classList.toggle('open');
                // Toggle visibility for screen readers
                if (subMenu.classList.contains('open')) {
                    subMenu.setAttribute('aria-hidden', 'false');
                } else {
                    subMenu.setAttribute('aria-hidden', 'true');
                }
            }

            // Close other open submenus at the same level to prevent multiple open dropdowns
            const siblings = parentLi.parentNode.children;
            for (let sibling of siblings) {
                if (sibling !== parentLi && sibling.classList.contains('menu-item-has-children')) {
                    const otherSubMenu = sibling.querySelector('.sub-menu');
                    const otherToggle = sibling.querySelector('.dropdown-toggle');
                    if (otherSubMenu && otherSubMenu.classList.contains('open')) {
                        otherSubMenu.classList.remove('open');
                        otherSubMenu.setAttribute('aria-hidden', 'true');
                        otherToggle.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
    });

    // Add menu-item-has-children class to li elements with sub-menus for easier styling
    const menuItemsWithChildren = document.querySelectorAll('.nav-menu li');
     menuItemsWithChildren.forEach(item => {
        const subMenu = item.querySelector('.sub-menu');
        if (subMenu) {
            item.classList.add('menu-item-has-children');
            // Initialize submenus as hidden for accessibility
            subMenu.setAttribute('aria-hidden', 'true');
        }
    });
    // Initialize main menu as hidden for accessibility if menu toggle is present
    if (menuToggle && primaryMenu) {
         primaryMenu.setAttribute('aria-hidden', 'true');
    }

});
</script>
<style type="text/css">
/* Minimal styles to hide Google Translate banner and ensure body is not pushed down. */
/* These are essential to keep here directly as they target an external widget's behavior immediately. */
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}
body {
    top: 0px !important; /* Necessary to prevent Google Translate pushing body down */
    margin-top: 0 !important;
}
/* Other styles (screen-reader-text, basic menu visibility) have been moved to the main style.css */
</style>
