<?php
  $projectsLoop = new WP_Query(
    array(
      'post_type' => 'projects',
      'posts_per_page' => 12,
    )
  );

  if($projectsLoop->have_posts() ) { ?>
    <section class="projects-archive">
      <div class="wrap">
        <h3>Projects Archive</h3>
        <div class="projects-archive-row">
          <div class="projects-archive-cell-head projects-archive-year">Year</div>
          <div class="projects-archive-cell-head projects-archive-title">Project</div>
          <div class="projects-archive-cell-head projects-archive-agency hide-on-mobile">Agency</div>
          <div class="projects-archive-cell-head projects-archive-tech hide-on-mobile">Built With</div>
          <div class="projects-archive-cell-head projects-archive-links">Links</div>
        </div>
        <?php
          while($projectsLoop->have_posts() ) : $projectsLoop->the_post();

            $project_link = get_field( "project_link" );
            $agency = get_field( "agency" );
            $agency_link = get_field( "agency_link" );
            $tech = get_field( "tech" );
            $repository_link = get_field( "repository_link" );
            $year = get_field("year");

            include(locate_template("template-parts/projects/projects.php"));
          endwhile;
        ?>
      </div>
    </section>
  <?php
  }
?>
