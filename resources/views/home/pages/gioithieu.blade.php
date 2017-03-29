@extends('home.intro')
@section('content')
@section('description', 'Đây là trang giới thiệu công ty!')
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #FF4500;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{!! url('/') !!}" style="font-family: 'Fugaz One', cursive;">FPT TELECOM - AN GIANG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about" style="font-family: 'Oswald', sans-serif; font-size: 15pt;">GIỚI THIỆU CHUNG</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services" style="font-family: 'Oswald', sans-serif; font-size: 15pt;">FPT TELECOM</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>
<div class="container-fluid">
  <section id="intro" class="intro-section">
      <img src="{!! asset('resources/upload/FPT Telecom 73.jpg') !!}" alt="" style="width: 100%;">
  </section>
</div>
<div class="container-fluid">
  <div class="col-lg-10 col-lg-offset-1">
    <section id="about" class="about-section" style="margin-left: 30px; margin-right: 30px; background-color: #fff;">
         <h1 style="font-family: 'Oswald', sans-serif;">GIỚI THIỆU FPT</h1>
          <hr>
          <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt;"> Công ty Cổ phần Viễn thông FPT là thành viên của Tập đoàn FPT</legend>
          <div class="row">
            <div class="col-lg-6">
              <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">GIỚI THIỆU CHUNG</h3>
              <p style="text-align: justify; text-indent: 50px;">Năm 1988, 13 nhà khoa học trẻ thành lập Công ty FPT với mong muốn xây dựng “một tổ chức kiểu mới, giàu mạnh bằng nỗ lực lao động sáng tạo trong khoa học kỹ thuật và công nghệ, làm khách hàng hài lòng, góp phần hưng thịnh quốc gia, đem lại cho mỗi thành viên của mình điều kiện phát triển đầy đủ nhất về tài năng và một cuộc sống đầy đủ về vật chất, phong phú về tinh thần.”</p>

              <p style="text-align: justify; text-indent: 50px;">Không ngừng đổi mới, liên tục sáng tạo và luôn tiên phong mang lại cho khách hàng các sản phẩm/ giải pháp/ dịch vụ công nghệ tối ưu nhất đã giúp FPT phát triển mạnh mẽ trong những năm qua. FPT trở thành công ty CNTT-VT lớn nhất trong khu vực kinh tế tư nhân của Việt Nam với gần 27.000 cán bộ nhân viên, trong đó có 12.241 kỹ sư CNTT, lập trình viên, chuyên gia công nghệ. Đồng thời, FPT cũng là doanh nghiệp dẫn đầu trong các lĩnh vực: Xuất khẩu phần mềm; Tích hợp hệ thống; Phát triển phần mềm; Dịch vụ CNTT; Phân phối sản phẩm công nghệ tại Việt Nam. Hầu hết các hệ thống thông tin lớn trong các cơ quan nhà nước và các ngành kinh tế trọng điểm của Việt Nam đều do FPT xây dựng và phát triển.</p>

              <p style="text-align: justify; text-indent: 50px;">Không chỉ cung cấp sản phẩm, dịch vụ tại 63/63 tỉnh thành của Việt Nam, FPT đã mở rộng hoạt động ra thị trường toàn cầu với văn phòng và công ty chi nhánh tại 19 quốc gia.<p>

              <p style="text-align: justify; text-indent: 50px;">Vị thế của FPT trên toàn cầu đã được công nhận và khẳng định thông qua danh sách khách hàng gồm hơn 400 doanh nghiệp lớn trên thế giới, đặc biệt trong đó có gần 50 khách hàng nằm trong danh sách Fortune 500. Một số tên tuổi khách hàng lớn có thể kể đến Toshiba, Hitachi, Nissen, Deutsche Bank, Unilever, Panasonic… FPT cũng nhận được chứng chỉ đối tác cấp cao nhất của các nhà cung cấp lớn trên thế giới như Cisco, IBM, Microsoft, Oracle, SAP, Dell, Juniper, Amazon Web Services… Trong vòng ba năm liên tiếp kể từ năm 2014, FPT lọt vào Top 100 Nhà cung cấp dịch vụ gia công toàn cầu (The Global Outsourcing100) do IAOP đánh giá. Trong 2 năm 2015, 2016, FPT nằm trong Top 300 doanh nghiệp hàng đầu Châu Á do Nikkei Asian Review bình chọn.<p>

              <p style="text-align: justify; text-indent: 50px;">Với định hướng tiên phong nghiên cứu và ứng dụng các xu hướng công nghệ mới nhất và mạnh mẽ vươn ra toàn cầu, FPT đặt mục tiêu doanh thu từ thị trường nước ngoài đạt 1 tỷ USD và trở thành Tập đoàn toàn cầu hàng đầu Việt Nam về dịch vụ thông minh vào năm 2020.</p>
            </div>
            <div class="col-lg-6" style="margin-top: 65px;">
              <img src="{!! asset('resources/upload/tienphongxuhuongcongnghe.jpg') !!}" alt="" style="width: 100%;">
              <img src="{!! asset('resources/upload/cacconso.jpg') !!}" alt="" style="width: 100%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h3 style="text-align: right; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">VĂN HÓA</h3>
              <p style="text-align: right;">Văn hóa FPT được gói gọn trong 6 chữ <strong>“TÔN ĐỔI ĐỒNG - CHÍ GƯƠNG SÁNG”</strong>, trong đó: “TÔN ĐỔI ĐỒNG” nghĩa là “Tôn trọng cá nhân - Tinh thần đổi mới - Tinh thần đồng đội”, là những giá trị mà tất cả người FPT đều chia sẻ.</p>
              <p style="text-align: right;">“CHÍ GƯƠNG SÁNG” nghĩa là “Chí công - Gương mẫu - Sáng suốt”, là những phẩm chất cần có của lãnh đạo FPT</p>
              <img src="{!! asset('resources/upload/anh-1.jpg') !!}" alt="" style="width: 100%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">ĐỊNH HƯỚNG CÔNG NGHỆ</h3>
              <p style="text-align: left;">Cam kết mang lại giá trị cao nhất cho khách hàng, FPT luôn chú trọng đầu tư ngân sách dành cho nghiên cứu và phát triển các công nghệ mới nhất. Trong những năm gần đây, công nghệ S.M.A.C (viết tắt của 4 từ Social - Mạng xã hội; Mobile - Công nghệ di động; Analytics - Phân tích Dữ liệu lớn; và Cloud.</p>
              <img src="{!! asset('resources/upload/sodo.jpg') !!}" alt="" style="width: 70%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h3 style="text-align: right; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">MẠNG LƯỚI TOÀN CẦU</h3>
              <p style="text-align: right;">Với sự hiện diện tại 19 quốc gia, FPT có thể phối hợp các nguồn lực trên toàn cầu và tại Việt Nam để cung cấp dịch vụ cho khách hàng một cách hiệu quả nhất. Tại Việt Nam, FPT có mặt tại tất cả 63/63 tỉnh thành. Trên thế giới, FPT có mặt tại 19 quốc gia thuộc 4 châu lục Châu Mỹ: Mỹ Châu Úc: Australia Châu Âu: Anh, Đức, Hà Lan, Pháp, Slovakia Châu Á: Nhật Bản, Singapore, Thái Lan, Malaysia, Myanmar, Philippines, Indonesia, Campuchia, Lào, Bangladesh, Kuwait, Việt Nam.</p>
              <img src="{!! asset('resources/upload/mangluoitoancau.jpg') !!}" alt="" style="width: 100%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">CÔNG TY THÀNH VIÊN</h3>
              <p style="text-align: left;">FPT cung cấp giải pháp CNTT tổng thể trong 4 lĩnh vực Công nghệ, Viễn thông, Phân phối - Bán lẻ, Giáo dục và khác, với 8 công ty thành viên trực thuộc:</p>
              <img src="{!! asset('resources/upload/sodocongty.jpg') !!}" alt="" style="width: 80%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px; color: #F37022;">LIÊN HỆ</h3>
              <p style="text-align: left; text-indent: 50px;">Trụ sở chính Tòa nhà FPT Cầu Giấy, số 17 phố Duy Tân, phường Dịch Vọng Hậu, quận Cầu Giấy, Hà Nội, Việt Nam.</p>
              <p style="text-align: left; text-indent: 50px;">Điện thoại: +84 4 7300 7300</p>
              <p style="text-align: left; text-indent: 50px;">Fax: +84 4 37687410</p>
              <p style="text-align: left; text-indent: 50px;">Website: https://fpt.com.vn</p>
            </div>
          </div>
    </section>
  </div>
</div>
<div class="container-fluid">
  <div class="col-lg-10 col-lg-offset-1">
    <section id="services" class="services-section" style="margin-left: 70px; margin-right: 70px;">
      
        <h1 style="font-family: 'Oswald', sans-serif;">GIỚI THIỆU FPT TELECOM</h1>
        <hr>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">GIỚI THIỆU CHUNG</legend>
        <p style="text-align: justify; text-indent: 50px;">Là thành viên thuộc Tập đoàn công nghệ hàng đầu Việt Nam FPT, Công ty Cổ phần Viễn thông FPT (tên gọi tắt là FPT Telecom) hiện là một trong những nhà cung cấp dịch vụ viễn thông và Internet có uy tín và được khách hàng yêu mến tại Việt Nam và khu vực.</p>

        <p style="text-align: justify; text-indent: 50px;">Thành lập ngày 31/01/1997, khởi nguồn từ Trung tâm Dịch vụ Trực tuyến do 4 thành viên sáng lập cùng sản phẩm mạng Intranet đầu tiên của Việt Nam mang tên “Trí tuệ Việt Nam – TTVN”, sản phẩm được coi là đặt nền móng cho sự phát triển của Internet tại Việt Nam. Sau 20 năm hoạt động, FPT Telecom đã lớn mạnh vượt bậc với hơn 7,000 nhân viên chính thức, gần 200 văn phòng điểm giao dịch thuộc hơn 80 chi nhánh tại 59 tỉnh thành trên toàn quốc. Bên cạnh đó, Công ty đã và đang đặt dấu ấn trên trường quốc tế bằng 8 chi nhánh trải dài khắp Campuchia, cũng như việc được cấp giấy phép kinh doanh dịch vụ tại Myanmar.</p>

        <p style="text-align: justify; text-indent: 50px;">Với sứ mệnh tiên phong đưa Internet đến với người dân Việt Nam và mong muốn mỗi gia đình Việt Nam đều sử dụng ít nhất một dịch vụ của FPT Telecom, đồng hành cùng phương châm “Khách hàng là trọng tâm”, chúng tôi không ngừng nỗ lực đầu tư hạ tầng, nâng cấp chất lượng sản phẩm – dịch vụ, tăng cường ứng dụng công nghệ mới để mang đến cho khách hàng những trải nghiệm sản phẩm dịch vụ vượt trội.</p>

        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Lịch sử và các mốc phát triển
        </legend>
        <li>31/1/1997: Thành lập Trung tâm Dữ liệu trực tuyến FPT (FPT Online Exchange - FOX)</li>
        <li>2001: Ra mắt trang báo điện tử đầu tiên tại Việt Nam - net</li>
        <li>2002: Trở thành nhà cung cấp kết nối Internet IXP ( Internet Exchange Provider)</li>
        <li>2005: Chuyển đổi thành Công ty Cổ phần Viễn thông FPT (FPT Telecom)</li>
        <li>2007: FPT Telecom bắt đầu mở rộng hoạt động trên phạm vi toàn quốc, được cấp Giấy phép cung cấp dịch vụ viễn thông liên tỉnh và cổng kết nối quốc tế. Đặc biệt, FPT Telecom đã trở thành thành viên chính thức của Liên minh AAG (Asia America Gateway - nhóm các công ty viễn thông hai bên bờ Thái Bình Dương).</li>
        <li>2008: Trở thành nhà cung cấp dịch vụ Internet cáp quang băng rộng (FTTH) đầu tiên tại Việt Nam và chính thức có đường kết nối quốc tế từ Việt Nam đi Hồng Kông.</li>
        <li>2009: Đạt mốc doanh thu 100 triệu đô la Mỹ và mở rộng thị trường sang các nước lân cận như Campuchia.</li>
        <li>2012: Hoàn thiện tuyến trục Bắc – Nam với tổng chiều dài 4000km đi qua 30 tỉnh thành.</li>
        <li>2014: Tham gia cung cấp dịch vụ truyền hình IPTV với thương hiệu Truyền hình FPT</li>
        <li>2015: FPT Telecom có mặt trên cả nước với gần 200 VPGD, chính thức được cấp phép kinh doanh tại Myanmar, đạt doanh thu hơn 5,500 tỷ đồng và là một trong những đơn vị dẫn đầu trong triển khai chuyển đổi giao thức liên mạng IPv6.</li>
        <li>2016: Khai trương Trung tâm Dữ liệu FPT Telecom mở rộng chuẩn Uptime TIER III với quy mô lớn nhất miền Nam. Được cấp phép triển khai thử nghiệm mạng 4G tại Việt Nam. Đồng thời là doanh nghiệp Việt Nam đầu tiên nhận giải thưởng Digital Transformers of the Year của IDC năm 2016. Năm 2016, doanh thu của FPT Telecom đạt 6.666 tỷ đồng.</li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Hiện nay, FPT Telecom đang cung cấp các sản phẩm, dịch vụ chính bao gồm:
        </legend>
        <li>Cung cấp hạ tầng mạng viễn thông cho dịch vụ Internet băng rộng</li>
        <li>Cung cấp các sản phẩm, dịch vụ viễn thông, Internet</li>
        <li>Dịch vụ giá trị gia tăng trên mạng Internet, điện thoại di động</li>
        <li>Dịch vụ Truyền hình</li>
        <li>Dịch vụ tin nhắn, dữ liệu, thông tin giải trí trên mạng điện thoại di động</li>
        <li>Thiết lập hạ tầng mạng và cung cấp các dịch vụ viễn thông, Internet</li>
        <li>Xuất nhập khẩu thiết bị viễn thông và Internet.</li>
        <li>Dịch vụ viễn thông cố định nội hạt</li>
        <li>Dịch vụ viễn thông giá trị gia tăng</li>
        <li>Dịch vụ viễn thông cố định đường dài trong nước, quốc tế.</li>
        <h3 style="text-align: left;">Trong đó,</h3>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Các dịch vụ cho khách hàng đại chúng:
        </legend>
        <li>Dịch vụ Internet băng rộng (Internet FPT): xDSL - cáp đồng và FTTH - cáp quang.</li>
        <li>Dịch vụ Truyền hình trả tiền (Truyền hình FPT): với hơn 180 kênh truyền hình, hơn 30 kênh HD, nội dung phong phú, nhiều ứng dụng, sử dụng công nghệ và tiện ích hiện đại.</li>
        <li>Dịch vụ nội dung, ứng dụng trên Internet: Fshare, Fsend, FPT Play, FPT Play Box, Mix166, StarTalk...</li>
        <li>Dịch vụ, sản phẩm IoT: Smart Home, Home Security HSS, Cloud Camera...</li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Các dịch vụ cho khách hàng tổ chức, doanh nghiệp:
        </legend>
        <li>Truyền dẫn số liệu: Trong nước (kết nối nội hạt, kết nối liên tỉnh) và quốc tế (IPLC, MPLS, IEPL).</li>
        <li>Kênh thuê riêng Internet: Leased Line Internet.</li>
        <li>Dịch vụ điện thoại: Trong nước (Điện thoại cố định, VoIP, đầu số 1800/1900) và quốc tế.</li>
        <li>Dữ liệu trực tuyến: Tên miền, lưu trữ dữ liệu và email</li>
        <li>Dịch vụ quản lý: Hội nghị truyền hình, dịch vụ ảo hóa, tích hợp hệ thống, dịch vụ bảo mật.</li>
        <li>Dịch vụ điện toán đám mây (Cloud computing)</li>
        <li>Dịch vụ trung tâm dữ liệu (Data Center)</li>
        <li>Dịch vụ bảo mật</li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Các giải thưởng tiêu biểu:
        </legend>
        <li>Giải thưởng Doanh nghiệp chuyển đổi kỹ thuật số ATSA 2016</li>
        <li>Danh hiệu Sao khuê liên tiếp trong nhiều năm từ 2012 – 2015</li>
        <li>Huy chương Vàng ICT Việt Nam 2015</li>
        <li>Thương hiệu Việt tiêu biểu 2014</li>
        <li>Doanh nghiệp dịch vụ được hài lòng nhất 2013</li>
        <li>Huy chương Vàng đơn vị Internet, Viễn thông 2012</li>
        <li>Huy chương Vàng đơn vị CNTT-TT Việt Nam 2006</li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Các chứng chỉ quốc tế:
        </legend>
        <li>ISO 9001, ISO 27001, ISO 50001, ISO 20000, Uptime TIER III</li>
        <li>ITIL - Thư viện cơ sở hạ tầng CNTT</li>
        <li>CCIE, JNCIE, CDCP, CISSP...</li>
        <li>Đối tác Vàng (Gold Partner) Microsoft 2016</li>
        <li>Đối tác Vàng (Gold Partner) CISCO 2015</li>
        <li>Đối tác Hiệu quả (Best Performance) DELL 2017</li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">Liên hệ:
        </legend>
        <h3 style="text-align: left;">Trụ sở:</h3>
        <p style="text-align: justify;"><strong>Hà Nội:</strong> Tòa nhà PVI, số 1 Phạm Văn Bạch, Cầu Giấy | Tel: (84-4) 7300 2222 | Fax: (84-4) 7300 8889.</p>
        <p style="text-align: justify;"><strong>HCM:</strong> Lô 37-39A, đường 19, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7 | Tel: (84-8) 7300 2222 | Fax: (84-8)7300 8889.</p>
        <p style="text-align: justify;"><strong>Đà Nẵng:</strong> 182 - 184 Đường 2 tháng 9, Hải Châu | Tel:(84-511) 7300 2222 | Fax: (84-511) 3899 889.</p>
        <li>Tổng đài Chăm sóc khách hàng 24/7: 1900 6600</li>
        <li>HiFPT - Ứng dụng Chăm sóc khách hàng 24/7: <a href="https://hi.fpt.vn/">https://hi.fpt.vn/</a></li>
        <li>Hòm thư Hỗ trợ khách hàng: <a href="mailto:hotrokhachhang@fpt.com.vn">hotrokhachhang@fpt.com.vn</a></li>
        <li>Website chính thức:  <a href="http://www.fpt.vn">www.fpt.vn</a></li>
        <li>Facebook chính thức:  <a href="http://www.facebook.com/FptTelecom">www.facebook.com/FptTelecom</a></li>
        <legend style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 50px; font-size: 20pt; color: #F37022;">CÔNG TY THÀNH VIÊN THUỘC FPT TELECOM:
        </legend>
        <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px;">Công ty TNHH MTV Viễn thông Quốc tế FPT (FTI)</h3>
        <p style="text-align: justify;">Hà Nội: Tầng 12A tòa nhà TNR 54A Nguyễn Chí Thanh, Đống Đa, Hà Nội.</p>
        <p style="text-align: justify;">Điện thoại : (04) 7300 2222</p>
        <p style="text-align: justify;">Tp Hồ Chí Minh: Tòa nhà FPT Lô L.29B-31B-33B Tân Thuận, KCX Tân Thuận, P. Tân Thuận Đông, Q7, TP. HCM</p>
        <p style="text-align: justify;">Điện thoại: (08) 7300 2222</p>
        <h3 style="text-align: left; font-family: 'Oswald', sans-serif; margin-top: 20px;">CÔNG TY TNHH MTV VIỄN THÔNG FPT TÂN THUẬN</h3>
        <p style="text-align: justify;">Lô 37-39A, đường số 19, Khu chế xuất Tân Thuận, Phường Tân Thuận Đông, Quận 7, Thành phố Hồ Chí Minh.</p>
        <p style="text-align: justify;">Điện thoại: (84-8) 7300 2222</p>
        <p style="text-align: justify;">Fax: (84-8) 7300 8889</p>
        <style type="text/css">
          li {
            text-align: left;
            list-style: url(resources/upload/list1.png);
            font-size: 12pt;
          }
          p {
            font-size: 12pt;
          }
        </style>
    </section>
  </div>
</div>
@endsection
