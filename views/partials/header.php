<header class="header">
    <a href="<?= site_url("dashboard.php") ?>" class="logo">
        <img src="assets/images/logo.png" alt="keshmun" height="22px;">
    </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu" style="text-align: right;">

    <li><a href="<?= site_url() ?>">خانه</a></li>

        <?php  if ($session->isUserLoggedIn()): ?>
   
            <li><a href="<?= site_url('dashboard.php?page=storages') ?>">انبار ها</a></li>
            <li><a href="<?= site_url('dashboard.php?page=products') ?>">محصولات</a></li>
            <li><a href="<?= site_url('dashboard.php?page=add-storage') ?>">افزودن انبار</a></li>
            <li><a href="<?= site_url('dashboard.php?page=add-product') ?>">افزودن محصول</a></li>
            <li><a href="<?= site_url('dashboard.php?page=pivot-storage-product') ?>">انبار داری</a></li>
            <li><a href="<?= site_url('?action=logout') ?>">خروج</a></li>

        <?php endif; ?>
    </ul>
</header>