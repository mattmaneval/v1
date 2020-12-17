<div class="projects-archive-row">
  <div class="projects-archive-cell projects-archive-year"><?php echo $year; ?></div>
  <div class="projects-archive-cell projects-archive-title"><?php the_title(); ?></div>
  <div class="projects-archive-cell projects-archive-agency hide-on-mobile">
    <?php if(empty($agency)) { ?>
      <span>┄</span>
    <?php } else { ?>
        <a href="<?php echo $agency_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit <?php echo $agency; ?>"><?php echo $agency; ?></a>
    <?php } ?>
  </div>
  <div class="projects-archive-cell projects-archive-tech hide-on-mobile"><?php echo $tech; ?></div>
  <div class="projects-archive-cell projects-archive-links">
    <?php if(empty($repository_link)) {} else { ?>
      <a href="<?php echo $repository_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit the <?php the_title(); ?> repository on GitHub.">
        <svg><use xlink:href="#code"/></svg>
      </a>
    <?php } ?>
    <a href="<?php echo $project_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit <?php the_title(); ?>">
      <svg><use xlink:href="#external-link"/></svg>
    </a>
  </div>
</div>
