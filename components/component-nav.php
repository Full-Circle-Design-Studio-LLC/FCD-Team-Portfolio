<nav>
    <a class="nav-name" href="<?php echo get_site_url(); ?>/home"><? echo get_field('first_name', 11) . ' ' . get_field('last_name', 11); ?><span class="vertical-slash">&nbsp|&nbsp</span><span class="member-title"><? the_field('title', 11); ?></span></a>
    <button class="menu-button" aria-label="Menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/menu-button.svg" width="40" height="17" alt="menu">
    </button>
    <ul class="nav-items">
        <li><a href="<? get_site_url(); ?>/home">Home</a></li>
        <li><a href="<? get_site_url(); ?>/portfolio">Portfolio</a></li>
        <li><a href="<? get_site_url(); ?>/resume">Resume</a></li>
        <li><a href="<? get_site_url(); ?>/contact">Contact</a></li>
        <li class="close-nav"><button class="close-nav-button">EXIT</button></li>
    </ul>
</nav>