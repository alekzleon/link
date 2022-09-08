<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="enlaces, link para todo tipo de contenido, todos tus enlaces en un solo lugar, link, redes sociales">
    <title>miLink | Enlaces para redes, videos, menús y mas.</title>
    @include('resources.css')
</head>

<body class="crm_body_bg">
    @include('partials.nav')
    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>{{ Auth::user()->ocupation }} </p>
                                        <h6>{{ Auth::user()->name }}</h6>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner overly_inner">
            <div class="container-fluid p-0 ">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_300 text_white">BIENVENIDO {{ Auth::user()->name }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-9 card_height_100">
                        <div class="white_card mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Mis enlaces</h3>
                                    </div>
                                    <div class="create_report_btn">
                                        <a href="#" class="btn btn-primary mb-3"> + </a>
                                    </div>
                                </div>
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Enlace</th>
                                            <th scope="col">Fecha alta</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col" class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Tiktok</th>
                                            <td><a href="https://www.tiktok.com/@milink.fun" target="_blank" class="question_content">https://www.tiktok.com/@milink.fun</a></td>
                                            <td>07/09/2022</td>
                                            <td><a href="#" class="status_btn">Active</a></td>
                                            <td class="text-center">
                                                <a href="#"><i class="ti-arrow-circle-right" style=""></i></a>
                                                <a href="#"><i class="ti-pencil" style="margin: 0 .5em"></i></a>
                                                <a href="#"><i class="ti-close"></i></a>
                                                <a href="#"><i class="ti-vector" style="margin: 0 .5em"></i></a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="white_card_body" style="height: auto;">

                            </div>
                        </div>
                        <div class="white_card mb_20">
                            <div
                                class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                                <div class="renew_report_left">
                                    <h4 class="f_s_19 f_w_600 color_theme2 mb-0">Descarga tu reporte quincenal</h4>
                                </div>
                                <div class="create_report_btn">
                                    <a href="#" class="btn btn-outline-primary mb-3">Generar Reporte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_card card_height_100 mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Mis redes sociales</h3>
                                    </div>
                                    <div class="create_report_btn">
                                        <a href="#" class="btn btn-primary mb-3"> + </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="white_card card_height_100  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Transaction</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="table-responsive">
                                    <table class="table bayer_table m-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Electricity
                                                            Bill</h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_4">- $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Showroom Rent
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Iron Costing
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Packeging Cost
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">News & Update</h3>
                                    </div>
                                    <div class="single_wrap_input">
                                        <select class="nice_Select2 wide" name="" id="">
                                            <option value="1">Today</option>
                                            <option value="1">Tomorrow</option>
                                            <option value="1">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">36% off For pixel lights
                                        Couslations Types.</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">Sorem Kpsum is simply of the printing..</p>
                                </div>
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">We are produce new product this
                                    </h5>
                                    <p class="color_gray f_s_12 f_w_700 ">Gorem Rpsum is simply text of the printing...
                                    </p>
                                </div>
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">50% off For COVID Couslations
                                        Types.</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">EoremHpsum is simply dummy...</p>
                                </div>
                                <div class="load_more_button text-center mt_30">
                                    <a class="theme_text_btn d-flex align-items-center justify-content-center"
                                        href="#">Load more <i class="ti-angle-down f_s_12 ms-2"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Account Info</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="monthly_plan_wraper">
                                    <div class="single_plan d-flex align-items-center justify-content-between">
                                        <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Monthly Plan</h5>
                                        <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                    </div>
                                    <div class="single_plan d-flex align-items-center justify-content-between">
                                        <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Taxes</h5>
                                        <span class="color_gray2 f_s_16 f_w_700">$14</span>
                                    </div>
                                    <div class="single_plan d-flex align-items-start justify-content-between">
                                        <div>
                                            <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Extera</h5>
                                            <p class="f_s_13 f_w_700">Netflix and other bills in this
                                                month.</p>
                                        </div>
                                        <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                    </div>
                                    <div class="total_blance mt_20 mb_10">
                                        <span class="f_s_13 f_w_700 color_gray ">Total balance</span>
                                        <div
                                            class="total_blance_inner d-flex align-items-center flex-wrap justify-content-between">
                                            <div>
                                                <span class="f_s_40 f_w_700 color_text_3 d-block">$3650</span>
                                                <a class="badge_btn_5" href="#">+1235</a>
                                            </div>
                                            <div>
                                                <div><a class="badge_btn_6 mb_15" href="#">Today</a></div>
                                                <div><a class="badge_btn_7" href="#">This week</a></div>
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

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="CHAT_MESSAGE_POPUPBOX">
        <div class="CHAT_POPUP_HEADER">
            <div class="MSEESAGE_CHATBOX_CLOSE">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
                        fill="white" />
                </svg>
            </div>
            <h3>Chat with us</h3>
            <div class="Chat_Listed_member">
                <ul>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/1.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/2.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/3.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/4.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/5.png" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <div class="more_member_count">
                                    <span>90+</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="CHAT_POPUP_BODY">
            <p class="mesaged_send_date">
                Sunday, 12 January
            </p>
            <div class="CHATING_SENDER">
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt="">
                </div>
                <div class="SEND_SMS_VIEW">
                    <P>Hi! Welcome .
                        How can I help you?</P>
                </div>
            </div>
            <div class="CHATING_SENDER CHATING_RECEIVEr">
                <div class="SEND_SMS_VIEW">
                    <P>Hello</P>
                </div>
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt="">
                </div>
            </div>
        </div>
        <div class="CHAT_POPUP_BOTTOM">
            <div class="chat_input_box d-flex align-items-center">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Write your message"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn " type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                                    fill="#707DB7" />
                            </svg>

                        </button>
                        <button class="btn" type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                                    fill="#707DB7" />
                            </svg>

                            <input type="file">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('resources.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 20:14:50 GMT -->

</html>