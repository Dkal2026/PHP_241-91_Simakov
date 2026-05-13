<?php require dirname(__DIR__).'/Main/header.php';?>
<div class="article-table-container">
    <table class="article-table">
        <tr>

            <td>Id</td>
            <td><?=$article->getId();?></td>
        </tr>
        <tr>

            <td>Title</td>
            <td><?=$article->getName();?></td>
        </tr>
        <tr>

            <td>Text</td>
            <td><?=$article->getText();?></td>
        </tr>
        <tr>

            <td>Author</td>
            <td><?=$author->getNickname();?></td>
        </tr>
    </table>
</div>
<?php require dirname(__DIR__).'/Main/footer.php';?>