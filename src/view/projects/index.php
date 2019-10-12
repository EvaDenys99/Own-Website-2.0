<div class="main">
  <div class="heardbeat">
    <h2 class="title_page1">Production build</h2>
    <img class="title_page1_img" src="././assets/img/heartbeat.png" alt="heartbeat">
    <img class="title_page1_img01" src="././assets/img/heartbeat-s.png" alt="heartbeat">
    <img class="title_page1_img02" src="././assets/img/heartbeat-m.png" alt="heartbeat">
  </div>
  <section class="projects">
    <?php if (empty($projects)): ?>
      <p>No projects available</p>
    <?php else: ?>
      <?php foreach($projects as $project): ?>
        <a class="project01" href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>">
          <article class="project">
            <!-- <img class="project_img" width="528" height="381" src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png" alt=""> -->
            <picture class="project_img">
              <source
                srcset="
                  ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-s.png   410w,
                  ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-m.png   819w,
                  ././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>-l.png  528w
                "
                sizes=" (min-width: 1440px) 48.5vw,
                (min-width: 1024px) 100vw,
                (min-width: 960px) 100vw,
                (min-width: 624px) 100vw,
                (min-width: 0) 100vw"
                type="image/jpeg"
              />
              <img
                src="././assets/img/projecten/<?php echo $project["name"] ?>/<?php echo $project["mainPic"]?>.png"
                alt="Een foto van het project."
              />
            </picture>
            <p class="project_tags"><?php echo $project["tags"] ?></p>
            <p class="project_title"><?php echo $project["name"] ?></p>
          </article>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>


