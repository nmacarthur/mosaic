<?php // TEXT & IMAGE BLOCK

if( get_row_layout() == 'text_image' ):



$media = get_sub_field('media');

$text = get_sub_field('text_block');

$image = get_sub_field('image');

$videoEmbedCode = get_sub_field('video_embed_code');
$videoCoverImage = get_sub_field('video_cover_image');

$layout = get_sub_field('layout');
$flipLayout = get_sub_field('flip_layout');
$spaceBelow = get_sub_field('space_below');

$line = get_sub_field('line');


?>

  <div class="container space-below--<?php echo $spaceBelow ?>">

      <div class="row flippable <?php if( $flipLayout == 'yes' ): echo 'flippable--flip'; endif; ?>">
          <div class=" flippable__text <?php if( $layout == '1/3' ): echo 'col-md-7'; endif; if($flipLayout == 'yes'): echo ' offset-md-1'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-4'; endif; ?>">
              <?php echo $text ?>
              <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
          </div>
          <div class="<?php if( $layout == '1/3' ): echo 'col-md-4'; endif; ?> <?php if($flipLayout != 'yes' ): echo 'offset-md-1'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-8'; endif; ?> flippable__image">

            <?php if( $media == 'image' ): ?>
              <?php if( !empty($image) ):

                // vars
                $url = $image['url'];
                $alt = $image['alt'];

               ?>
                <img class="rounded" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
              <?php endif; //end $image ?>

            <?php endif; //end $media ?>

            <?php if( $media == 'gallery' ): ?>

            <?php endif; //end $media ?>

            <?php if( $media == 'video' ): ?>

              <div class="video-cover rounded">
              	<div class="background-image-holder rounded">
                  <?php if( !empty($videoCoverImage) ):

                    // vars
                    $url = $videoCoverImage['url'];
                    $alt = $videoCoverImage['alt'];

                   ?>
                    <img class="rounded" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"/>
                  <?php endif; //end $image ?>
              	</div>
              	<div class="video-play-icon video-play-icon--sm"></div>
                <div class="embed-container rounded">
              	   <?php echo $videoEmbedCode; ?>
                </div>
              </div><!--end video cover-->

            <?php endif; //end $media ?>
          </div>
      </div>

      <?php if($line):
      ?>
      <div class="line"></div>
      <?php endif; ?>
    </div>

<?php endif; //end text_image row

?>
