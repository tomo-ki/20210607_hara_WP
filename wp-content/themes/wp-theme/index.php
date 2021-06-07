<?php get_header(); ?>
<div class="top-eyecatch flex">
  <h1>
    Commit to the growth
    <br>
    for everyone
  </h1>
</div>
<main class="main flex">
  <div class="article_area flex-column">
    <div class="article_area-en">New Post</div>
    <h2 class="article_area-ja">新着記事</h2>
    <div class="card_wrapper flex">
      <?php if (have_posts()) : ?>
        <!-- メインループ開始 -->
        <?php while (have_posts()) : the_post(); ?>
          <!-- 個別記事へのリンクの出力 -->
          <a href="<?php the_permalink(); ?>" class="card">
            <!-- カテゴリーの出力 -->
            <?php if (!is_category() && has_category()) : ?>
              <p class="card_category-tag">
                <?php $postcat = get_the_category();
                echo $postcat[0]->name;
                ?>
              </p>
            <?php endif; ?>
            <!-- サムネイルの出力 -->
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('array()', array('class' => 'card_img')); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/no-images.png" alt="no-img" class="card_img">
            <?php endif; ?>
            <!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
            <h3 class="card_title">
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                echo $title . '…';
              } else {
                echo $post->post_title;
              }
              ?>
            </h3>
            <!-- 投稿日時の出力 -->
            <p class="card_date"><?php echo get_the_date('Y-m-d'); ?></p>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>