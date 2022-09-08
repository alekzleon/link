<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_300 text_white">BIENVENIDO {{ Auth::user()->name }}</h3>
            </div>
            <div class=" d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
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