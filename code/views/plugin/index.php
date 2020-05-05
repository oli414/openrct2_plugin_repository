<!doctype html>
<html lang="en">

<?php include_once "views/home/partials/head.php"; ?>

<body>

    <?php
    include_once "views/home/partials/nav.php";
    ?>

    <main role="main" class="container plugin-details">

        <div class="row">

            <div class="col-12 title">
                <h1 class="display-1"><?= $plugin['name'] ?></h1>
                <p class="lead">
                    <?= $plugin['description'] ?>
                </p>
            </div>

            <div class="col-12 col-md-3 sidebar">
                <div class="row">
                    <?php if ($plugin['usesCustomOpenGraphImage'] == 1) { ?>
                        <div class="col-12 thumbnail mb-4">
                            <img class="img-fluid" src="<?= $plugin['thumbnail'] ?>" />
                        </div>
                    <?php } ?>

                    <div class="col-12">

                    <a class="download-plugin btn btn-primary" href="<?= $plugin['url'] ?>" target="_blank" role="button"><i class="fab fa-github"></i> Get plugin!</a>

                        <h5>Author:</h5>
                        <a class="author" href="/user/<?= $plugin['owner'] ?>/<?= urlencode($plugin['username']) ?>">
                            <?php if (!empty($plugin['avatarUrl'])) { ?>
                                <img src="<?= $plugin['avatarUrl'] ?>&s=60" class="avatar" />
                            <?php } else { ?>
                                <i class="fas fa-user"></i>
                            <?php } ?>
                            <?= $plugin['username'] ?>
                        </a>

                        <h6>Submitted:</h6>
                        <i class="fas fa-cloud-upload-alt"></i> <?= $plugin['submittedAtRel'] ?>

                        <h6>Updated:</h6>
                        <i class="fas fa-redo"></i> <?= $plugin['updatedAtRel'] ?></span>

                        <h6>Stars:</h6>
                        <i class="fas fa-star"></i> <?= $plugin['stargazers'] ?></span>

                        <h6>Tags:</h6>
                        <span class="tags">
                            <ul>
                                <?php
                                foreach ($plugin['tags'] as $key => $tag) {
                                    echo '<li>' . $tag['tag'] . '</li>';
                                }
                                ?>
                            </ul>
                        </span>

                        <h6>Links:</h6>
                        <span class="links">
                            <a href="<?= $plugin['url'] ?>" target="_blank"><i class="fab fa-github"></i> GitHub Repository</a>
                            <a href="<?= $plugin['ownerUrl'] ?>" target="_blank"><i class="fab fa-github"></i> <?= $plugin['username'] ?> on GitHub</a>
                        </span>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-9 content">
                <div class="description">
                    <?= $Parsedown->text(stripslashes( $plugin['readme'] )) ?>
                </div>
            </div>

        </div>

    </main>


    <?php
    include_once "views/home/partials/footer.php";
    include_once "views/home/partials/bottom.php";
    ?>

</html>