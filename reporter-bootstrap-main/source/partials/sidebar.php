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
                            découvertes d’artistes : Khym Studio décrypte la scène locale et ses tendances.</p> <a
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
                                    <div class="post-info"> <span class="text-uppercase">8 minutes de lecture</span>
                                    </div>
                                    <img loading="lazy" decoding="async"
                                        src="/reporter-bootstrap-main/source/images/Hypnotize.avif" alt="Post Thumbnail"
                                        class="w-100">
                                </div>
                                <div class="card-body px-0 pb-1">
                                    <h3><a class="post-title post-title-sm"
                                            href="https://www.bougerabordeaux.com/sorties/concertetfestival/booba-sch-et-vald-a-la-tete-dun-nouveau-festival-de-rap-a-bordeaux/">Booba,
                                            SCH, et Vald à la tête d’un nouveau festival de rap à Bordeaux</a></h3>
                                    <p class="card-text">Ce festival, initié par Fever, la société organisatrice de
                                        l’Initial Festival à Bordeaux, veut aller au-delà d’un simple enchaînement de
                                        concerts. Graffiti, breakdance, DJ sets et bien d’autres activités viendront
                                        enrichir cette première édition bordelaise.</p>
                                    <div class="content">
                                    </div>
                                </div>
                            </article>
                            <a class="media align-items-center"
                                href="https://www.sudouest.fr/culture/sortir-a-bordeaux/rap-a-bordeaux-notre-selection-au-rocher-de-palmer-entre-le-4-et-le-8-fevrier-23113967.php#">
                                <img loading="lazy" decoding="async"
                                    src="/reporter-bootstrap-main/source/images/zinee2.jpeg" alt="Post Thumbnail"
                                    class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">Notre sélection au Rocher de Palmer entre le 4 et le 8
                                        février</h3>
                                    <p class="mb-0 small">La semaine se conclut de la meilleure des manières avec la
                                        rappeuse Zinée le samedi 8 février.</p>
                                </div>
                            </a>
                            <a class="media align-items-center"
                                href="https://numero.com/culture/musique/bb-jacques-nouvel-album-blackbird-rap-nouvelle-ecole/">
                                <img loading="lazy" decoding="async"
                                    src="/reporter-bootstrap-main/source/images/bb.jacques.jpeg" alt="Post Thumbnail"
                                    class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">B.B. Jacques : confidences d’un rappeur qui n’aimait pas
                                        les rimes</h3>
                                    <p class="mb-0 small">Révélé au grand public par la première saison de l’émission
                                        Nouvelle École, diffusée sur Netflix, B.B Jacques est devenu, en à peine quatre
                                        ans, l’archétype de l’artiste indépendant. Rencontre.</p>
                                </div>
                            </a>
                            <a class="media align-items-center" href="https://letype.fr/le-type-de-rap-27-lilguwop/">
                                <img loading="lazy" decoding="async"
                                    src="/reporter-bootstrap-main/source/images/lilguwop-scaled.jpg"
                                    alt="Post Thumbnail" class="w-100">
                                <div class="media-body ml-3">
                                    <h3 style="margin-top:-5px">Le Type de Rap #27 : Lilguwop</h3>
                                    <p class="mb-0 small">Alors qu’il vient de dévoiler la réédition de son projet
                                        Glowop, rencontre avec Lilguwop, pour le 27ème épisode de Le Type de Rap.</p>
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