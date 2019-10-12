<section>
  <div class="project__detail">
    <!-- <img class="project__detail__img" src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png" alt=""> -->
    <picture class="project__detail__img">
      <source
        srcset="
          ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-s.png   307w,
          ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-m.png   495w,
          ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-l.png  528w
          "
        sizes=" (min-width: 1440px) 30vw,
          (min-width: 1024px) 50vw,
          (min-width: 624px) 50vw,
          (min-width: 0) 99vw"
          type="image/jpeg"
        />
        <img
          src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png"
           alt="Een foto van het project."
        />
    </picture>
    <div class="project__detail__title">
      <img class="project__detail__img__hart" src="././assets/img/heartbeat_about.png" alt="">
      <h2 class="project__detail__title__name"><?php echo $project["name"] ?></h2>
      <p><?php echo $project["tags"] ?></p>
    </div>
    <div class="project__detail__mini00">
      <div class="project__detail__mini01">
          <div class="client">
            <h3>client</h3>
            <?php echo $project["client"] ?>
          </div>
          <div class="team">
            <h3>team</h3>
            <?php echo $project["team"] ?>
          </div>
          <div class="role">
            <h3>role</h3>
            <?php echo $project["role"] ?>
          </div>
          <div class="date">
            <h3>date</h3>
            <?php echo $project["date"] ?>
          </div>
          <div class="bio">
            <h3>all to know ...</h3>
            <?php echo $project["bio"] ?>
          </div>
      </div>
    </div>
    <div class="detail__button">
      <?php if(!empty ($project["link"])): ?>
        <a target="_blank" class="project__detail__button" href="<?php echo $project['link'];?>">Go look!</a>
      <?php endif; ?>
    </div>
  </div>

  <div class="project__detail__fotos__videos">
      <?php if(!empty ($project["img"])): ?>
        <?php $iets =explode(", ", $project["img"]) ?>
        <?php foreach($iets as $iet): ?>
          <div class="project__detail__foto">
            <img width="202" height="202" src="././assets/img/projecten/<?php echo $project["name"]?>/<?php echo $iet?>.png" alt="">
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if(!empty ($project["video"])): ?>
        <div>
          <a  href="<?php echo $project['link'];?>">Go look!</a>
        </div>
      <?php endif; ?>
  </div>

  <a class="footerDetail<?php if(empty ($project['img'])) echo '-none';?>" href="index.php?page=index">
    X Close Project
  </a>
</section>

