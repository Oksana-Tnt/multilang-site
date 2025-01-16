<?php include "./languaged/lang.php" ?>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
            <a href="index.php?lang=<?= $lang ?>" class="nav-link px-2 text-body-secondary">
                <?= $translations[$lang]['nav']['home'] ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="contact.php?lang=<?= $lang ?>" class="nav-link px-2 text-body-secondary">
                <?= $translations[$lang]['nav']['contatti'] ?>
            </a>
        </li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>

<script src="./js/script.js"></script>
</body>

</html>