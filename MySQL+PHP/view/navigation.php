<div class="menu">
    <ul>
        <li>
            <a href="?mode=mainpage">Main page</a>
        </li>
        <li>
            <a href="?mode=gallery">Gallery</a>
        </li>

        <?php if (!isset($_SESSION['username'])) : ?>
        <li>
            <a href="?mode=login">Log in</a>
        </li>
        <li>
            <a href="?mode=register">Create account</a>
        </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['username'])) : ?>
        <li>
            <a href="?mode=image_load">Upload image</a>
        </li>
        <li>
        <a href="?mode=logout">Logi välja</a>
        </li>
        <?php endif; ?>

    </ul>
</div>