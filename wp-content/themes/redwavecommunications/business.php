<?php /* Template Name: Business Template */ get_header(); ?>

<main role="main">


    <h3 class="breadcrumbs"><?php the_title(); ?></h3>

<!--==================== Accordian Begins ======================-->
<!--
<div class="business-container col-md-24">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h4>Business Solutions</h4></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="col-md-12">
                        <p>Description of a range of solutions
                            from smallest to largest. This would
                            demonstrate the benefits of working
                            with Redwave. Description of a range
                            of solutions from smallest to largest.
                            This would demonstrate the benefits of
                            working with Redwave.</p>

                        <p>Description of a range of solutions
                            from smallest to largest. This would
                            demonstrate the benefits of working
                            with Redwave. Description of a range
                            of solutions from smallest to largest.
                            This would demonstrate the benefits of
                            working with Redwave.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>SERVICES</h4>
                        <ul>
                            <li><a href="#">Design & Engineering ></a></li>
                            <li><a href="#">Pre-Construction ></a></li>
                            <li><a href="#">Construction & Installation ></a></li>
                            <li><a href="#">Service & Maintanence ></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>SYSTEMS</h4>
                        <ul>
                            <li>+Audio Systems</li>
                            <li>+Security Systems</li>
                            <li>+CCTV</li>
                            <li>+Fire Alarm</li>
                            <li>+Master Clock Systems</li>
                            <li>+Automation</li>
                            <li>+PA Systems</li>
                            <li>+Structured Cabling</li>
                            <li>+Communication & Phone Systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><h4>Education Solutions</h4></a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>This is where the education solutions goes.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><h4>Healthcare Solutions</h4></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>This is where the healthcare solutions goes.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><h4>Government Solutions</h4></a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>This is where the government solutions goes.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><h4>All Systems</h4></a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>This is where the government solutions goes.></p>
                </div>
            </div>
        </div>
    </div>
-->

<! -- New accordion attempt -->

    <?php echo do_shortcode("[accordion_pro id='122']"); ?>
</main>

<?php get_footer(); ?>