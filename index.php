<?php
/*
Template Name: Main page
*/

?>
<?php get_header('main'); ?>

<main>

    <?php if (have_rows('who_we_are_block')): ?>
        <?php while (have_rows('who_we_are_block')): the_row(); ?>

            <section class="who-we-are">
                <div class="who-we-are__container container">
                    <h1 class="who-we-are__title h1">

                        <?php the_sub_field('title'); ?>

                    </h1>
                    <div class="who-we-are__content">
                        <div class="who-we-are__description">

                            <?php the_sub_field('description'); ?>

                        </div>

                        <?php
                        preg_match('~
                            (?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)
                            ([^"&?/\s]{11})
                        ~ix', get_sub_field('video_url'), $matches);

                        if (!empty($matches[1])) : ?>

                            <div class="who-we-are__video">
                                <iframe width="560" height="315" id="who-we-are-video"
                                    src='https://www.youtube.com/embed/<?= $matches[1] ?>'
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video__preview">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/content/video-preview.png" alt="">
                                </div>
                            </div>

                        <?php endif; ?>

                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('we_serve_globally_block')): ?>
        <?php while (have_rows('we_serve_globally_block')): the_row(); ?>

            <section class="we-serve-globally">
                <div class="we-serve-globally__container container">
                    <h2 class="we-serve-globally__title h1">

                        <?php the_sub_field('title'); ?>

                    </h2>
                    <div class="we-serve-globally__description">

                        <?php the_sub_field('description'); ?>

                    </div>
                    <div class="we-serve-globally__content">
                        <div class="we-serve-globally__image">
                            <?php $image = get_sub_field('map_image');
                            echo wp_get_attachment_image($image['ID'], 'full') ?>
                        </div>
                        <?php if (have_rows('grid_items')): ?>

                            <div class="we-serve-globally__grid">

                                <?php while (have_rows('grid_items')) : the_row(); ?>

                                    <div class="grid__item">
                                        <div class="item__image">

                                            <?php $image = get_sub_field('item_image');
                                            echo wp_get_attachment_image($image['ID'], 'full') ?>

                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>
                    </div>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('our_customers_block')): ?>
        <?php while (have_rows('our_customers_block')): the_row(); ?>

            <section class="our-customers">
                <div class="our-customers__container container">
                    <h2 class="h2 our-customers__title">

                        <?php the_sub_field('title'); ?>

                    </h2>
                    <div class="our-customers__description">

                        <?php the_sub_field('description'); ?>

                    </div>

                    <?php if (have_rows('customers_list')): ?>

                        <div class="our-customers__grid">

                            <?php while (have_rows('customers_list')) : the_row(); ?>

                                <a href="<?= get_sub_field('url') ? get_sub_field('url') : '#' ?>" class="grid__item">
                                    <div class="item__image">
                                        <div class="item__icon">

                                            <?php $image = get_sub_field('icon');
                                            echo wp_get_attachment_image($image['ID'], 'full') ?>

                                        </div>
                                        <div class="item__icon item__icon-active">

                                            <?php $image = get_sub_field('icon_active');
                                            echo wp_get_attachment_image($image['ID'], 'full') ?>

                                        </div>
                                        <div class="item__svg">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12.5697" r="12" fill="#FF5E00" />
                                                <path d="M12.7899 17.0596C12.7676 17.0373 12.7499 17.0108 12.7378 16.9817C12.7257 16.9525 12.7195 16.9213 12.7195 16.8898C12.7195 16.8582 12.7257 16.827 12.7378 16.7979C12.7499 16.7687 12.7676 16.7423 12.7899 16.72L16.7001 12.8098L6.71971 12.8098C6.65606 12.8098 6.59501 12.7845 6.55 12.7395C6.505 12.6945 6.47971 12.6334 6.47971 12.5698C6.47971 12.5061 6.505 12.4451 6.55 12.4001C6.59501 12.3551 6.65606 12.3298 6.71971 12.3298L16.7001 12.3298L12.7899 8.41958C12.7676 8.39728 12.7499 8.37081 12.7379 8.34167C12.7258 8.31254 12.7196 8.28131 12.7196 8.24978C12.7196 8.21824 12.7258 8.18702 12.7379 8.15788C12.7499 8.12875 12.7676 8.10228 12.7899 8.07998C12.8122 8.05768 12.8387 8.03999 12.8678 8.02792C12.8969 8.01585 12.9282 8.00964 12.9597 8.00964C12.9912 8.00964 13.0225 8.01585 13.0516 8.02792C13.0807 8.03999 13.1072 8.05768 13.1295 8.07998L17.4495 12.4C17.4718 12.4223 17.4895 12.4487 17.5016 12.4779C17.5137 12.507 17.5199 12.5382 17.5199 12.5698C17.5199 12.6013 17.5137 12.6325 17.5016 12.6617C17.4895 12.6908 17.4718 12.7173 17.4495 12.7396L13.1295 17.0596C13.1072 17.0819 13.0807 17.0996 13.0516 17.1117C13.0225 17.1237 12.9912 17.13 12.9597 17.13C12.9282 17.13 12.8969 17.1237 12.8678 17.1117C12.8387 17.0996 12.8122 17.0819 12.7899 17.0596Z" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item__title">

                                        <?php the_sub_field('title'); ?>

                                    </div>
                                </a>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('leadership_block')): ?>
        <?php while (have_rows('leadership_block')): the_row(); ?>

            <section class="leadership">
                <div class="leadership__container container">
                    <h2 class="h1 leadership__title">

                        <?php the_sub_field('leadership_block_title'); ?>

                    </h2>

                    <?php if (have_rows('leadership_block_items')): ?>

                        <div class="leadership__grid">

                            <?php while (have_rows('leadership_block_items')) : the_row(); ?>

                                <a href="<?= get_sub_field('url') ? get_sub_field('url') : '#' ?>" class="grid__item">
                                    <div class="item__image">

                                        <?php $image = get_sub_field('image');
                                        echo wp_get_attachment_image($image['ID'], 'full') ?>

                                    </div>
                                    <div class="item__image item__image-clone">

                                        <?php $image = get_sub_field('image');
                                        echo wp_get_attachment_image($image['ID'], 'full') ?>

                                    </div>
                                    <div class="item__circle">
                                        <div class="item__icon">
                                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25.5" cy="25.5697" r="25" fill="#194F94" />
                                                <path d="M21.5933 22.4502C21.6656 22.6407 21.6407 32.5692 21.5678 32.65C21.495 32.7306 18.4373 32.7584 18.2907 32.6798C18.2171 32.6404 18.1701 22.4521 18.2432 22.3789C18.2569 22.3651 19.0081 22.3539 19.9124 22.3539H21.5567L21.5933 22.4502Z" fill="white" />
                                                <path d="M31.1187 22.2173C32.1989 22.4373 33.1979 23.2814 33.636 24.3442C33.8083 24.7625 33.9176 25.1295 33.9658 25.452C33.9843 25.576 34.0154 25.7788 34.0348 25.9027C34.0906 26.2578 34.0874 32.6176 34.0315 32.6736C33.9647 32.7405 30.8028 32.7382 30.7473 32.6713C30.7209 32.6394 30.7023 31.6348 30.6909 29.62C30.6714 26.2069 30.6808 26.3206 30.3617 25.6023C29.9774 24.7371 28.6504 24.5194 27.7553 25.1749C27.5797 25.3034 27.2341 25.7118 27.187 25.8464C27.1762 25.8773 27.1318 25.9787 27.0885 26.0717C27.0106 26.2386 27.0095 26.2788 26.9987 29.4416C26.9879 32.5818 26.9863 32.6434 26.9139 32.6822C26.8084 32.7387 23.711 32.7155 23.6533 32.6577C23.5805 32.5847 23.5815 22.4368 23.6543 22.3904C23.6883 22.3687 24.3538 22.3581 25.3413 22.3636L26.9722 22.3726L26.9909 23.0455C27.0128 23.8322 27.0196 23.8423 27.2858 23.4838C28.1073 22.3771 29.5547 21.8989 31.1187 22.2173Z" fill="white" />
                                                <path d="M20.4308 17.3969C22.0341 17.7015 22.335 19.9343 20.87 20.6555C19.7719 21.196 18.4256 20.7045 18.1042 19.6458C17.6831 18.2588 18.8797 17.1022 20.4308 17.3969Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="item__icon item__icon-active">
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="25" fill="#FF5E00" />
                                                <path d="M26.6463 34.3538C26.5999 34.3073 26.563 34.2522 26.5378 34.1915C26.5127 34.1308 26.4997 34.0657 26.4997 34C26.4997 33.9343 26.5127 33.8693 26.5378 33.8086C26.563 33.7479 26.5999 33.6927 26.6463 33.6463L34.7926 25.5L14.0001 25.5C13.8675 25.5 13.7403 25.4474 13.6465 25.3536C13.5528 25.2598 13.5001 25.1326 13.5001 25C13.5001 24.8674 13.5528 24.7402 13.6465 24.6465C13.7403 24.5527 13.8675 24.5 14.0001 24.5L34.7926 24.5L26.6463 16.3538C26.5999 16.3073 26.563 16.2522 26.5379 16.1915C26.5128 16.1308 26.4998 16.0657 26.4998 16C26.4998 15.9343 26.5128 15.8693 26.5379 15.8086C26.563 15.7479 26.5999 15.6927 26.6463 15.6463C26.6928 15.5998 26.748 15.563 26.8086 15.5378C26.8693 15.5127 26.9344 15.4998 27.0001 15.4998C27.0658 15.4998 27.1308 15.5127 27.1915 15.5378C27.2522 15.563 27.3074 15.5998 27.3538 15.6463L36.3538 24.6463C36.4003 24.6927 36.4372 24.7479 36.4624 24.8086C36.4875 24.8693 36.5005 24.9343 36.5005 25C36.5005 25.0657 36.4875 25.1308 36.4624 25.1915C36.4372 25.2522 36.4003 25.3073 36.3538 25.3538L27.3538 34.3538C27.3074 34.4003 27.2523 34.4372 27.1916 34.4623C27.1309 34.4875 27.0658 34.5004 27.0001 34.5004C26.9344 34.5004 26.8693 34.4875 26.8086 34.4623C26.7479 34.4372 26.6928 34.4003 26.6463 34.3538Z" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="item__name">

                                        <?php the_sub_field('name'); ?>

                                    </div>
                                    <div class="item__position">

                                        <?php the_sub_field('position'); ?>

                                    </div>
                                </a>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('services_block')): ?>
        <?php while (have_rows('services_block')): the_row(); ?>

            <section class="services-block">
                <div class="services-block__container container">
                    <h2 class="services-block__title h1">

                        <?php the_sub_field('title'); ?>

                    </h2>
                    <div class="services-block__description">

                        <?php the_sub_field('description'); ?>

                    </div>

                    <?php if (have_rows('services_groups')): ?>
                        <div class="services-block__lists">
                            <?php while (have_rows('services_groups')) : the_row(); ?>

                                <div class="services-block__list">
                                    <div class="list__column">
                                        <div class="list__title">

                                            <?php the_sub_field('group_title'); ?>

                                        </div>
                                    </div>
                                    <div class="list__column">
                                        <div class="list__grid">

                                            <?php if (have_rows('group_services')): ?>
                                                <?php while (have_rows('group_services')) : the_row(); ?>

                                                    <div class="grid__item">
                                                        <div class="item__image">

                                                            <?php $image = get_sub_field('image');
                                                            echo wp_get_attachment_image($image['ID'], 'full') ?>

                                                        </div>
                                                        <div class="item__content">
                                                            <div class="item__title">

                                                                <?php the_sub_field('title'); ?>

                                                            </div>
                                                            <div class="item__description">

                                                                <?php the_sub_field('description'); ?>

                                                            </div>
                                                            <a href="<?= get_sub_field('url') ? get_sub_field('url') : '#' ?>" class="btn btn-orange">Learn More</a>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('reviews_block')): ?>
        <?php while (have_rows('reviews_block')): the_row(); ?>

            <section class="reviews-block">
                <div class="reviews-block__container container">
                    <h2 class="reviews-block__title h1">
                        <?php the_sub_field('title'); ?>
                    </h2>

                    <?php if (have_rows('reviews_list')): ?>

                        <div class="reviews-block__slider swiper">
                            <div class="swiper-wrapper">

                                <?php while (have_rows('reviews_list')) : the_row(); ?>

                                    <div class="swiper-slide reviews-block__slide">
                                        <div class="slide__head">
                                            <div class="slide__image">

                                                <?php $image = get_sub_field('image');
                                                echo wp_get_attachment_image($image['ID'], 'full') ?>

                                            </div>
                                            <div class="slide__info">
                                                <div class="slide__name">

                                                    <?php the_sub_field('name'); ?>

                                                </div>
                                                <div class="slide__position">

                                                    <?php the_sub_field('position'); ?>

                                                </div>
                                            </div>
                                            <div class="slide__logo">

                                                <?php $image = get_sub_field('logo');
                                                echo wp_get_attachment_image($image['ID'], 'full') ?>

                                            </div>
                                        </div>
                                        <div class="slide__content">
                                            <?php the_sub_field('text'); ?>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>
                            <div class="swiper-navigation">
                                <div class="swiper-navigation__prev">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4999 5.56988C14.7336 5.56943 14.96 5.6508 15.1399 5.79988C15.2412 5.88383 15.3249 5.98693 15.3863 6.10328C15.4476 6.21963 15.4854 6.34693 15.4975 6.47791C15.5096 6.60889 15.4957 6.74096 15.4566 6.86656C15.4176 6.99217 15.3542 7.10883 15.2699 7.20988L10.7899 12.5699L15.1099 17.9399C15.193 18.0422 15.255 18.1599 15.2925 18.2862C15.3299 18.4125 15.342 18.545 15.3281 18.6761C15.3141 18.8071 15.2744 18.9341 15.2113 19.0497C15.1481 19.1653 15.0627 19.2674 14.9599 19.3499C14.8565 19.4409 14.7353 19.5096 14.6041 19.5516C14.4728 19.5936 14.3343 19.608 14.1972 19.5939C14.0601 19.5798 13.9274 19.5375 13.8074 19.4697C13.6874 19.4019 13.5827 19.3101 13.4999 19.1999L8.66995 13.1999C8.52287 13.021 8.44246 12.7965 8.44246 12.5649C8.44246 12.3333 8.52287 12.1088 8.66995 11.9299L13.6699 5.92988C13.7703 5.80887 13.8977 5.7132 14.0419 5.65065C14.1861 5.58811 14.343 5.56043 14.4999 5.56988Z" fill="white" />
                                    </svg>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-navigation__next">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5001 19.5698C10.2664 19.5702 10.04 19.4888 9.86005 19.3398C9.75879 19.2558 9.67509 19.1527 9.61374 19.0364C9.55239 18.92 9.51459 18.7927 9.50251 18.6617C9.49044 18.5308 9.50432 18.3987 9.54337 18.2731C9.58241 18.1475 9.64585 18.0308 9.73005 17.9298L14.2101 12.5698L9.89005 7.19977C9.80699 7.09748 9.74495 6.97978 9.70752 6.85344C9.67009 6.7271 9.658 6.59461 9.67194 6.46358C9.68587 6.33255 9.72557 6.20557 9.78875 6.08994C9.85192 5.9743 9.93732 5.87229 10.0401 5.78976C10.1435 5.69873 10.2647 5.63006 10.3959 5.58807C10.5272 5.54608 10.6657 5.53168 10.8028 5.54576C10.9399 5.55985 11.0726 5.60212 11.1926 5.66992C11.3126 5.73772 11.4173 5.82959 11.5001 5.93976L16.3301 11.9398C16.4771 12.1187 16.5575 12.3431 16.5575 12.5748C16.5575 12.8064 16.4771 13.0308 16.3301 13.2098L11.3301 19.2098C11.2297 19.3308 11.1023 19.4264 10.9581 19.489C10.8139 19.5515 10.657 19.5792 10.5001 19.5698Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>