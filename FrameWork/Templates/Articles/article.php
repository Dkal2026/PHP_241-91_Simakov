<?php require dirname(__DIR__).'/Main/header.php';?>
<!-- <?php var_dump($articles);?> -->

<div class="article-table-container">
    <table class="article-table">
        <thead>
            
            <tr>
                <th>id</th>
                <th><i class="fas fa-user"></i>title</th>
                <th><i class="fas fa-envelope"></i>text</th>
                <th><i class="fas fa-phone"></i> Author</th>
                <th><i class="fas fa-calendar"></i>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articles as $article):?>
            <tr>
                <td><?=$article['id'];?></td>
                <td><a href="article/<?=$article['id'];?>"><?=$article['name'];?></a></td>
                <td><?=$article['text'];?></td>
                <td><?=$article['author_id'];?></td>
                <td><?php echo date('Y-m-d');?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require dirname(__DIR__).'/Main/footer.php';?>