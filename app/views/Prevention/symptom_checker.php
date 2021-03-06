<section class="breadcrumb_area dark_breadcrumb">
    <img class="tp_img" src="<?= BASEURL; ?>/assets/images/breadcrumb/checker-banner-map.png" alt="">
    <div class="container">
        <div class="breadcrumb_text">
            <h6>You are not feeling well?</h6>
            <h3>Coronavirus Symptom Checker</h3>
            <ul class="nav justify-content-center">
                <li><a href="<?= BASEURL; ?>/Home">Home</a></li>
                <li><a href="<?= BASEURL; ?>/Prevention">Prevention</a></li>
                <li><a href="<?= BASEURL; ?>/Prevention/symptom_checker">Symptom Checker</a></li>
            </ul>
        </div>
        <div class="row checker_box_inner">
            <div class="col-lg-6">
                <div class="checker_simple_text">
                    <h3>Fill the simple form below</h3>
                    <p>Enter more symptoms for more accurate results, starting with your most severe symptom.
                        Look through a list of common symptoms.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-lifebuoy"></i>
                                </div>
                                <div class="media-body">
                                    <h4>We help you</h4>
                                    <p>Our experts gives you advice</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-finger-tap"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Easy to use</h4>
                                    <p>4 steps, it’s quite simple</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-tags"></i>
                                </div>
                                <div class="media-body">
                                    <h4>100% FREE</h4>
                                    <p>Don’t worry about the cost</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-bubble-question"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Got questions?</h4>
                                    <p>Contact us, we answer you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="checker_form">
                    <input type="text" data-role="tagsinput" value="fever,seneeze"
                           placeholder="Start typing your symptoms...">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="radio_btn">
                                <h5>What’s your gender?</h5>
                                <div class="select_conversation">
                                    <input type="radio" name="male" id="male" value="male">
                                    <label for="male">Male</label>
                                </div>
                                <div class="select_conversation">
                                    <input type="radio" name="male" id="female" value="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <select class="nice_select checker_select">
                                <option value="1">Select your Region</option>
                                <option value="2">Islam</option>
                                <option value="3">Islam</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select class="nice_select checker_select">
                                <option value="1">What’s your age?</option>
                                <option value="2">25</option>
                                <option value="3">26</option>
                            </select>
                            <div class="button">
                                <a class="submit_btn" href="#">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home_about_corona">
    <div class="container">
        <div class="danger_box alert-danger">
            <p><i class="linearicons-warning"></i> The symptom checker results show a list of possible
                conditions, not an actual diagnosis. Consult
                your doctor if you are concerned.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="symptom_instruction_text">
                    <h4>Instruction</h4>
                    <p>If you’re feeling under the weather but aren’t sure what it could be, an online symptom
                        checker can help you identify whether you need to seek immediate medical attention.
                    </p>
                    <p>Online symptom checkers are calculators that ask users to input details about their signs
                        and symptoms of sickness, along with their gender, age and location. Using computerised
                        algorithms, the self diagnosis tool will then give a range of conditions that might fit
                        the problems a user is experiencing. They can also advice someone whether to seek advice
                        from a healthcare professional and the level of urgency in which to do so.
                    </p>
                    <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_ab_text how_to_use">
                    <div class="home_ab_text_inner">
                        <div class="home_ab_item ">
                            <h4>How to use it?</h4>
                            <p>Enter symptoms in your own words or pick from the drop-down list:</p>
                            <ul class="nav">
                                <li><a href="#"><i class="linearicons-arrow-right"></i>Medical terms are best
                                        but if you don’t know them, just enter your
                                        symptoms in normal, everyday language.
                                    </a></li>
                                <li><a href="#"><i class="linearicons-arrow-right"></i>Enter each symptom
                                        separately or put them all on one line but separated
                                        by commas.</a></li>
                                <li><a href="#"><i class="linearicons-arrow-right"></i>Enter the meaning of
                                        abnormal test results in words rather than numbers:
                                        for example, ‘high blood pressure’ rather than ‘BP 160/100’</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="result_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="result_box">
                    <h4>Results</h4>
                    <ul class="nav flex-column">
                        <li>
                            <span>Symptoms:</span>
                            <a class="tag" href="#">fever</a>
                            <a class="tag" href="#">sore throat</a>
                        </li>
                        <li>
                            <span>Gender:</span>
                            <a href="#">Female</a>
                        </li>
                        <li>
                            <span>Age range:</span>
                            <a href="#">25-30 yrs</a>
                        </li>
                        <li>
                            <span>Region:</span>
                            <a href="#">Italy</a>
                        </li>
                    </ul>
                    <div class="circle_inner">
                        <div class="second circle">
                            <strong></strong>
                        </div>
                    </div>
                    <div class="bottom_text text-center">
                        <h6>Estimable state:</h6>
                        <h3>Risky</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="result_inner_text">
                    <div class="result_item">
                        <h4>Possible diagnoses</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip.</p>
                    </div>
                    <div class="result_item">
                        <h4>Description</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                            qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                            quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="result_item">
                        <h4>Suggestion</h4>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                            reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                            illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Make another check</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about_question_area">
    <div class="container">
        <div class="main_title text-center">
            <h5>No more about symptoms</h5>
            <h2>Questions & Answers</h2>
        </div>
        <div class="row about_ques_inner">
            <div class="col-lg-4">
                <div class="about_ques_item">
                    <h4>How do I know if I’m sick nad what to do?</h4>
                    <p>Using an online symptom checker is simple. For instance, you might be a 45 year old woman
                        from the UK who is currently experiencing headache, a fever and a sore throat. Inputting
                        this information into the symptom checker will give you some likely ‘common’ diagnoses.
                        These include: strep throat, tonsillitis, sinusitis and flu.
                    </p>
                    <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about_ques_item">
                    <h4>What’s the difference between a sign and a symptom?</h4>
                    <p>‘Sign’ and ‘symptom’ are often used interchangeably, but if we’re going to be pedantic,
                        they do actually mean different things.
                        If you’re feeling ill it might not be immediately obvious to somebody looking at you
                        that you’re sick. For instance, if you’re experiencing pain, fatigue or dizziness, only
                        you know what that feels like. These are symptoms - which can only be described by the
                        person experiencing them.
                    </p>
                    <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about_ques_item">
                    <h4>How safe and accurate are symptom checkers?</h4>
                    <p>Most doctors agree that online symptom checkers are can encourage people with
                        life-threatening symptoms to seek urgent attention, potentially saving lives. They’re
                        also useful for reassuring patients who may have sought urgent care when they didn’t
                        need to.
                    </p>
                    <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="warning_box alert-warning">
            <div class="media">
                <div class="d-flex">
                    <i class="linearicons-notification"></i>
                </div>
                <div class="media-body">
                    <h4>Disclaimer</h4>
                    <p>This symptom checker is provided by Isabel Healthcare Limited. Isabel Symptom Checker
                        ("Isabel") and any content accessed through Isabel is for informational purposes only,
                        and is not intended to constitute professional medical advice, diagnosis or treatment.
                        EMIS shall be in no way responsible for your use of Isabel, or any information that you
                        obtain from Isabel. You acknowledge that when using Isabel you do so at your own choice
                        and in agreement with this disclaimer. Do not ignore or delay obtaining professional
                        medical advice because of information accessed through Isabel. Seek immediate medical
                        assistance or call your doctor for all medical emergencies. By using Isabel you agree to
                        the <a href="#">terms and conditions.</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="app_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="app_text">
                    <h2>Get <span>epidemic</span> app!</h2>
                    <p>
                        Download our app now, track Coronavirus cases real-time and
                        follow instant updates.
                    </p>
                    <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="<?= BASEURL; ?>/assets/images/apple-btn.png"
                                                                             alt=""/></a>
                    <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="<?= BASEURL; ?>/assets/images/google-btn.png"
                                                                             alt=""/></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app_mobile">
                    <div class="mobile_image">
                        <img src="<?= BASEURL; ?>/assets/images/mobile-1.png" alt=""/>
                        <img class="wow fadeInUp" data-wow-delay="500ms" src="<?= BASEURL; ?>/assets/images/mobile-2.png" alt=""/>
                    </div>
                    <ul class="corona_img nav">
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-1.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-2.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-3.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": -100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-4.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": 100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-5.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-6.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": -200}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-7.png" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="linearicons-mailbox-full"></i>
                    </div>
                    <div class="media-body">
                        <h4>Subscribe our newsletter</h4>
                        <p>
                            Join our subscribers list to get latest news and updates
                            about COVID-19 delivered directly in your inbox.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mail_box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                               aria-label="Recipient's username" aria-describedby="button-addon2"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="linearicons-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <label class="container-checkbox">I accept the <span>Privacy Policy.</span>
                        <input type="checkbox"/>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>