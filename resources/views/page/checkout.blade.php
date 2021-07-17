@extends('layouts.master')
@section('content')

@include('layouts.contact_top_panel_title')
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article
                class="post_item post_item_single_team post_featured_default post_format_standard team has-post-thumbnail hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="sc_content content_wrap">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                            <div class="column-1_2 sc_column_item">
                                                <div class="comments_form_wrap">
                                                    <h2 class="section_title comments_form_title">Billing Details</h2>
                                                    <div class="comments_form">
                                                        <div id="respond" class="comment-respond">
                                                            <form action="#" method="post" id="commentform"
                                                                class="comment-form">
                                                                <div class="columns_wrap">
                                                                    <div
                                                                        class="comments_field comments_author column-1_2">
                                                                        <label for="author" class="required">First
                                                                            Name</label>
                                                                        <input id="author" name="author" type="text"
                                                                            placeholder="First Name *" value=""
                                                                            size="30" aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-1_2">
                                                                        <label for="name" class="required">Last
                                                                            Name</label>
                                                                        <input id="name" name="name" type="text"
                                                                            placeholder="Last Name *" value="" size="30"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_author column-1_2">
                                                                        <label for="phone"
                                                                            class="required">Phone</label>
                                                                        <input id="phone" name="phone" type="text"
                                                                            placeholder="Phone *" value="" size="30"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-1_2">
                                                                        <label for="email"
                                                                            class="required">Email</label>
                                                                        <input id="email" name="email" type="text"
                                                                            placeholder="Email *" value="" size="30"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-2_2">
                                                                        <label for="country"
                                                                            class="required">Country</label>
                                                                        <input id="country" name="country" type="text"
                                                                            placeholder="Country *" value="" size="72"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-2_2">
                                                                        <label for="address"
                                                                            class="required">Address</label>
                                                                        <input id="address" name="address" type="text"
                                                                            placeholder="Address *" value="" size="72"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_author column-1_2">
                                                                        <label for="code"
                                                                            class="required">Postcode/Zip</label>
                                                                        <input id="code" name="code" type="number"
                                                                            placeholder="Postcode *" value="" size="72"
                                                                            aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-1_2">
                                                                        <label for="phone2" class="required">Another
                                                                            Phone</label>
                                                                        <input id="phone2" name="phone2" type="text"
                                                                            placeholder="Another Phone *" value=""
                                                                            size="30" aria-required="true" />
                                                                    </div>
                                                                    <div
                                                                        class="comments_field comments_email column-2_2">
                                                                        <label for="note" class="required">Note:</label>
                                                                        <textarea
                                                                            placeholder="Notes about your order, e.g. special notes for delivery. "
                                                                            name="message" style="width: auto;"
                                                                            cols="75"></textarea>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column-1_2 sc_column_item">
                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1455183321063">
                                                    <div class="wpb_column vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="sc_section margin_right_null margin_left_null aligncenter">
                                                                    <div class="sc_section_inner">
                                                                        <h4
                                                                            class="sc_title sc_title_regular margin_top_small">
                                                                            Your Order</h4>
                                                                        <div
                                                                            class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_medium">
                                                                            <div class="sc_socials_item">
                                                                                <a href="#" target="_blank"
                                                                                    class="social_icons social_twitter">
                                                                                    <span class="icon-twitter"></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="sc_socials_item">
                                                                                <a href="#" target="_blank"
                                                                                    class="social_icons social_facebook">
                                                                                    <span class="icon-facebook"></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="sc_socials_item">
                                                                                <a href="#" target="_blank"
                                                                                    class="social_icons social_gplus">
                                                                                    <span class="icon-gplus"></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="sc_socials_item">
                                                                                <a href="#" target="_blank"
                                                                                    class="social_icons social_linkedin">
                                                                                    <span class="icon-linkedin"></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="sc_socials_item">
                                                                                <a href="#" target="_blank"
                                                                                    class="social_icons social_skype">
                                                                                    <span class="icon-skype"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div id="sc_form_132_wrap" class="sc_form_wrap">
                                                                            <div id="sc_form_132"
                                                                                class="sc_form sc_form_style_form_1 margin_top_small margin_bottom_medium">
                                                                                <form id="sc_form_132_form"
                                                                                    data-formtype="form_1" method="post"
                                                                                    action="#">
                                                                                    <div class="sc_form_info">
                                                                                        <div
                                                                                            class="sc_form_item sc_form_field label_over">
                                                                                            <h6 class="sc_title sc_title_regular margin_top_small"
                                                                                                style="text-align: left;">
                                                                                                Product</h6>
                                                                                            <p
                                                                                                style="text-align: left; color: black;">
                                                                                                Product Name x 2 $500
                                                                                            </p>
                                                                                            <p
                                                                                                style="text-align: left; color: black;">
                                                                                                Product Name x 2 $500
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_form_item sc_form_field label_over">
                                                                                            <h6 class="sc_title sc_title_regular margin_top_small"
                                                                                                style="text-align: left;">
                                                                                                Shipping</h6>
                                                                                            <p
                                                                                                style="text-align: left; color: black;">
                                                                                                Free Shipping</p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_form_item sc_form_field label_over">
                                                                                            <h6 class="sc_title sc_title_regular margin_top_small"
                                                                                                style="text-align: left;">
                                                                                                Total</h6>
                                                                                            <p
                                                                                                style="text-align: left; font-weight: 900; color: black;">
                                                                                                $1000</p>
                                                                                        </div>
                                                                                        <div class="payment-method">
                                                                                            <div
                                                                                                class="payment-accordion element-mrg">
                                                                                                <div class="panel-group"
                                                                                                    id="accordion">
                                                                                                    <div
                                                                                                        class="panel payment-accordion">
                                                                                                        <div class="panel-heading"
                                                                                                            id="method-two">
                                                                                                            <h4
                                                                                                                class="panel-title">
                                                                                                                <a class="collapsed"
                                                                                                                    data-toggle="collapse"
                                                                                                                    data-parent="#accordion"
                                                                                                                    href="#method2">
                                                                                                                    Check
                                                                                                                    payments
                                                                                                                </a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                        <div id="method2"
                                                                                                            class="panel-collapse collapse">
                                                                                                            <div
                                                                                                                class="panel-body">
                                                                                                                <p>Please
                                                                                                                    send
                                                                                                                    a
                                                                                                                    check
                                                                                                                    to
                                                                                                                    Store
                                                                                                                    Name,
                                                                                                                    Store
                                                                                                                    Street,
                                                                                                                    Store
                                                                                                                    Town,
                                                                                                                    Store
                                                                                                                    State
                                                                                                                    /
                                                                                                                    County,
                                                                                                                    Store
                                                                                                                    Postcode.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="panel payment-accordion">
                                                                                                        <div class="panel-heading"
                                                                                                            id="method-three">
                                                                                                            <h4
                                                                                                                class="panel-title">
                                                                                                                <a class="collapsed"
                                                                                                                    data-toggle="collapse"
                                                                                                                    data-parent="#accordion"
                                                                                                                    href="#method3">
                                                                                                                    Cash
                                                                                                                    on
                                                                                                                    delivery
                                                                                                                </a>
                                                                                                            </h4>
                                                                                                        </div>
                                                                                                        <div id="method3"
                                                                                                            class="panel-collapse collapse">
                                                                                                            <div
                                                                                                                class="panel-body">
                                                                                                                <p>Please
                                                                                                                    send
                                                                                                                    a
                                                                                                                    check
                                                                                                                    to
                                                                                                                    Store
                                                                                                                    Name,
                                                                                                                    Store
                                                                                                                    Street,
                                                                                                                    Store
                                                                                                                    Town,
                                                                                                                    Store
                                                                                                                    State
                                                                                                                    /
                                                                                                                    County,
                                                                                                                    Store
                                                                                                                    Postcode.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="sc_form_item sc_form_button">
                                                                                        <button>Check out</button>
                                                                                    </div>
                                                                                    <div class="result sc_infobox">
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
