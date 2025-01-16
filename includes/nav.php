<?php include "./languaged/lang.php" ?>
<?php include "./functions.php" ?>

<ul class="nav nav-pills">
    <li class="nav-item">
        <a href="index.php?lang=<?= $lang ?>" class="nav-link active" aria-current="page">
            <?= $translations[$lang]['nav']['home'] ?>
        </a>
    </li>
    <li class="nav-item">
        <a href="contact.php?lang=<?= $lang ?>" class="nav-link">
            <?= $translations[$lang]['nav']['contatti'] ?>
        </a>
    </li>
</ul>

<form id="langForm">
    <select name="lang">
        <?= createLangFields() ?>
    </select>
</form>