<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package default
 */

?>

<section class="diagn" id="diagn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="common__title d-flex">
                    <h2 class="diagn__title">
                        НАПРЯМКИ ДІАГНОСТИКИ
                    </h2>
                    <div class="text_block"></div>
                </div>
                    <div class="d-grid diagn_list">
                        <!-- 1 -->

                        <?php
                            if(have_rows('df_diagnositck')):
                                while(have_rows('df_diagnositck')) : the_row();
                                ?>
                                <div class="diagn_item">
                                <a href="<?php the_sub_field('df_dignostik_link') ?>">
                                    <div class="img_cont">
                                    <?php 
                                    
                                    $image = get_sub_field('df_dignostik_image');
                                    echo file_get_contents($image['url']); 
                                    ?>
                                    </div>
                                    <p>
                                        <?php the_sub_field('df_dignostik_name'); ?>
                                    </p>
                                </a>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>

                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex">
                    <h2 class="part__title">
                        НАШІ ПАРТНЕРИ
                    </h2>
                    <div class="text_block"></div>
                </div>
            </div>
        </div>

    <section class="partners" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="parts d-grid">
                        <div class="part__company">

                        </div>
                        <div class="part__company company_select">
                            
                        </div>
                        <div class="part__company">
                            
                        </div>
                        <div class="part__company">
                            
                        </div>
                    </div>

                    <div class="part_desc">
                    <div class="d-flex">
                        <div class="text_block showDesk"></div>
                            <p>
                                INNOVATIVE DIAGNOSTICS (ID VET Завдання організації, особливо ж зміцнення 
                                і розвиток структури вимагають визначення та уточнення напрямків прогресивного розвитку. Таким чином реалізація намічених планових завдань відіграє важливу роль у формуванні нових пропозицій.<br><br>
                                Завдання організації, особливо ж зміцнення і розвиток структури вимагають визначення та уточнення напрямків прогресивного розвитку. 
                            </p>
                        </div>
                        <button>
                            детальніше
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>