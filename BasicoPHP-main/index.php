<?php
    include_once("templates/header.php");
?>
    <main>
        <div id="titulo-container">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação</p>
        </div>
        <div id="posts-containers">
            <?php foreach($posts as $post): ?>
                <div class="caixa-post">
                    <img src="<?=$BASE_URL?>/img/<?= $post['img']?>" alt="<?=$post['title']?>">
                    <h2 class="titulo-post">
                        <a href="<?=$BASE_URL?>post.php?id=<?= $post['id']?>"><?= $post['title']?></a>
                    </h2>
                    <p id="descricao-post"><?=$post['description']?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags']as $tag): ?>
                            <a href="#"><?=$tag?></a>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>    
    </main>
<?php
    include_once("templates/footer.php")
?>