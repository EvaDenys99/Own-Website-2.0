<div class="main">
  <div class="heardbeat">
    <h2 class="title_page1">Production build</h2>
    <img class="title_page1_img" src="././assets/img/heartbeat.png" alt="">
  </div>
  <section>
    <?php if (empty($projects)): ?>
      <p>No projects available</p>
    <?php else: ?>
      <?php foreach($projects as $project): ?>
        <a href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>">
          <p><?php echo $project["tags"] ?></p>
          <p><?php echo $project["name"] ?></p>
          <img src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png" alt="">
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>


