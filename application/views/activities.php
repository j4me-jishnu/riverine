    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="assets/img/slider/2.jpg" style="background-image: url(&quot;assets/img/slider/2.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">

                    <h1>Activities</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="activity-wrp">
        <div class="container">
            <div class="col-md-12">
                <p class="text-center">Our team has designed unique activities to ensure that the guests have maximum enjoyment and memorable experience during the stay at Riverine Suites.</p>
                <?php $i = 1;
                foreach ($activity as $activities) { ?>
                    <?php if ($i % 2 != 0) { ?>
                        <div class="row at-wrp">
                            <div class="col-md-4">
                                <img src="<?php echo base_url() ?>Admin/uploads/activity/<?php echo $activities->act_img ?>" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h3><?php echo $activities->act_title ?> </h3>
                                <p><?php echo $activities->act_desc ?></p>
                                <p><b><?php echo $activities->act_pricing_info ?></b></p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="row at-wrp">
                            <div class="col-md-8">
                                <h3><?php echo $activities->act_title ?> </h3>
                                <p><?php echo $activities->act_desc ?></p>
                                <p><b><?php echo $activities->act_pricing_info ?></b></p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo base_url() ?>Admin/uploads/activity/<?php echo $activities->act_img ?>" class="img-responsive">
                            </div>

                        </div>
                <?php }
                    $i++;
                } ?>
                <!-- <div class="row at-wrp">

                    <div class="col-md-8">
                        <h3>River Crossing </h3>
                        <p>River Crossing is yet another guided activity that we offer to our guests. This activity is an adventure activity guided by our experts who are very familiar with the river and her behavior. They would know the mood changes of the river and can even know the depth at each point. We hope on to different naturally formed islands as we accomplish the river crossing. A sense of achievement and excitement brings out the confidence in you to take on tougher assignments in career and life. This activity is highly recommended for corporate team building too.</p>
                        <p><b>Charges for River crossing is Rs. 400/- (Rupees Four Hundred Only) per person.</b></p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/a2.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="row at-wrp">
                    <div class="col-md-4">
                        <img src="assets/img/a3.jpg" class="img-responsive">
                    </div>

                    <div class="col-md-8">
                        <h3>Guided Trekking to the Athirappilly waterfalls </h3>
                        <p>Guided Trekking to the Athirappilly waterfalls : This activity is a unique program offered by Riverine suites. This activity is recommended to be experienced in the morning. Our team would take you very close to the waterfall where the water lands forming a scenic picturesque frame to be captured without fail. This activity is a 90 minute activity from the starting point of the trek. </p>
                        <p><b>Charges for guided trek to Athirappilly is Rs. 500/- (Rupees Five Hundred Only) per person.</b></p>
                    </div>

                </div>
                <div class="row at-wrp">


                    <div class="col-md-8">
                        <h3>Guided Trekking through the forests and plantations of Western Ghats </h3>
                        <p>Guided Trekking through the forests and plantations of Western Ghats : This activity has a duration of around four hours. Our guide would explain to you in detail about the various flora and fauna present in this natural haven. The walk would take you across the plantations, variety of forests, lakes and through the river side. </p>
                        <p><b>Charges for guided trekking through the forests is Rs. 750/- (Rupees Seven Hundred and Fifty Only) per person.</b></p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/a4.jpg" class="img-responsive">
                    </div>

                </div>

                <div class="row at-wrp">
                    <div class="col-md-4">
                        <img src="assets/img/a5.jpg" class="img-responsive">
                    </div>

                    <div class="col-md-8">
                        <h3>Guided bird watching tour </h3>
                        <p>Guided bird watching tour : This area is a haven for the Bird watchers. Popular ornithologists from across the globe have explored this region and have come across various rare species of birds. Famous bird watcher and world record holder Noah Strycker spotted over 50 species of birds in the Athirappilly forest region. He was seeing four of them for the first time. Noah Strycker is a world record holder in sighting maximum number birds in one year. The great Malabar hornbill, Malabar Pied Hornbill. Indian Grey Hornbill, Malabar Grey Hornbill, Malabar Parakeet, Plum Headed Parakeet, Flame throated Bulbul, Chestnut headed Bee eater, Blue bearded Bee eater, Orange Minivet are some of the most popular species of birds which could be spotted here. The documented evidence says that there are over 100 species in the forests of Athirappilly and some of these species are endangered too. </p>
                        <p><b>Charges for bird watching tour is Rs. 750/- (Rupees Seven Hundred and Fifty) per person </b></p>
                    </div>

                </div>
                <div class="row at-wrp">


                    <div class="col-md-8">
                        <h3>Malakkapara Drive </h3>
                        <p>Malakkapara Drive : hop on to our jeep seats and fasten your seat belts. You are in for yet another adventurous drive through the ever green rain forest of Sholayar. This four hour drive would take you through the thick forests and you come across stunning views of small rivulets, waterfalls as we negotiate winding roads to reach a small village called Malakkapara. Malakkapara is surrounded by beautiful tea gardens. Malakkapara is bordered to the state of Tamil Nadu. The chance of wild life sighting adds to the attraction of the activity. </p>
                        <p><b>Charges for Malakkapara drive is Rs. 5000/- (Rupees Five Thousand Only) upto 4 persons</b></p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/a6.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="row at-wrp">
                    <div class="col-md-4">
                        <img src="assets/img/a7.jpg" class="img-responsive">
                    </div>

                    <div class="col-md-8">
                        <h3>Camp Fire</h3>
                        <p>Camp Fire: The gentle breeze that caresses your body and the soothing music carries you into a different world as you sit by the riverside enjoying reflections in the water that flows by. The camp fire adds to the mood as you gaze to the sky to check out the shining stars. We create camp fires that make you enjoy the togetherness. </p>
                        <p><b>The Charges for camp fire is Rs. 1500/- (Rupees One Thousand Five Hundred Only)</b></p>
                    </div>

                </div> -->
            </div>
        </div>
    </section>