<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text"><?= $title ?></span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="<?= base_url() ?>assets/images/avatars/Robot Avatars_<?= $avatar ?>.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $name ?><br><span class="user-state-info"><?= $id_number ?></span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Main Menu
            </li>
            <li>
                <a href="<?= base_url() ?>" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('scan') ?>" class="active"><i class="material-icons-two-tone">sensors</i>Scanner</a>
            </li>
            <li>
                <a href="<?= base_url('tagSearch') ?>" class="active"><i class="material-icons-two-tone">wifi_find</i>Tag Search</a>
            </li>
            <?php
            if ($this->session->userdata('role_id') == '1') {
            ?>
                <li class="sidebar-title">
                    Manage Accounts
                </li>
                <li>
                    <a href="<?= base_url('users') ?>" class="active"><i class="material-icons-two-tone">people</i>Users</a>
                </li>
                <!-- <li>
                <a href="<?= base_url('roles') ?>" class="active"><i class="material-icons-two-tone">manage_accounts</i>Roles</a>
            </li> -->
            <?php
            }
            if ($this->session->userdata('role_id') != '3') {
            ?>
                <li class="sidebar-title">
                    Options
                </li>
                <li>
                    <a href="<?= base_url('settings') ?>" class="active"><i class="material-icons-two-tone">settings</i>Settings</a>
                </li>
            <?php
            }
            ?>
            <li>
                <a href="<?= base_url('auth/logout') ?>" class="active"><i class="material-icons-two-tone">logout</i>Logout</a>
            </li>

        </ul>
    </div>
</div>
<div class="app-container">
    <div class="search">
        <form>
            <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
    </div>
    <div class="app-header">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-nav" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>