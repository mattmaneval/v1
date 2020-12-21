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
        <table>
          <thead>
            <tr>
              <th class="hide-on-mobile">Year</th>
              <th>Project</th>
              <th >Agency</th>
              <th class="hide-on-mobile">Role</th>
              <th class="hide-on-mobile">Tech</th>
              <th>Links</th>
            </tr>
          </thead>
          <?php
            while($projectsLoop->have_posts() ) : $projectsLoop->the_post();

              $project_link = get_field( "project_link" );
              $agency = get_field( "agency" );
              $agency_link = get_field( "agency_link" );
              $role = get_field( "role" );
              $tech = get_field( "tech" );
              $repository_link = get_field( "repository_link" );
              $year = get_field("year");

              include(locate_template("template-parts/projects/projects.php"));
            endwhile;
          ?>
        </table>
      </div>
    </section>
  <?php
  }
?>
