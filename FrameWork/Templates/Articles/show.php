<?php require dirname(__DIR__).'/Main/header.php';?>

<div class="article-table-container">
    <table class="article-table">
        <tr>
            <th>Id</th>
            <td><?=$article->getId();?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$article->getName();?></td>
        </tr>
        <tr>
            <th>Text</th>
            <td><?=$article->getText();?></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><?=$article->getAuthorId()->getNickname();?></td>
        </tr>
    </table>
</div>

<div class="article-table-container">
    <!-- Форма отправки комментариев -->
    <form action="/Simakov/FrameWork/www/comment/store" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div class="form-group">
            <label for="comment-text">Оставить комментарий</label>
            <!-- Вместо обычного input лучше использовать textarea для длинных текстов -->
            <input type="text" id="comment-text" name="comment" placeholder="Напишите, что вы думаете..." required>
            <input type="hidden" name="getId" value="<?=$article->getId();?>">
        </div>

        <button type="submit" class="submit-btn">Отправить комментарий</button>
    </form>
</div>
<?php if($comments === null):?>
    <p>Комментарии еще не добавлены!</p>
<?php else:?>
<div class="article-table-container">
    <table class="article-table">
        <label for="">Коментарии</label>
        <tr>
                <th><i class="fas fa-user"></i>Author</th>
                <th><i class="fas fa-envelope"></i>text</th>
                <th><i class="fas fa-calendar"></i>Redact/Delete</th>
            </tr>
        <?php foreach($comments as $comment):?>
        <tr>
            <td><?=$article->getAuthorId()->getNickname();?></td>
            <th><?=$comment->getText();?></th>
            <td><a class="my-button dancing-script-uniquifier" href="/Simakov/FrameWork/www/comment/edit/<?=$comment->getId();?>"">Redact</a>/
            <a class="my-button dancing-script-uniquifier" href="/Simakov/FrameWork/www/comment/delete/<?=$comment->getId();?>">Delete</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>
<?php endif;?>

<?php require dirname(__DIR__).'/Main/footer.php';?>