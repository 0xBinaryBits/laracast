   
<?php 
    require ("partials/head.php");
    require ("partials/nav.php");
    require("partials/banner.php")
?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->Welcome To Notes Page
        <?php foreach ($posts as $post ):?>
            <li>
                <a class="text-blue-700 hover:underline" href="/note?id=<?= $post["id"]?>">
                    <?= $post["title"]?>
                </a>
            </li>
        <?php endforeach?>
        </div>
    </main>
    <?php 
    require ("partials/footer.php");
?>