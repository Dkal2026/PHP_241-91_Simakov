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
                <th><i class="fas fa-calendar"></i>Redact/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articles as $article):?>
            <tr>
                <td><?=$article->getId();?></td>
                <td><a class="my-button dancing-script-uniquifier" href="article/<?=$article->getId();?>"><?=$article->getName();?></a></td>
                <td><?=$article->getText();?></td>
                <td><?=$article->getAuthorId()->getNickname();?></td>
                <td><?php echo date('Y-m-d');?></td>
                <td><a class="my-button dancing-script-uniquifier" href="/Simakov/FrameWork/www/article/edit/<?=$article->getId();?>">Redact</a>/<a class="my-button dancing-script-uniquifier" href="/Simakov/FrameWork/www/article/delete/<?=$article->getId();?>">Delete</a></td>
                
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?php require dirname(__DIR__).'/Main/footer.php';?>