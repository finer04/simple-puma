<?php
/**
 * @package Seed
 * @author Finer04
 * @version 1.0.7
 * @link https://fil.fi
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="main-content">
    <section class="container">
        <?php while($this->next()): ?>
            <article class="block block--list wow zoomIn" itemscope itemtype="http://schema.org/BlogPosting" >
					<div class="row">
						<div class="col-sm-12">
						<small style="color: #dcdada;"><?php $this->date('F j, Y'); ?> / </small>
						<small class="text-muted"><?php $this->category(','); ?> / </small>
						<small class="text-muted"><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('有 %d 条评论')); ?></small>
					<h2 itemprop="headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2> 
					</div></div>	
						<div class="row">
                <div class="col-md-12" itemprop="articleBody">
                    <?php $this->excerpt(240, '...'); ?>
                </div></div>
				<div class="row">
				<div class="col-md-6 block-postMetaWrap">
				<a href="<?php $this->permalink() ?>">read more...</a>
				</div>
                </div>				
            </article>
        <?php endwhile; ?>
		
    </section>
    <?php $this->pageNav('<', '>'); ?>
	</main>

<?php $this->need('footer.php'); ?>