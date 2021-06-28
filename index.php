<?php
    $view = "Home";
    include_once("./inc/header.php");
?>

<div class="welcome">
    <div class="text">
        <h1>Welcome</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi exercitationem perspiciatis quis impedit quam ducimus dolorem nesciunt atque ipsam qui, libero ab, quaerat dolor quas dicta soluta sequi excepturi repellat quasi cupiditate iure obcaecati a saepe odio? </p>
        <div class="btns">
            <a class="btn btn-outline-light mx-2" href="<?php echo APP_URL; ?>views/movies.php">See all movies</a>
            <a class="btn btn-outline-light mx-2" href="<?php echo APP_URL; ?>views/booking.php">Book the ticket</a>
        </div>
        <div class="scroll">
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
</div>

<div class="container" id="about">
    <h1 class="text-center my-2">
        About us
    </h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, vel. Facere beatae velit cum, magnam eaque expedita temporibus. Aperiam aliquid deleniti, vel atque iste assumenda delectus neque, consequuntur ex nostrum totam facilis saepe eveniet amet cumque doloremque adipisci. Vero est consequatur sequi commodi repellendus, suscipit ad quod deleniti in error dolor, aut a iusto inventore facere placeat cum iste repellat illo! Est esse corrupti animi qui sit blanditiis? Vel aut nihil officiis et quia tempora id deleniti voluptatem, quo explicabo quod quos illo nemo sed adipisci dolorem magnam repellat. Assumenda perferendis laborum sit placeat esse quibusdam ducimus officia culpa amet in, earum dicta fugit dignissimos architecto quidem officiis. Fuga ad, commodi reiciendis exercitationem possimus, recusandae sed adipisci iusto perspiciatis, nihil at enim quas quos. Inventore magni quae magnam ea a exercitationem voluptate iste perspiciatis sed, voluptatem molestias quis! Commodi corporis, praesentium blanditiis quasi ipsa dignissimos hic animi unde molestiae, ex sit, soluta ab. Ducimus, consequuntur. Quo incidunt illum, quod et dolorem aut voluptatibus voluptate. Nulla consequatur expedita quasi, deleniti labore aliquid cumque veniam maiores eaque modi perspiciatis. Optio dolorem mollitia explicabo minus suscipit quae sequi! Illo animi impedit eum, laudantium nostrum quia vel cumque exercitationem possimus voluptatum.</p>
    </p>
</div>

<?php
    include_once("./inc/footer.php");
?>

