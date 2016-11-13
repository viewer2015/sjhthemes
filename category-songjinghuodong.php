<?php

get_header();?>

<div class="songjing">
    <div class="nav">
        <div class="container">
            <h1 class="title">
                何为诵经
            </h1>
            <p class="intro">
                诵经，代佛说法，众生欢喜，天神护佑。诵经，其音正直，其音和雅，其音清彻，其音深满，周遍远闻。无声化有声，口读耳听，口耳并用，深刻体会佛经的音韵美、节奏美、气势美和义理之美。认识佛陀深妙智慧，了解佛陀真实本义。诵经持咒乃修行之法，犹如扫尘除垢的工具。诵经持咒，可收拢散乱心识，开发心智，净烦恼、趣菩提。让我们一起共得佛陀摄受，认识佛陀深妙智慧，品味无上妙法甘露味，消除业障，破除迷暗，增长智慧，愉悦身心，洞彻宇宙人生的真相，诸恶莫作，众善奉行，自净其意，最终了脱生死，成就佛道。诵经是因，成佛是果！
            </p>
        </div>
    </div>
    <section>
        <div class="container">
            <ul class="tab">
                <li class="current tab-d" data-name="tab1">
                    <a><span>全部诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab2">
                    <a><span>如何参加诵经活动</span></a>
                </li>
                <li class="tab-d" data-name="tab3">
                    <a >
                        <span>
                            都有哪些仪规
                        </span>
                    </a>
                </li>
                <li class="tab-d" data-name="tab4">
                    <a>
                        <span>下载所诵经文</span>
                    </a>
                </li>
            </ul>
            <div class="tab1 tab-item">
                <div class="currentActivity">
                    <ul class="activities">
            <?php
$postargs = array(
    'posts_per_page' => 2,
    'category_name' => 'songjinghuodong',
    'orderby' => 'date',
    'order' => 'desc',
);
$query1 = new WP_Query($postargs);
while ($query1->have_posts()): $query1->the_post();
    ?>
	  <li class="item">
	         <a href="<?php echo get_the_permalink(); ?>">
	            <img src="<?php echo get_the_post_thumbnail_url(null, array(300, 183)) ?>">
	          </a>
	            <h4><?php echo get_the_title() ?></h4>
	            <p>时间：<?php echo get_post_meta(get_the_id(), 'activitytime', true) ?></p>
	            <p>地点：<?php echo get_post_meta(get_the_id(), 'activitylocation', true) ?></p>
	            <p>YY直播：<?php echo get_post_meta(get_the_id(), 'yychannel', true) ?></p>


	   </li>
	  <?php
endwhile;
wp_reset_postdata();
?>

                    </ul>
                </div>

            </div>
            <div style="display: none;" class="tab2 tab-item">
                <div class="canjia">
                    <h3>如何参加活动</h3>
                    <p>下载YY直播软件,然后搜索房间号:5822447,进入房间参与活动</p>
                    <ul>
                        <li>
                            <div class="">
                                <a class="app-win app" target="_blank" href="http://yy.com/yy8/">
                                </a>
                                <a class="down" target="_blank" href="http://yy.com/yy8/">
                                    window版下载
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <a class="app-mac app" target="_blank" href="http://mac.yy.com">
                                </a>
                                <a class="down" target="_blank" href="http://mac.yy.com">
                                    Mac版下载
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <a class="app-phone app" target="_blank" href="http://3g.yy.com/v3/">
                                </a>
                                <a class="down" target="_blank" href="http://3g.yy.com/v3/">
                                    手机版下载
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="">
                                <a class="app-hd app" target="_blank" href="http://pad.yy.com">
                                </a>
                                <a class="down" target="_blank" href="http://pad.yy.com">
                                    HD版下载
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="canjia">
                    <h3>前往龙泉寺</h3>
                    <div>
                        <div style="text-align: center;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" width="1000" alt="">
                        </div>
                        <div style="width: 1000px;margin: 0 auto;overflow: auto;">
                            <div class="left">
                                <h5>乘车路线:</h5>
                                <p>
                                    1、颐阳公路（颐和园沿京密引水渠西岸，经温泉，按路标行驶</p>
                                <p>
                                    2、八达岭高速-北安河出口-北清路往西-京密引水渠往北按路标行驶
                                </p>
                                <p>
                                    3、北五环－肖家河桥－经农大至永丰路—左拐北清路往西-京密引水渠往北按路标行驶
                                </p>
                            </div>
                            <div class="right">
                                <h5>乘车路线:</h5>
                                <p>
                                    乘346路公交车至终点凤凰岭站下车即可，346公交车起迄站 (颐和园—凤凰岭)
                                </p>
                                <p>
                                    起点站首末车时间：6：00-22：30，终点站首末车时间：5：20-21：30
                                </p>
                                <p>
                                    全程票价(元)：2.50【刷卡:刷卡封顶成人4角/学生2角】
                                </p>
                                <p>
                                    线路长度(公里)：26.074
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canjia">
                    <h3>寺内路线图</h3>
                    <div>
                        <div>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div  style="display: none;" class="tab3 tab-item">
                <div style="width: 1000px;margin: 0 auto;">
                    <video width="100%"  controls="controls" src="http://ina.tju.edu.cn/images/ina2.mp4"></video>
                </div>
                <div class="yigui">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/yigui1.jpg" alt="">
                    </div>
                    <div class="right">
                        <h4>香赞</h4>
                        <p>
                            dddddddddddddddddddddddddddd
                        </p>
                    </div>
                </div>
                <div class="yigui">
                    <div class="left">
                        <h4>香赞</h4>
                        <p>
                            dddddddddddddddddddddddddddd
                        </p>
                    </div>
                    <div class="right">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/yigui1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div style="display: none;" class="tab4 tab-item">
                <ul class="book">
                    <li>
                        <div class="cover">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200" alt="楞严经">
                            </a>
                            <a href="#" class="downBtn">下载</a>
                        </div>
                        <div class="info">
                            <h4>楞严经</h4>
                            <p>
                                <span class="title">全名:</span>
                                <span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
                            </p>
                            <p>
                                <span class="title">又名:</span>
                                <span>大佛顶首楞严经、首楞严经</span>
                            </p>
                            <p>
                                <span class="title">简介:</span>
                                <span style="display: inline-block;float: right;width: 660px;">
                                    《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
                                </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="cover">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200" alt="楞严经">
                            </a>
                            <a href="#" class="downBtn">下载</a>
                        </div>
                        <div class="info">
                            <h4>楞严经</h4>
                            <p>
                                <span class="title">全名:</span>
                                <span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
                            </p>
                            <p>
                                <span class="title">又名:</span>
                                <span>大佛顶首楞严经、首楞严经</span>
                            </p>
                            <p>
                                <span class="title">简介:</span>
                                <span style="display: inline-block;float: right;width: 660px;">
                                    《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
                                </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="cover">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200" alt="楞严经">
                            </a>
                            <a href="#" class="downBtn">下载</a>
                        </div>
                        <div class="info">
                            <h4>楞严经</h4>
                            <p>
                                <span class="title">全名:</span>
                                <span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
                            </p>

                            <p>
                                <span class="title">又名:</span>
                                <span>大佛顶首楞严经、首楞严经</span>
                            </p>

                            <p>
                                <span class="title">简介:</span>
                                <span style="display: inline-block;float: right;width: 660px;">
                                    《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
                                </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="cover">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200" alt="楞严经">
                            </a>
                            <a href="#" class="downBtn">下载</a>
                        </div>
                        <div class="info">
                            <h4>楞严经</h4>
                            <p>
                                <span class="title">全名:</span>
                                <span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
                            </p>
                            <p>
                                <span class="title">又名:</span>
                                <span>大佛顶首楞严经、首楞严经</span>
                            </p>
                            <p>
                                <span class="title">简介:</span>
                                <span style="display: inline-block;float: right;width: 660px;">
                                    《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
                                </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="cover">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book_cover.jpg" width="140" height="200" alt="楞严经">
                            </a>
                            <a href="#" class="downBtn">下载</a>
                        </div>
                        <div class="info">
                            <h4>楞严经</h4>
                            <p>
                                <span class="title">全名:</span>
                                <span>大佛顶如来密因修证了义诸菩萨万行首楞严经</span>
                            </p>
                            <p>
                                <span class="title">又名:</span>
                                <span>大佛顶首楞严经、首楞严经</span>
                            </p>
                            <p>
                                <span class="title">简介:</span>
                                <span style="display: inline-block;float: right;width: 660px;">
                                    《楞严经》是佛教的一部极为重要的经典，可说是一部佛教修行大全，因为此经在内容上，包含了显密性相各方面的深刻道理；在宗派上则横跨禅净密律，均衡发挥，各得其所；在修行的次第上，则更是充实、圆满：举凡发心、解、行、证、悟，皆详尽剖析开示——从教令正发心起，经循循善诱的破惑、见真（明心见性）、依性起修（设坛结界、于实际上起正修行），并详细开示了一切凡圣境界（二十五圣圆通、三界七趣众生），令于圣境起企慕、而于凡外得知解，从而不受迷惑、不入歧途；又详述六十位修证（三渐次、干慧地、十信、十住、十行、十回向、四加行、十地、等觉、妙觉）令行者于菩提道上知所趣向；最后更广示五阴魔境，及其破除之法，俾于菩提道上，能克服魔怨留难，使所修圆满成就。
                                </span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php get_footer();?>

