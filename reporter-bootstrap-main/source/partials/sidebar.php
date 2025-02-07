<?php $motcle = sql_select("motcle", "*"); ?>
<div class="col-lg-4">
    <div class="widget-blocks">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-body">
                        <img loading="lazy" decoding="async" src="/reporter-bootstrap-main/source/images/logo.png"
                            alt="About us" class="w-100 author-thumb-sm d-block">
                        <h2 class="widget-title my-3">KHYM Studio</h2>
                        <p class="mb-3 pb-2">Plongez au cœur du rap bordelais avec 33BPM ! Interviews, reportages et
                            découvertes d’artistes : Khym Studio décrypte la scène locale et ses tendances</p> <a
                            href="about.php" class="btn btn-sm btn-outline-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="widget">
                    <h2 class="section-title mb-3">Articles recommandés</h2>
                    <div class="widget-body">
                        <div class="widget-list">
                            <article class="card mb-4">
                                <div class="card-image">
                                    <div class="post-info"> <span class="text-uppercase">1 minutes read</span>
                                    </div>
                                    <img loading="lazy" decoding="async"
                                        src="/reporter-bootstrap-main/source/images/1.jpg" alt="Post Thumbnail"
                                        class="w-100">
                                </div>
                                <div class="card-body px-0 pb-1">
                                    <h3><a class="post-title post-title-sm" href="article.html">Portugal and France Now
                                            Allow Unvaccinated Tourists</a></h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor …</p>
                                    <div class="content"> <a class="read-more-btn" href="article.html">Lire en
                                            entier</a>
                                    </div>
                                </div>
                            </article>
                            <a class="media align-items-center" href="article.html">
                                <img loading="lazy" decoding="async" src="/reporter-bootstrap-main/source/images/1.jpg"
                                    alt="Post Thumbnail" class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">These Are Making It Easier To Visit</h3>
                                    <p class="mb-0 small">Heading Here is example of hedings. You can use …</p>
                                </div>
                            </a>
                            <a class="media align-items-center" href="article.html"> <span
                                    class="image-fallback image-fallback-xs">No Image Specified</span>
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">No Image specified</h3>
                                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                                </div>
                            </a>
                            <a class="media align-items-center" href="article.html">
                                <img loading="lazy" decoding="async" src="/reporter-bootstrap-main/source/images/1.jpg"
                                    class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">Perfect For Fashion</h3>
                                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                                </div>
                            </a>
                            <a class="media align-items-center" href="article.html">
                                <img loading="lazy" decoding="async" src="/reporter-bootstrap-main/source/images/1.jpg"
                                    class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">Record Utra Smooth Video</h3>
                                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="widget">
                    <h2 class="section-title mb-3">Catégories</h2>
                    <div class="widget-body">
                        <ul class="widget-list">
                            <li><a href="#!"><?php echo $motcle[0]["libMotCle"] ?><span class="ml-auto">(3)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[1]["libMotCle"] ?><span class="ml-auto">(2)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[2]["libMotCle"] ?><span class="ml-auto">(1)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[3]["libMotCle"] ?><span class="ml-auto">(4)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[4]["libMotCle"] ?><span class="ml-auto">(2)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[5]["libMotCle"] ?><span class="ml-auto">(5)</span></a>
                            </li>
                            <li><a href="#!"><?php echo $motcle[6]["libMotCle"] ?><span class="ml-auto">(1)</span></a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>