<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }

    }

?>
    <main id="post-container">
        <div class="conteudo-container">
            <h1 id="titulo-principal"><?= $currentPost['title'] ?></h1>
            <p id="descricao-post"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="conteudo-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque mollitia eveniet assumenda, magnam alias laborum. Natus inventore iure ipsum, velit tempora perferendis illum illo est deserunt ducimus enim neque repellat?
            Consequuntur velit vero sapiente ut ipsum at in maxime dolorum maiores sed. Sed explicabo quibusdam animi consequatur fugit fuga repellendus ipsam similique beatae iusto quisquam laboriosam, nihil ad ex excepturi.
            Fugit, itaque cum. Modi, ullam omnis corrupti delectus dolorum fugit quaerat aspernatur debitis dolore blanditiis est unde aut quis iste ab. Quaerat rerum quos, nobis sequi sint autem assumenda accusantium!</p>
        </div>
        <aside id="nav-container">
        <h3 id="titulo-tags">Tags</h3>
        <ul id="lista-tags">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="titulo-categoria">Categorias</h3>
        <ul id="lista-categoria">
            <?php foreach($categories as $categoria): ?>
                <li><a href="#"><?=$categoria?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
    </main>
    
<?php
    include_once("templates/footer.php");
?>
