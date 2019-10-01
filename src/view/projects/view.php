<section>
  <div class="project__detail">
    <img class="project__detail__img" src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png" alt="">
    <div class="project__detail__title">
      <img class="project__detail__img__hart" src="././assets/img/heartbeat_about.png" alt="">
      <h2 class="project__detail__title__name"><?php echo $project["name"] ?></h2>
      <p><?php echo $project["tags"] ?></p>
    </div>
    <div class="project__detail__mini00">
      <div class="project__detail__mini01">
        <div class="project__detail__mini">
            <div>
              <h3>client</h3>
              <?php echo $project["client"] ?>
            </div>
            <div>
              <h3>team</h3>
              <?php echo $project["team"] ?>
            </div>
            <div>
              <h3>role</h3>
              <?php echo $project["role"] ?>
            </div>
            <div>
              <h3>date</h3>
              <?php echo $project["date"] ?>
            </div>
        </div>
        <div>
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
      <?php $iets =explode(", ", $project["img"]) ?>
      <?php foreach($iets as $iet): ?>
        <div class="project__detail__foto">
          <img width="202" height="202" src="././assets/img/projecten/<?php echo $project["name"]?>/<?php echo $iet?>.png" alt="">
        </div>
      <?php endforeach; ?>
      <?php if(!empty ($project["video"])): ?>
        <div>
          <a  href="<?php echo $project['link'];?>">Go look!</a>
        </div>
      <?php endif; ?>
  </div>

  <a class="footerDetail" href="index.php?page=index">
    X Close Project
  </a>
</section>

