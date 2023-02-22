<?php get_header();?>

<!--Content Area-->
<main class="main container">
    <div class="row">
        <div class="col-md-8">
            <section class="content h-25">
                <div class="bcs_content">
                    <div class="bangla_content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show" id="bng_content_01" role="tabpanel">
                                    <h4>০১। প্রয়োগ-অপপ্রয়োগ</h4>
                                    <div class="accordion" id="accordionQuestion">
                                        <div class="accordion-item">
                                          <h5 class="accordion-header" id="bng_content_01_qus_01">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bng_content_01_ans_01" aria-expanded="true" aria-controls="bng_content_01_ans_01">
                                                প্রশ্ন:
                                            </button>
                                          </h5>
                                          <div id="bng_content_01_ans_01" class="accordion-collapse collapse" aria-labelledby="bng_content_01_qus_01" data-bs-parent="#accordionQuestion">
                                            <div class="accordion-body">
                                                <p>ড. সুনীতিকুমার চট্টোপাধ্যায় বাংলা ভাষায় দু ধরনের ভুলের কথা বলেছেন। <br>
                                                    ১. বর্ণাশুদ্ধি অর্থাৎ বানানের ভুল। ( যেমন-’নবীন’ এর পরিবর্তে ’নবিন’)<br>
                                                    ২. পদাশুদ্ধি অর্থাৎ অশুদ্ধ পদের প্রয়োগ। ( যেমন-’লক্ষণীয়’ স্থলে ‘লক্ষ্যণীয়’)<br>
                                                    এছাড়া আরও কিছু বিষয়ে ভুল প্রয়োগ লক্ষ করা যায়। যেমন-<br>
                                                    ১. বাক্যে পদবিন্যাসের ত্রুটি<br>
                                                    ২. সন্ধিঘটিত ত্রুটি<br>
                                                    ৩. সমাসজনিত ত্রুটি<br>
                                                    ৪. প্রত্যয়ঘটিত ত্রুটি<br>
                                                    ৫. সাধু ও চলিত রীতির মিশ্রণজনিত ত্রুটি<br>
                                                    ৬. উচ্চারণ দোষঘটিত ক্রটি ইত্যাদি
                                                </p> 
                                            </div>
                                          </div>
                                        </div>
                                    </div>               
                                </div>
                            </div>                    
                        </div>                
                </div>
            </section>
        </div>



        <div class="col-md-4">
            <section class="sidebar">
                <div class="bcs_sidebar">
                    <div class="accordion" id="accordionExample">    
                        <div class="accordion-item">
                                    <h2 class="accordion-button bng_child_01" data-bs-target="#bng_child_01" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bng_child_01">বাংলা ভাষা ও
                                    সাহিত্য_15+20=35</h2>        
                                <div id="bng_child_01" class="accordion-collapse collapse" aria-labelledby="child_01" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#bng_content_01" role="tab" aria-controls="bangla_content_01">০১। প্রয়োগ-অপপ্রয়োগ </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <?php get_sidebar('sidebar-1'); ?>

                    </div>
                </div>
            </section>
        </div>
    </div>
</main>


<?php get_footer();?>