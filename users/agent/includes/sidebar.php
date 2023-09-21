<div class="col-lg-2">
    <div class="accordion" id="accordionExample">
        <!-- <ul> -->
        <?php
        $sidebar_categories_sql = "SELECT * FROM service_category ORDER BY display_order";
        $sidebar_categories_result = mysqli_query($conn, $sidebar_categories_sql);
        while ($sidebar_categories_row = mysqli_fetch_assoc($sidebar_categories_result)) {
            $sidebar_category_id = $sidebar_categories_row['id'];
            $sidebar_category_name = $sidebar_categories_row['name'];
            $sidebar_vendor_type = $sidebar_categories_row['type'];
            $sidebar_category_name = str_replace(' ', '_', $sidebar_category_name); // Replace spaces with underscores
            ?>



            <div class="accordion-item bg-primary">
                <h2 class="accordion-header" id="<?php echo 'heading_' . $sidebar_category_name; ?>">
                    <?php
                    if ($sidebar_vendor_type == 1) {
                        ?>
                        <button class="accordion-button" type="button" >
                            <a href="category_vendors.php?category_id=<?php echo $sidebar_category_id; ?>&category_name=<?php echo $sidebar_category_name;?>"><?php echo $sidebar_category_name; ?></a>
                        </button>
                        <?php
                    } else {
                        ?>
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'collapse_' . $sidebar_category_name; ?>" aria-expanded="true"
                            aria-controls="collapseOne">
                            <?php echo $sidebar_category_name; ?>
                        </button>
                    <?php } ?>
                </h2>
                <div id="<?php echo 'collapse_' . $sidebar_category_name; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo 'heading_' . $sidebar_category_name; ?>"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <ul>
                            <?php
                            $service_category_sql = "SELECT * FROM service WHERE category_id = $sidebar_category_id";
                            $service_category_result = mysqli_query($conn, $service_category_sql);
                            while ($service_category_row = mysqli_fetch_assoc($service_category_result)) {
                                $sidebar_service_name = $service_category_row['service_name'];
                                $sidebar_service_id = $service_category_row['id'];

                                ?>
                                <li>
                                    <h6><a href="service_order_router.php?service_id=<?php echo $sidebar_service_id; ?>&service_name=<?php echo $sidebar_service_name; ?>&category_id=<?php echo $sidebar_category_id; ?>"
                                            class="category_list"><?php echo $sidebar_service_name; ?></a></h6>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="accordion-item bg-primary">
            <h2 class="accordion-header" id="heading_commision_structure">
                <a href="commission.php" class="accordion-button" type="button" aria-expanded="true">Commission Structure</a>
            </h2>
        </div>



    </div>
    <!-- </ul> -->
</div>