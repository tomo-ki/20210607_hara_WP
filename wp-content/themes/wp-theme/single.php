<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <main class="main flex">
    <div class="single_content-wrapper">
      <div class="single_uppercontent">
        <!-- カテゴリーの出力 -->
        <?php if (has_category()) : ?>
          <div class="single_category-icon">
            <?php echo get_the_category_list(' '); ?>
          </div>
        <?php endif; ?>
        <!-- タイトルの出力 -->
        <h2 class="single_article-title">
          <?php the_title(); ?>
        </h2>
        <!-- 投稿日時の出力 -->
        <div class="single_article-date">
          <?php echo get_the_date('Y-m-d'); ?>
        </div>
      </div>
      <!-- サムネイルの表示 -->
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('array()', array('class' => 'single_article-img')); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-images.png" alt="no-img" class="single_article-img">
      <?php endif; ?>
      <div class="single_article-textarea">
        <!-- 本文の出力 -->
        <div class="single_article-text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </main>
<?php endif; ?>

<?php get_footer(); ?>