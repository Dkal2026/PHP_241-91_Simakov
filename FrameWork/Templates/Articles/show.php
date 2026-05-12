<?php require dirname(__DIR__).'/Main/header.php';?>
<div class="article-table-container">
    <table class="article-table">
        <tr>

            <td>Id</td>
            <td><?=$article['id'];?></td>
        </tr>
        <tr>

            <td>Title</td>
            <td><?=$article['name'];?></td>
        </tr>
        <tr>

            <td>Text</td>
            <td><?=$article['text'];?></td>
        </tr>
        <tr>

            <td>Author</td>
            <td><?=$author['nickname'];?></td>
        </tr>
    </table>
</div>
<?php require dirname(__DIR__).'/Main/footer.php';?>