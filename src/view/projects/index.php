<div class="main">
  <div class="heardbeat">
    <h2 class="title_page1">Production build</h2>
    <img class="title_page1_img" src="././assets/img/heartbeat.png" alt="">
    <img class="title_page1_img01" src="././assets/img/heartbeat-s.png" alt="">
    <img class="title_page1_img02" src="././assets/img/heartbeat-m.png" alt="">
  </div>
  <section class="projects">
    <?php if (empty($projects)): ?>
      <p>No projects available</p>
    <?php else: ?>
      <?php foreach($projects as $project): ?>
        <a class="project01" href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>">
          <div class="project">
            <img class="project_img" width="528" height="381" src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png" alt="">
            <p class="project_tags"><?php echo $project["tags"] ?></p>
            <p class="project_title"><?php echo $project["name"] ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>


