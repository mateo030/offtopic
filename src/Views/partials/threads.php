<table class="table table-hover text-center align-middle">
<thead class="table" style="border-bottom: 2px solid #ced4da;">
    <tr>
        <th scope="col" class="w-50 text-start">Topic</th>
        <th scope="col" class="w-25">Replies</th>
    </tr>
</thead>
<tbody>
    <?php
        if (isset($_SESSION["threads"]) && !empty($_SESSION["threads"])) {
            foreach ($_SESSION["threads"] as $thread) {
                ?>
                <tr style="border-left: 2px solid <?= color($thread['category']) ?>;">
                    <td class="text-start">
                        <a href="content?id=<?= $thread["post_id"]?>" class="text-decoration-none text-primary">
                            <?= $thread["title"] ?>
                        </a>
                    </td>
                    <td><?= $thread["replies"] ?></td>
                </tr>
                <?php
            }   
        }
    ?>
</tbody>
</table>
