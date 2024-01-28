<?php require('header.php') ?>

<div class="content spacer center">
    <h1>Pokemon First Generation</h1>
</div> <!-- end content -->
<div class="divider"></div>
<div class="content">
    <div class="flex">

        <?php $query = $mysqli->query("SELECT * FROM pokemon"); ?>
        <?php while ($array = $query->fetch_array()) : ?>

            <div class="col-4">
                <div class="card">
                    <figure>
                        <img src="img/<?php echo $array['foto']; ?>" alt="<?php echo $array['nome']; ?>" width="120" height="120">
                    </figure>
                    <div class="info">
                        <h2><?php echo $array['nome']; ?></h2>
                        <p><?php echo $array['type']; ?></p>
                        <span><a href="#" class="button" style="background-color: <?php echo $array['color']; ?>;">Read more</a></span>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-4 -->

        <?php endwhile; ?>
        <?php $mysqli->close() ?>

    </div> <!-- end flex -->
</div>

</body>

</html>