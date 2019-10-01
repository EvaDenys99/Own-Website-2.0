<section class="project__detail">
  <img src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["detailMainImg"]?>.png" alt="">
  <img src="././assets/img/heartbeat_about.png" alt="">
  <h2><?php echo $project["name"] ?></h2>
  <p><?php echo $project["tags"] ?></p>
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
  <div>
    <h3>all to know ...</h3>
    <?php echo $project["bio"] ?>
  </div>
  <div>
   <?php if(!empty ($project["link"])): ?>
    <a target="_blank" href="<?php echo $project['link'];?>">Go look!</a>
   <?php endif; ?>
  </div>
  <div>
    <?php $iets =explode(", ", $project["img"]) ?>
      <?php foreach($iets as $iet): ?>
      <img src="././assets/img/projecten/<?php echo $project["name"]?>/<?php echo $iet?>.png" alt="">
    <?php endforeach; ?>
  </div>
  <div>
   <?php if(!empty ($project["video"])): ?>
    <a  href="<?php echo $project['link'];?>">Go look!</a>
   <?php endif; ?>
  </div>
  <div class="footerDetail">
    <a class="footerDetail__text" href="index.php?page=index">X Close Project</a>
  </div>
</section>

