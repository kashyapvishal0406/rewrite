<?php
$menu_categories_sql = "SELECT * FROM service_category ORDER BY display_order ASC LIMIT 12";
$menu_categories_result = mysqli_query($conn, $menu_categories_sql);
?>
<div class="primary-menu">
    <nav class="navbar navbar-expand-lg align-items-center">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div class="">
                        <h4 class="logo-text">Dashtrans</h4>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav align-items-center flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <div class="parent-icon"><i class="bx bx-home-alt"></i>
                            </div>
                            <div class="menu-title d-flex align-items-center">Home</div>
                        </a>
                    </li>
                    <?php
                    while ($menu_categories_row = mysqli_fetch_assoc($menu_categories_result)) {
                        $category_id = $menu_categories_row['id'];
                        $category_name = $menu_categories_row['name'];
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                                </div>
                                <div class="menu-title d-flex align-items-center">
                                    <?php echo $category_name; ?>
                                </div>
                                <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $menu_service_sql = "SELECT * FROM `service` WHERE category_id = $category_id";
                                $menu_service_result = mysqli_query($conn, $menu_service_sql);
                                while ($menu_service_row = mysqli_fetch_assoc($menu_service_result)) {
                                    $menu_service_id = $menu_service_row['id'];
                                    $menu_service_name = $menu_service_row['service_name'];
                                    ?>
                                    <li><a class="dropdown-item"
                                            href="service_order_router.php?service_id=<?php echo $menu_service_id; ?>&service_name=<?php echo $menu_service_name; ?>&category_id=<?php echo $category_id; ?>"><i
                                                class='bx bx-table'></i>
                                            <?php echo $menu_service_name; ?>
                                        </a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>