@extends('layouts.master')
@section('content')

@include('layouts.contact_top_panel_title')
<div class="page_content_wrap page_paddings_yes">

    <div class="content_wrap">
        <div class="content">
            <div class="list_products shop_mode_thumbs">
                <div class="content_wrap">
                    <div class="content">
                        <article
                            class="post_item post_item_single post_featured_default post_format_standard page hentry">
                            <h2 class="sc_title sc_title_regular sc_align_center margin_bottom_small">Your
                                Order</h2>
                            <section class="post_content">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="sc_section margin_bottom_medium aligncenter">
                                                    <div class="sc_section_inner">
                                                        <div class="sc_table">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Image</td>
                                                                        <td>Product Name</td>
                                                                        <td>Quantity</td>
                                                                        <td>Price</td>
                                                                        <td>SubTotal</td>
                                                                        <td>Action</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <a class="show_popup_menuitem" href="#">
                                                                                <img width="90" height="90" alt=""
                                                                                    src="{{asset('template/images/2000x2000.png')}}">
                                                                            </a></td>
                                                                        <td>Item #1</td>
                                                                        <td>
                                                                            <div class="quantity">
                                                                                <input type="number" step="1" min="1"
                                                                                    max="" name="quantity" value="1"
                                                                                    title="Qty"
                                                                                    class="input-text qty text" size="4"
                                                                                    pattern="[0-9]*"
                                                                                    inputmode="numeric" />
                                                                            </div>
                                                                        </td>
                                                                        <td>Item #1</td>
                                                                        <td>Item #1</td>
                                                                        <td><a href="#"><span
                                                                                    class="contact_icon icon-trash"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <a class="show_popup_menuitem" href="#">
                                                                                <img width="90" height="90" alt=""
                                                                                    src="{{asset('template/images/2000x2000.png')}}">
                                                                            </a></td>
                                                                        <td>Item #2</td>
                                                                        <td>
                                                                            <div class="quantity">
                                                                                <input type="number" step="1" min="1"
                                                                                    max="" name="quantity" value="1"
                                                                                    title="Qty"
                                                                                    class="input-text qty text" size="4"
                                                                                    pattern="[0-9]*"
                                                                                    inputmode="numeric" />
                                                                            </div>
                                                                        </td>
                                                                        <td>Item #2</td>
                                                                        <td>Item #2</td>
                                                                        <td><a href="#"><span
                                                                                    class="contact_icon icon-trash"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <a class="show_popup_menuitem" href="#">
                                                                                <img width="90" height="90" alt=""
                                                                                    src="{{asset('template/images/2000x2000.png')}}">
                                                                            </a></td>
                                                                        <td>Item #3</td>
                                                                        <td>
                                                                            <div class="quantity">
                                                                                <input type="number" step="1" min="1"
                                                                                    max="" name="quantity" value="1"
                                                                                    title="Qty"
                                                                                    class="input-text qty text" size="4"
                                                                                    pattern="[0-9]*"
                                                                                    inputmode="numeric" />
                                                                            </div>
                                                                        </td>
                                                                        <td>Item #3</td>
                                                                        <td>Item #3</td>
                                                                        <td><a href="#"><span
                                                                                    class="contact_icon icon-trash"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <a class="show_popup_menuitem" href="#">
                                                                                <img width="90" height="90" alt=""
                                                                                    src="{{asset('template/images/2000x2000.png')}}">
                                                                            </a></td>
                                                                        <td>Item #4</td>
                                                                        <td>
                                                                            <div class="quantity">
                                                                                <input type="number" step="1" min="1"
                                                                                    max="" name="quantity" value="1"
                                                                                    title="Qty"
                                                                                    class="input-text qty text" size="4"
                                                                                    pattern="[0-9]*"
                                                                                    inputmode="numeric" />
                                                                            </div>
                                                                        </td>
                                                                        <td>Item #4</td>
                                                                        <td>Item #4</td>
                                                                        <td><a href="#"><span
                                                                                    class="contact_icon icon-trash"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>
                        </article>
                        <input type="submit" value="Edit Cart" />
                        <input type="submit" value="Clear Cart" />
                    </div>

                </div>
            </div>
            <p></p>
        </div>
    </div>
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_featured_default post_format_standard page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div id="sc_team_358_wrap" class="sc_team_wrap">
                                        <div id="sc_team_358"
                                            class="sc_team sc_team_style_team-1 sc_slider_nopagination sc_slider_nocontrols margin_bottom_huge"
                                            data-interval="5641" data-slides-per-view="3" data-slides-min-width="250">
                                            <div class="sc_columns columns_wrap">
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div id="sc_team_358_1" class="sc_team_item sc_team_item_1">

                                                        <div class="sc_team_item_info">
                                                            <h6 class="sc_team_item_title">
                                                                ESTIMATE SHIPPING AND TAX
                                                            </h6>
                                                            <div class="sc_team_item_position">enter your tax</div>
                                                            <div class="textwidget">
                                                                <form class="mc4wp-form mc4wp-form-422" method="post"
                                                                    data-id="422" data-name="">
                                                                    <label>
                                                                        * Region / State
                                                                    </label>
                                                                    <select class="email s-email s-wid">
                                                                        <option>Bangladesh</option>
                                                                        <option>Albania</option>
                                                                        <option>Åland Islands</option>
                                                                        <option>Afghanistan</option>
                                                                        <option>Belgium</option>
                                                                    </select>
                                                                    <label>
                                                                        * Region / State
                                                                    </label>
                                                                    <select class="mc4wp-form-fields">
                                                                        <option>Bangladesh</option>
                                                                        <option>Albania</option>
                                                                        <option>Åland Islands</option>
                                                                        <option>Afghanistan</option>
                                                                        <option>Belgium</option>
                                                                    </select>
                                                                    <label>* Zip/Postal Code</label>
                                                                    <div class="mc4wp-form-fields">
                                                                        <p>
                                                                            <input type="text" name="text"
                                                                                placeholder="* Zip/Postal Code"
                                                                                required />
                                                                        </p>
                                                                    </div>
                                                                    <input type="submit" value="Get a Quote" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div id="sc_team_358_2" class="sc_team_item sc_team_item_2">

                                                        <div class="sc_team_item_info">
                                                            <h5 class="sc_team_item_title">
                                                                USE COUPON CODE
                                                            </h5>
                                                            <div class="sc_team_item_position">Enter your coupon code if
                                                                you have one.</div>
                                                            <div class="textwidget">
                                                                <form class="mc4wp-form mc4wp-form-422" method="post"
                                                                    data-id="422" data-name="">
                                                                    <div class="mc4wp-form-fields">
                                                                        <p>
                                                                            <label>Enter your coupon code if you have
                                                                                one.</label>
                                                                            <input type="text" name="text"
                                                                                placeholder="Enter your coupon here"
                                                                                required />
                                                                        </p>
                                                                        <p>
                                                                            <input type="submit" value="Apply Coupon" />
                                                                        </p>

                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div id="sc_team_358_3" class="sc_team_item sc_team_item_3">
                                                        <div class="sc_team_item_info">
                                                            <h5 class="sc_team_item_title">
                                                                Check Out
                                                            </h5>
                                                            <div class="sc_team_item_position">Total pay</div>
                                                            <aside class="widget widget_text">
                                                                <div class="textwidget">
                                                                    <form class="mc4wp-form mc4wp-form-422"
                                                                        method="post" data-id="422" data-name="">

                                                                        <h5>Total Products</h5>
                                                                        <input type="text" name="text" placeholder=""
                                                                            value="500$" readonly
                                                                            style="font-size: large;" />
                                                                        <h5>Total Shipping</h5>
                                                                        <input type="text" name="text" placeholder=""
                                                                            value="30$" readonly
                                                                            style="font-size: large;" />
                                                                        <span>Choose type of Shipping:</span>
                                                                        <p></p>
                                                                        <ul>
                                                                            <li><input type="checkbox"> Standard
                                                                                <span>$20.00</span></li>
                                                                            <li><input type="checkbox"> Express
                                                                                <span>$30.00</span></li>
                                                                        </ul>
                                                                        <div class="sc_team_button sc_item_button">
                                                                            <a href="checkout.html"
                                                                                class="sc_button sc_button_square sc_button_style_border_1 sc_button_size_small">Check
                                                                                out</a>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </aside>
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
