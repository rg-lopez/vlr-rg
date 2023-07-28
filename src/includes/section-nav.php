<section class="nav">
    <div class="nav-wrapper">
        <div class="nav-left">
            <a href="#" class="<?= $args['page'] == 'about' ? 'active' : '' ?>">
                <i class="fa-regular fa-user"></i>
            </a>
            <a href="#" class="<?= $args['page'] == 'portfolio' ? 'active' : '' ?>">
                <i class="fa-solid fa-code"></i>
            </a>
        </div>
        <div class="nav-mid">
            <a href="<?= home_url(); ?>">Play</a>
        </div>
        <div class="nav-right">
            <a href="#" class="<?= $args['page'] == 'career' ? 'active' : '' ?>">
                <i class="fa-solid fa-clipboard"></i>
            </a>
            <a href="#" class="<?= $args['page'] == 'contact' ? 'active' : '' ?>">
                <i class="fa-solid fa-phone"></i>
            </a>
        </div>
    </div>
</section>