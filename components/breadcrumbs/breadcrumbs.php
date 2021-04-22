    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <?php
                ?><li><?php echo $content ?></li><?php
                                                    if (isset($_GET["item"])) {
                                                    ?><li><?php echo $item ?></li><?php
                                                                                }
                                                                                    ?>
            </ol>

            <?php
            if (isset($_GET["item"])) {
            ?><h2 class="text-uppercase"><?php echo $item ?></h2><?php
                                                                } else {
                                                                    ?><h2 class="text-uppercase">
                <?php echo $content ?></h2><?php
                                                                } ?>
        </div>
    </section><!-- End Breadcrumbs -->