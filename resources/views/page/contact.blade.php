@extends('layouts.master')
@section('content')

    @include('layouts.contact_top_panel_title')
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_single post_featured_default post_format_standard page hentry">
                    <section class="post_content">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1455186654343">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <h2 class="sc_title sc_title_regular sc_align_center margin_top_null margin_bottom_small">Get in touch</h2>
                                        <div class="sc_section margin_bottom_large aligncenter">
                                            <div class="sc_section_inner">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Every Monday, Tuesday and Wednesday evening, we’re offering groups of 10 or more
                                                            that book an area in our bar a complimentary bottle of Champagne. <br />
                                                            Open hours: 8.00-18.00 Mon-Sat <br />
                                                            Call our reservations team on (027) 8338 145 for more information.
                                                        </p>
                                                    </div>
                                                </div>
                                                <a href="/reservations" class="sc_button sc_button_square sc_button_style_border_1 sc_button_size_medium margin_top_medium">reservation</a>
                                            </div>
                                        </div>
                                        <div class="sc_section aligncenter w70">
                                            <div class="sc_section_inner">
                                                <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_bottom_large"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1455183321063">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="sc_section margin_right_null margin_left_null aligncenter">
                                            <div class="sc_section_inner">
                                                <h5 class="sc_title sc_title_regular margin_top_small">follow us</h5>
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_medium">
                                                    <div class="sc_socials_item">
                                                        <a href="#" target="_blank" class="social_icons social_twitter">
                                                            <span class="icon-twitter"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="#" target="_blank" class="social_icons social_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="#" target="_blank" class="social_icons social_gplus">
                                                            <span class="icon-gplus"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="#" target="_blank" class="social_icons social_linkedin">
                                                            <span class="icon-linkedin"></span>
                                                        </a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="#" target="_blank" class="social_icons social_skype">
                                                            <span class="icon-skype"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="sc_form_132_wrap" class="sc_form_wrap">
                                                    <div id="sc_form_132" class="sc_form sc_form_style_form_1 margin_top_small margin_bottom_medium">
                                                        <form id="sc_form_132_form" data-formtype="form_1" method="post" action="includes/sendmail.php">
                                                            <div class="sc_form_info">
                                                                <div class="sc_form_item sc_form_field label_over">
                                                                    <label class="required" for="sc_form_username">Name</label>
                                                                    <input id="sc_form_username" type="text" name="username" placeholder="Name *">
                                                                </div>
                                                                <div class="sc_form_item sc_form_field label_over">
                                                                    <label class="required" for="sc_form_email">E-mail</label>
                                                                    <input id="sc_form_email" type="text" name="email" placeholder="E-mail *">
                                                                </div>
                                                                <div class="sc_form_item sc_form_field label_over">
                                                                    <label class="required" for="sc_form_subj">Subject</label>
                                                                    <input id="sc_form_subj" type="text" name="subject" placeholder="Subject">
                                                                </div>
                                                            </div>
                                                            <div class="sc_form_item sc_form_message label_over">
                                                                <label class="required" for="sc_form_message">Message</label>
                                                                <textarea id="sc_form_message" name="message" placeholder="Message"></textarea>
                                                            </div>
                                                            <div class="sc_form_item sc_form_button">
                                                                <button>Send Message</button>
                                                            </div>
                                                            <div class="result sc_infobox"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="sc_section margin_bottom_huge">
                                            <div class="sc_section_inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <section class="related_wrap related_wrap_empty"></section>
            </div>
        </div>
    </div>

@endsection
