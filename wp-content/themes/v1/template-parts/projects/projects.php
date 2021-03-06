<tbody>
  <tr>
    <td class="year hide-on-mobile"><?php echo $year; ?></td>
    <td class="title"><?php the_title(); ?></td>
    <td class="agency">
      <?php if(empty($agency)) { ?>
        <span>┄</span>
      <?php } else { ?>
          <a href="<?php echo $agency_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit <?php echo $agency; ?>"><?php echo $agency; ?></a>
      <?php } ?>
    </td>
    <td class="tech hide-on-mobile"><?php echo $role; ?></td>
    <td class="tech hide-on-mobile"><?php echo $tech; ?></td>
    <td class="links">
      <div>
        <a href="<?php echo $project_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit <?php the_title(); ?>">
          <svg><use xlink:href="#external-link"/></svg>
        </a>
        <?php if(empty($repository_link)) {} else { ?>
          <a href="<?php echo $repository_link; ?>" target="_blank" rel="noopener noreferrer" title="Visit the <?php the_title(); ?> repository on GitHub.">
            <svg><use xlink:href="#github"/></svg>
          </a>
        <?php } ?>
      </div>
    </td>
  </tr>
</tbody>
