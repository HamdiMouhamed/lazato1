﻿<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Lezato : Restaurant Admin Template">
	<meta property="og:title" content="Lezato : Restaurant Admin Template">
	<meta property="og:description" content="Lezato : Restaurant Admin Template">
	<meta property="og:image" content="https://lezato.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Lezato : Restaurant Admin Template</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="gooey">
		  <span class="dot"></span>
		  <div class="dots">
			<span></span>
			<span></span>
			<span></span>
		  </div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
				<svg class="logo-abbr" width="56" height="56" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="rect-primary-rect" d="M0 20C0 8.95431 8.95431 0 20 0H36C47.0457 0 56 8.95431 56 20V36C56 47.0457 47.0457 56 36 56H20C8.95431 56 0 47.0457 0 36V20Z" fill="url(#paint0_linear)"></path>
					<path d="M17 26.5L18 37.5L37.5 37.5L38.5 26.5C41.1667 26.6667 46.3 25.4 45.5 19C44.7 12.6 39.1667 12 36.5 12.5C35 11.3334 32.5 7.5 27 8.00004C22.9375 8.36939 20 10.6667 19 12.5C16.5 12.1667 11.3 12.9 10.5 18.5C9.69997 24.1 14.5 26.1667 17 26.5Z" stroke="white" stroke-width="2"></path>
					<line x1="21.1837" y1="30.9641" x2="21.8108" y2="36.9312" stroke="white"></line>
					<line x1="34.339" y1="31.0342" x2="33.6547" y2="37.0784" stroke="white"></line>
					<line x1="27.5" y1="30" x2="27.5" y2="37" stroke="white"></line>
					<path d="M18.5 50C15.2975 50.01 13.3333 46.8334 12 45C12 45 15.3959 48.5673 17.5 47.5C18.8153 46.8328 19 45.5 19.5 45L20.5 44C21.2139 43.2861 22.5 43 22.5 43C22.5 43 24.2179 42.7032 25.25 43C26.5262 43.367 28 45 28 45C28 45 29.2775 43.262 30.5 43C31.0728 42.8773 32 43 32 43C32 43 33.2379 43.2406 34 43.5C34.7039 43.7396 35.1149 43.8634 35.75 44.25C36.8115 44.8961 36.8667 45.9903 38 46.5C40.0304 47.4133 43.5 45 43.5 45C43.5 45 41.8662 48.0913 40 49C37.3434 50.2937 35 50 32.5 48C30 46 28.5 46.5 27.5 47C27.5 47 24.5 46.5 22 49C21.5 49.5 19.9215 49.9956 18.5 50Z" fill="white" stroke="white" stroke-width="0.1"></path>
					<defs>
					<lineargradient id="paint0_linear" x1="28" y1="0" x2="28" y2="56" gradientunits="userSpaceOnUse">
					</lineargradient>
					</defs>
				</svg>
				<svg class="brand-title" width="165" height="35" viewbox="0 0 165 35" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-title-path" d="M10.912 34C8.832 34 7.008 33.536 5.44 32.608C3.872 31.68 2.656 30.448 1.792 28.912C0.928 27.376 0.496 25.68 0.496 23.824V0.399998H8.56V24.4C8.56 25.168 8.832 25.84 9.376 26.416C9.92 26.992 10.592 27.28 11.392 27.28H20.272V34H10.912ZM36.8511 34C34.0671 34 31.6191 33.488 29.5071 32.464C27.3951 31.408 25.7471 29.968 24.5631 28.144C23.4111 26.288 22.8351 24.144 22.8351 21.712C22.8351 19.024 23.3951 16.72 24.5151 14.8C25.6351 12.88 27.1231 11.408 28.9791 10.384C30.8671 9.328 32.9471 8.8 35.2191 8.8C37.8111 8.8 39.9711 9.344 41.6991 10.432C43.4591 11.52 44.7871 13.008 45.6831 14.896C46.5791 16.784 47.0271 18.912 47.0271 21.28C47.0271 21.728 46.9951 22.224 46.9311 22.768C46.8991 23.312 46.8511 23.744 46.7871 24.064H30.6591C30.9471 25.344 31.6191 26.304 32.6751 26.944C33.7311 27.552 35.0431 27.856 36.6111 27.856H44.1471V34H36.8511ZM30.4671 19.408H39.8271C39.7311 18.064 39.2991 16.96 38.5311 16.096C37.7631 15.232 36.6591 14.8 35.2191 14.8C33.7151 14.8 32.5791 15.28 31.8111 16.24C31.0751 17.168 30.6271 18.224 30.4671 19.408ZM56.6901 34C54.6741 34 53.0741 33.376 51.8901 32.128C50.7061 30.88 50.1141 29.408 50.1141 27.712C50.1141 26.592 50.3861 25.6 50.9301 24.736C51.5061 23.872 52.2741 23.136 53.2341 22.528L62.0181 16.672C62.3061 16.512 62.4501 16.32 62.4501 16.096C62.4501 15.712 62.2261 15.52 61.7781 15.52H51.2181L51.1701 9.376H64.3701C65.6181 9.376 66.7221 9.68 67.6821 10.288C68.6741 10.864 69.4421 11.632 69.9861 12.592C70.5301 13.552 70.8021 14.592 70.8021 15.712C70.8021 16.768 70.5301 17.76 69.9861 18.688C69.4741 19.584 68.7701 20.336 67.8741 20.944L59.0901 26.704C58.8341 26.896 58.7061 27.088 58.7061 27.28C58.7061 27.664 58.9301 27.856 59.3781 27.856H70.3221V34H56.6901ZM85.4845 34.576C83.2765 34.576 81.3405 34.016 79.6765 32.896C78.0445 31.776 76.7645 30.272 75.8365 28.384C74.9085 26.464 74.4445 24.304 74.4445 21.904C74.4445 19.408 74.9725 17.184 76.0285 15.232C77.1165 13.248 78.6525 11.68 80.6365 10.528C82.6525 9.376 85.0365 8.8 87.7885 8.8C90.5405 8.8 92.8765 9.376 94.7965 10.528C96.7485 11.68 98.2365 13.232 99.2605 15.184C100.317 17.136 100.845 19.328 100.845 21.76V34H93.5485V30.064H93.3565C92.6525 31.344 91.6765 32.416 90.4285 33.28C89.1805 34.144 87.5325 34.576 85.4845 34.576ZM87.6925 28.144C89.3885 28.144 90.7325 27.536 91.7245 26.32C92.7485 25.072 93.2605 23.52 93.2605 21.664C93.2605 19.904 92.7485 18.416 91.7245 17.2C90.7325 15.952 89.3885 15.328 87.6925 15.328C85.9325 15.328 84.5405 15.952 83.5165 17.2C82.5245 18.416 82.0285 19.904 82.0285 21.664C82.0285 23.488 82.5245 25.024 83.5165 26.272C84.5405 27.52 85.9325 28.144 87.6925 28.144Z" fill="#FD683E"></path>
					<path d="M115.371 34C113.099 34 111.323 33.36 110.043 32.08C108.763 30.8 108.123 29.04 108.123 26.8V15.472H104.091V9.376H108.123V3.376H115.611V9.376H122.379V15.472H115.611V26.368C115.611 26.784 115.739 27.12 115.995 27.376C116.251 27.632 116.587 27.76 117.003 27.76H122.379V34H115.371ZM138.273 34.576C135.745 34.576 133.473 34.016 131.457 32.896C129.441 31.776 127.841 30.256 126.657 28.336C125.505 26.384 124.929 24.176 124.929 21.712C124.929 19.248 125.505 17.056 126.657 15.136C127.841 13.184 129.441 11.648 131.457 10.528C133.473 9.376 135.745 8.8 138.273 8.8C140.801 8.8 143.057 9.376 145.041 10.528C147.057 11.648 148.641 13.184 149.793 15.136C150.977 17.056 151.569 19.248 151.569 21.712C151.569 24.176 150.977 26.384 149.793 28.336C148.641 30.256 147.057 31.776 145.041 32.896C143.025 34.016 140.769 34.576 138.273 34.576ZM138.273 28.096C140.033 28.096 141.441 27.488 142.497 26.272C143.553 25.024 144.081 23.488 144.081 21.664C144.081 19.872 143.553 18.368 142.497 17.152C141.441 15.904 140.033 15.28 138.273 15.28C136.481 15.28 135.057 15.904 134.001 17.152C132.945 18.368 132.417 19.872 132.417 21.664C132.417 23.488 132.945 25.024 134.001 26.272C135.057 27.488 136.481 28.096 138.273 28.096ZM159.635 34.576C158.355 34.576 157.251 34.128 156.323 33.232C155.427 32.304 154.979 31.216 154.979 29.968C154.979 28.688 155.427 27.6 156.323 26.704C157.251 25.776 158.355 25.312 159.635 25.312C160.883 25.312 161.955 25.776 162.851 26.704C163.779 27.6 164.243 28.688 164.243 29.968C164.243 31.216 163.779 32.304 162.851 33.232C161.955 34.128 160.883 34.576 159.635 34.576Z" fill="#202020"></path>
				</svg>


            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"></polygon><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"></rect><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "></path></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="nav-item">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item recipe">
								<a href="javascript:void(0);" class="btn btn-primary btn-rounded">Recipe Guide</a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#9B9B9B"></path>
									</svg>
                                    <span class="badge light text-white bg-primary rounded-circle">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell-link ai-icon" href="javascript:void(0);">
                               <svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.4604 3.84888H5.31685C4.64745 3.84961 4.00568 4.11586 3.53234 4.58919C3.059 5.06253 2.79276 5.7043 2.79202 6.3737V18.1562C2.79276 18.8256 3.059 19.4674 3.53234 19.9407C4.00568 20.4141 4.64745 20.6803 5.31685 20.6811C5.54002 20.6812 5.75401 20.7699 5.91181 20.9277C6.06961 21.0855 6.15832 21.2995 6.15846 21.5227V23.3168C6.15846 23.6215 6.24115 23.9204 6.39771 24.1818C6.55427 24.4431 6.77882 24.6571 7.04744 24.8009C7.31605 24.9446 7.61864 25.0128 7.92295 24.9981C8.22726 24.9834 8.52186 24.8863 8.77536 24.7173L14.6173 20.8224C14.7554 20.7299 14.9179 20.6807 15.0841 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.472 19.3664 21.6222 18.8359L24.8965 7.05011C24.9999 6.67481 25.0152 6.28074 24.9413 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.9309 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4604 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0841C14.5856 18.9972 14.0981 19.1448 13.6836 19.4219L7.84168 23.3168V21.5227C7.84094 20.8533 7.5747 20.2115 7.10136 19.7382C6.62802 19.2648 5.98625 18.9986 5.31685 18.9978C5.09368 18.9977 4.87969 18.909 4.72189 18.7512C4.56409 18.5934 4.47537 18.3794 4.47524 18.1562V6.3737C4.47537 6.15054 4.56409 5.93655 4.72189 5.77874C4.87969 5.62094 5.09368 5.53223 5.31685 5.5321H22.4604C22.5905 5.53243 22.7188 5.56277 22.8352 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2641 6.09045 23.2887 6.21821C23.3132 6.34597 23.3079 6.47766 23.2733 6.60304Z" fill="#9B9B9B"></path>
									<path d="M7.84167 11.4233H12.0497C12.2729 11.4233 12.487 11.3347 12.6448 11.1768C12.8027 11.019 12.8913 10.8049 12.8913 10.5817C12.8913 10.3585 12.8027 10.1444 12.6448 9.98661C12.487 9.82878 12.2729 9.74011 12.0497 9.74011H7.84167C7.61846 9.74011 7.4044 9.82878 7.24656 9.98661C7.08873 10.1444 7.00006 10.3585 7.00006 10.5817C7.00006 10.8049 7.08873 11.019 7.24656 11.1768C7.4044 11.3347 7.61846 11.4233 7.84167 11.4233Z" fill="#9B9B9B"></path>
									<path d="M15.4162 13.1066H7.84167C7.61846 13.1066 7.4044 13.1952 7.24656 13.3531C7.08873 13.5109 7.00006 13.725 7.00006 13.9482C7.00006 14.1714 7.08873 14.3855 7.24656 14.5433C7.4044 14.7011 7.61846 14.7898 7.84167 14.7898H15.4162C15.6394 14.7898 15.8534 14.7011 16.0113 14.5433C16.1691 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1691 13.5109 16.0113 13.3531C15.8534 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#9B9B9B"></path>
								</svg>
									<span class="badge light text-white bg-primary rounded-circle">5</span>
                                </a>
							</li>
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/avatar/profile-1.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="./login.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
							
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow" href="page-login.php" >
							<!-- <i class="flaticon-025-dashboard"></i> -->
							<span class="nav-text">Add Restaurant</a></span>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
							<li><a href="post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
							<li><a href="uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.php">Login</a></li>
                            <li><a href="page-register.php">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="plus-box">
					<img src="images/plus.png" alt="">
					<h5 class="fs-18 font-w700">Add Menus</h5>
					<p class="fs-14 font-w400">Manage your food <br>and beverages menus<i class="fas fa-arrow-right ms-3"></i></p>
				</div>
				<div class="copyright">
					<p><strong>Lezato Restaurant Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Dashboard</h2>
					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
						</ol>
					</div>
				</div>	
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="menu">
											<span class="font-w500 fs-16 d-block mb-2">Total Menus</span>
											<h2>459</h2>
										</div>	
										<div class="d-inline-block position-relative donut-chart-sale">
											<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
											<small class="text-black">
												<svg width="31" height="30" viewbox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M30.8495 7.03697H22.274V1.75781H28.5565V0H20.511V7.03697H11.9357V12.3132H13.7565L13.919 14.7549H9.2884C5.81084 14.7549 2.93817 17.3859 2.56674 20.7561C1.51859 21.1073 0.761047 22.0953 0.761047 23.2571C0.761047 24.4244 1.5257 25.4164 2.58166 25.7632C2.94436 28.1582 5.02231 30 7.5238 30H27.8522L29.0287 12.3132H30.8495V7.03697ZM9.2884 16.5127H17.0291C19.4851 16.5127 21.5318 18.2881 21.9496 20.6188H4.36785C4.78564 18.2881 6.83214 16.5127 9.2884 16.5127ZM3.40692 22.3766H22.9103C23.3972 22.3766 23.7934 22.7717 23.7934 23.2569C23.7934 23.7424 23.3972 24.1372 22.9103 24.1372H3.40692C2.92003 24.1372 2.52405 23.7424 2.52405 23.2569C2.52405 22.7717 2.92003 22.3766 3.40692 22.3766ZM7.5238 28.2422C6.04545 28.2422 4.79643 27.2479 4.41146 25.8952H21.9058C21.521 27.2479 20.272 28.2422 18.7934 28.2422H7.5238ZM26.2024 28.2422H22.599C23.1888 27.5517 23.5937 26.7002 23.7356 25.7632C24.7915 25.4164 25.5564 24.4244 25.5564 23.2571C25.5564 22.0953 24.7989 21.1073 23.7507 20.7561C23.3793 17.3859 20.5069 14.7549 17.0291 14.7549H15.6859L15.5234 12.3132H27.2618L26.2024 28.2422ZM29.0865 10.5553H13.6987V8.79478H29.0865V10.5553Z" fill="#624FD1"></path>
												</svg>
											</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="menu">
											<span class="font-w500 fs-16 d-block mb-2">Total Revenue</span>
											<h2>$87,561</h2>
										</div>	
										<div class="d-inline-block position-relative donut-chart-sale">
											<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/6</span>
											<small class="text-black">
												<svg width="19" height="36" viewbox="0 0 19 36" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.8469 24.36C18.8469 25.64 18.5269 26.8667 17.8869 28.04C17.2469 29.1867 16.3003 30.1467 15.0469 30.92C13.8203 31.6933 12.3403 32.1333 10.6069 32.24V35.48H8.44695V32.24C6.02028 32.0267 4.04695 31.2533 2.52694 29.92C1.00694 28.56 0.233612 26.84 0.206945 24.76H4.08695C4.19361 25.88 4.60695 26.8533 5.32695 27.68C6.07361 28.5067 7.11361 29.0267 8.44695 29.24V19.24C6.66028 18.7867 5.22028 18.32 4.12695 17.84C3.03361 17.36 2.10028 16.6133 1.32694 15.6C0.553612 14.5867 0.166945 13.2267 0.166945 11.52C0.166945 9.36 0.913612 7.57333 2.40695 6.16C3.92695 4.74666 5.94028 3.96 8.44695 3.8V0.479998H10.6069V3.8C12.8736 3.98667 14.7003 4.72 16.0869 6C17.4736 7.25333 18.2736 8.89333 18.4869 10.92H14.6069C14.4736 9.98667 14.0603 9.14667 13.3669 8.4C12.6736 7.62667 11.7536 7.12 10.6069 6.88V16.64C12.3669 17.0933 13.7936 17.56 14.8869 18.04C16.0069 18.4933 16.9403 19.2267 17.6869 20.24C18.4603 21.2533 18.8469 22.6267 18.8469 24.36ZM3.88695 11.32C3.88695 12.6267 4.27361 13.6267 5.04695 14.32C5.82028 15.0133 6.95361 15.5867 8.44695 16.04V6.8C7.06028 6.93333 5.95361 7.38667 5.12695 8.16C4.30028 8.90667 3.88695 9.96 3.88695 11.32ZM10.6069 29.28C12.0469 29.12 13.1669 28.6 13.9669 27.72C14.7936 26.84 15.2069 25.7867 15.2069 24.56C15.2069 23.2533 14.8069 22.2533 14.0069 21.56C13.2069 20.84 12.0736 20.2667 10.6069 19.84V29.28Z" fill="#624FD1"></path>
												</svg>
											</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="menu">
											<span class="font-w500 fs-16 d-block mb-2">Total Oders</span>
											<h2>247</h2>
										</div>	
										<div class="d-inline-block position-relative donut-chart-sale">
											<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
											<small class="text-black">
												<svg width="19" height="36" viewbox="0 0 19 36" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M18.8469 24.36C18.8469 25.64 18.5269 26.8667 17.8869 28.04C17.2469 29.1867 16.3003 30.1467 15.0469 30.92C13.8203 31.6933 12.3403 32.1333 10.6069 32.24V35.48H8.44695V32.24C6.02028 32.0267 4.04695 31.2533 2.52694 29.92C1.00694 28.56 0.233612 26.84 0.206945 24.76H4.08695C4.19361 25.88 4.60695 26.8533 5.32695 27.68C6.07361 28.5067 7.11361 29.0267 8.44695 29.24V19.24C6.66028 18.7867 5.22028 18.32 4.12695 17.84C3.03361 17.36 2.10028 16.6133 1.32694 15.6C0.553612 14.5867 0.166945 13.2267 0.166945 11.52C0.166945 9.36 0.913612 7.57333 2.40695 6.16C3.92695 4.74666 5.94028 3.96 8.44695 3.8V0.479998H10.6069V3.8C12.8736 3.98667 14.7003 4.72 16.0869 6C17.4736 7.25333 18.2736 8.89333 18.4869 10.92H14.6069C14.4736 9.98667 14.0603 9.14667 13.3669 8.4C12.6736 7.62667 11.7536 7.12 10.6069 6.88V16.64C12.3669 17.0933 13.7936 17.56 14.8869 18.04C16.0069 18.4933 16.9403 19.2267 17.6869 20.24C18.4603 21.2533 18.8469 22.6267 18.8469 24.36ZM3.88695 11.32C3.88695 12.6267 4.27361 13.6267 5.04695 14.32C5.82028 15.0133 6.95361 15.5867 8.44695 16.04V6.8C7.06028 6.93333 5.95361 7.38667 5.12695 8.16C4.30028 8.90667 3.88695 9.96 3.88695 11.32ZM10.6069 29.28C12.0469 29.12 13.1669 28.6 13.9669 27.72C14.7936 26.84 15.2069 25.7867 15.2069 24.56C15.2069 23.2533 14.8069 22.2533 14.0069 21.56C13.2069 20.84 12.0736 20.2667 10.6069 19.84V29.28Z" fill="#624FD1"></path>
												</svg>
											</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex align-items-center justify-content-between">
										<div class="menu">
											<span class="font-w500 fs-16 d-block mb-2">Total Customers</span>
											<h2>872</h2>
										</div>	
										<div class="d-inline-block position-relative donut-chart-sale">
											<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/7</span>
											<small class="text-black">
												<svg width="32" height="36" viewbox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.0444 19.25C12.0362 19.25 13.0057 18.9568 13.8304 18.4074C14.6551 17.8579 15.2978 17.0771 15.6774 16.1634C16.0569 15.2498 16.1563 14.2445 15.9628 13.2746C15.7693 12.3046 15.2917 11.4137 14.5903 10.7145C13.889 10.0152 12.9955 9.539 12.0227 9.34608C11.0499 9.15315 10.0416 9.25217 9.12531 9.6306C8.20899 10.009 7.42579 10.6499 6.87476 11.4722C6.32374 12.2944 6.02962 13.2611 6.02962 14.25C6.03092 15.5757 6.55967 16.8467 7.49984 17.7841C8.44001 18.7215 9.71478 19.2487 11.0444 19.25ZM11.0444 11.75C11.5403 11.75 12.0251 11.8966 12.4374 12.1713C12.8497 12.446 13.1711 12.8365 13.3609 13.2933C13.5507 13.7501 13.6003 14.2528 13.5036 14.7377C13.4068 15.2227 13.168 15.6681 12.8174 16.0178C12.4667 16.3674 12.0199 16.6055 11.5335 16.702C11.0472 16.7984 10.543 16.7489 10.0848 16.5597C9.62668 16.3705 9.23508 16.0501 8.95957 15.6389C8.68405 15.2278 8.537 14.7445 8.537 14.25C8.53789 13.5872 8.80235 12.9519 9.27238 12.4832C9.74241 12.0146 10.3797 11.7509 11.0444 11.75Z" fill="#624FD1"></path>
													<path d="M30.632 22.4625C31.0458 21.9098 31.3223 21.2672 31.4388 20.5873C31.5552 19.9074 31.5082 19.2097 31.3017 18.5514L30.5058 15.9696C30.1322 14.7451 29.3726 13.6733 28.3398 12.9132C27.307 12.1531 26.0559 11.7452 24.7722 11.75H19.1468C18.8143 11.75 18.4954 11.8817 18.2603 12.1161C18.0252 12.3505 17.8931 12.6685 17.8931 13C17.8931 13.3315 18.0252 13.6495 18.2603 13.8839C18.4954 14.1183 18.8143 14.25 19.1468 14.25H24.7722C25.5192 14.2474 26.2471 14.485 26.8481 14.9274C27.449 15.3698 27.891 15.9935 28.1084 16.706L28.9043 19.2866C28.9921 19.5713 29.0117 19.8725 28.9615 20.1661C28.9114 20.4597 28.7928 20.7374 28.6154 20.977C28.438 21.2166 28.2067 21.4114 27.9401 21.5456C27.6735 21.6799 27.379 21.7499 27.0803 21.75H15.5853C15.5499 21.75 15.5201 21.7671 15.485 21.7701C15.4008 21.7669 15.3194 21.75 15.2339 21.75H7.37331C5.98015 21.7449 4.62249 22.1879 3.50187 23.0132C2.38125 23.8385 1.55741 25.0021 1.15264 26.3312L0.216641 29.3625C-0.00199068 30.0719 -0.0506583 30.8225 0.0745503 31.554C0.199759 32.2856 0.495352 32.9776 0.937568 33.5746C1.37979 34.1715 1.95629 34.6567 2.62075 34.9911C3.28521 35.3255 4.01908 35.4998 4.76339 35.5H17.843C18.5873 35.4999 19.3213 35.3256 19.9858 34.9912C20.6503 34.6569 21.2269 34.1717 21.6691 33.5748C22.1114 32.9778 22.4071 32.2857 22.5323 31.5542C22.6575 30.8226 22.6089 30.0719 22.3902 29.3625L21.4548 26.3315C21.2179 25.5767 20.8448 24.8713 20.354 24.25H27.0803C27.7718 24.2532 28.4543 24.0928 29.0717 23.7821C29.6891 23.4714 30.2238 23.0192 30.632 22.4625ZM19.6524 32.089C19.4445 32.3726 19.1721 32.6031 18.8576 32.7614C18.543 32.9198 18.1953 33.0015 17.843 33H4.76339C4.41135 32.9999 4.06424 32.9175 3.74996 32.7594C3.43569 32.6012 3.16303 32.3717 2.95391 32.0894C2.7448 31.807 2.60506 31.4796 2.54595 31.1336C2.48684 30.7876 2.51 30.4326 2.61357 30.0971L3.54894 27.0661C3.79744 26.2489 4.30376 25.5335 4.99265 25.0261C5.68155 24.5188 6.51624 24.2466 7.37269 24.25H15.2333C16.0897 24.2466 16.9244 24.5188 17.6133 25.0261C18.3022 25.5335 18.8085 26.2489 19.057 27.0661L19.9924 30.0971C20.0979 30.4323 20.1221 30.7877 20.063 31.134C20.0039 31.4804 19.8632 31.8078 19.6524 32.0894V32.089Z" fill="#624FD1"></path>
													<path d="M21.7007 9.24999C22.5685 9.24999 23.4169 8.9934 24.1385 8.51267C24.8601 8.03194 25.4225 7.34866 25.7546 6.54923C26.0867 5.74981 26.1736 4.87014 26.0043 4.02148C25.835 3.17281 25.4171 2.39326 24.8034 1.78141C24.1898 1.16955 23.4079 0.752876 22.5567 0.584066C21.7056 0.415256 20.8233 0.501896 20.0215 0.833029C19.2197 1.16416 18.5344 1.72492 18.0523 2.44438C17.5702 3.16384 17.3128 4.0097 17.3128 4.875C17.3142 6.03489 17.7769 7.14688 18.5995 7.96705C19.4221 8.78722 20.5374 9.2486 21.7007 9.24999ZM21.7007 3C22.0726 3 22.4362 3.10997 22.7455 3.31599C23.0547 3.52202 23.2958 3.81485 23.4381 4.15747C23.5804 4.50008 23.6177 4.87708 23.5451 5.24079C23.4725 5.6045 23.2934 5.9386 23.0304 6.20082C22.7674 6.46304 22.4324 6.64162 22.0676 6.71397C21.7028 6.78631 21.3247 6.74918 20.9811 6.60727C20.6374 6.46535 20.3437 6.22503 20.1371 5.91669C19.9305 5.60835 19.8202 5.24584 19.8202 4.875C19.8207 4.37789 20.019 3.9013 20.3716 3.54979C20.7241 3.19829 21.2021 3.00056 21.7007 3Z" fill="#624FD1"></path>
												</svg>
											</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header border-0 flex-wrap pb-0">
								<div class="mb-sm-0 mb-2">	
									<h4 class="fs-20">Today’s Revenue</h4>
									<span>Lorem ipsum dolor sit amet, consectetur</span>
								</div>	
								<div>
									<h2 class="font-w700 mb-0">$ 240.45</h2>	
								<p class="mb-0 font-w700"><span class="text-success">0,5% </span>than last day</p>
								</div>
							</div>
							<div class="card-body py-0">
								<div id="revenueChart" class="revenueChart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="fs-20 mb-1">Daily Trending Menus</h4>
											<span>Lorem ipsum dolor sit amet, consectetur</span>
										</div>	
									</div>
									<div class="card-body pb-0">
										<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
											<span class="num">#1</span>
											<div class="me-auto pe-3">
												<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">Medium Spicy Spagethi Italiano</h2></a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/pic1.jpg" alt="">
										</div>	
										<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
											<span class="num">#2</span>
											<div class="me-auto pe-3">
												<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">Watermelon juice with ice</h2></a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/pic4.jpg" alt="">
										</div>	
										<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
											<span class="num">#3</span>
											<div class="me-auto pe-3">
												<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">Chicken curry special with cucumber</h2></a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/pic3.jpg" alt="">
										</div>	
										<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
											<span class="num">#4</span>
											<div class="me-auto pe-3">
												<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">Italiano Pizza With Garlic</h2></a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/pic2.jpg" alt="">
										</div>
										<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
											<span class="num">#5</span>
											<div class="me-auto pe-3">
												<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">Tuna Soup spinach with himalaya salt</h2></a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/pic1.jpg" alt="">
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h4 class="fs-20 mb-1">Trending Keyword</h4>
											<span>Lorem ipsum dolor sit amet, consectetur</span>
										</div>	
									</div>
									<div class="card-body">
										<div class="progress default-progress">
											<div class="progress-bar bg-gradient-1 progress-animated" style="width: 45%; height:11px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
											<span class="fs-16 text-primary font-w600">#pizza</span>
											<span class="fs-14"><span class="text-black pe-2"></span>452 times</span>
										</div>
										<div class="progress default-progress">
											<div class="progress-bar bg-gradient-1 progress-animated" style="width: 30%; height:11px;" role="progressbar">
												<span class="sr-only">30% Complete</span>
											</div>
										</div>
										<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
											<span class="fs-16 text-primary font-w600">#breakfast</span>
											<span class="fs-14"><span class="text-black pe-2"></span>97 times</span>
										</div>
										<div class="progress default-progress">
											<div class="progress-bar bg-gradient-1 progress-animated" style="width: 45%; height:11px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
											<span class="fs-16 text-primary font-w600">#coffee</span>
											<span class="fs-14"><span class="text-black pe-2"></span>61 times</span>
										</div>
										<div>
											<h4 class="fs-20 mb-3">Others tag</h4>
											<div>
												<a href="javascript:void(0);" class=" btn btn-outline-primary btn-rounded me-2 mb-3 btn-sm">#japanessefood</a>
												<a href="javascript:void(0);" class=" btn btn-outline-primary btn-rounded mb-3  btn-sm">#design</a>
												<a href="javascript:void(0);" class=" btn btn-outline-primary btn-rounded me-2 mb-3 btn-sm">#projectmanagement</a>
												<a href="javascript:void(0);" class=" btn btn-outline-primary btn-rounded btn-sm mb-3">16+</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0  flex-wrap">
										<div>
											<h4 class="fs-20 mb-1">Customer Map</h4>
											<span>Lorem ipsum dolor sit amet, consectetur</span>
										</div>	
										<div class="d-flex">
											<div class="card-action coin-tabs mt-3 mt-sm-0">
												<ul class="nav nav-tabs" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-bs-toggle="tab" href="#Monthly" role="tab">Monthly</a>
													</li>
													<li class="nav-item">
														<a class="nav-link " data-bs-toggle="tab" href="#Daily" role="tab">Daily</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
													</li>
												</ul>
											</div>
											<div class="dropdown custom-dropdown mb-0 ms-3">
												<div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
													<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Details</a>
													<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pb-2">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Monthly">
												<div id="chartTimeline1" class="chart-timeline"></div>
											</div>	
											<div class="tab-pane fade " id="Daily">
												<div id="chartTimeline2" class="chart-timeline"></div>
											</div>
											<div class="tab-pane fade " id="Today">
												<div id="chartTimeline3" class="chart-timeline"></div>
											</div>
										</div>
									</div>	
								</div>	
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="row">
									<div class="col-xl-12">
										<div class="card customer-wrapper">
											<div class="card-header border-0">
												<div>	
													<h4 class="fs-20 mb-1">Customers</h4>
													<span>Lorem ipsum dolor</span>
												</div>	
												<div class="add-btn">
													<a href="javascript:void(0);"><i class="fas fa-plus"></i></a>
												</div>
											</div>
											<div class="card-body height400 loadmore-content dz-scroll pb-0 pt-0" id="CustomerListContent">
												<div class="d-flex align-items-center mb-4">
													<div class="recent-customer me-3">
														<img src="images/contacts/c1.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">Benny Chagur</span>
														<p class="font-w600 mb-0 text-primary">MEMBER</p>
													</div>
												</div>	
												<div class="d-flex align-items-center mb-4">
													<div class="recent-customer me-3">
														<img src="images/contacts/c2.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">Chynita Bella</span>
														<p class="font-w600 mb-0 text-primary">MEMBER</p>
													</div>
												</div>	
												<div class="d-flex align-items-center mb-4">
													<div class="recent-customer me-3">
														<img src="images/contacts/c3.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">David Heree</span>
														<p class="font-w600 mb-0">Regular Customer</p>
													</div>
												</div>	
												<div class="d-flex align-items-center mb-4">
													<div class="recent-customer me-3">
														<img src="images/contacts/c4.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">Evan D. Mas</span>
														<p class="font-w600 mb-0 text-primary">MEMBER</p>
													</div>
												</div>	
												<div class="d-flex align-items-center mb-4">
													<div class="recent-customer me-3">
														<img src="images/contacts/c5.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">Supratman</span>
														<p class="font-w600 mb-0">Regular Customer</p>
													</div>
												</div>	
												<div class="d-flex align-items-center">
													<div class="recent-customer me-3">
														<img src="images/contacts/c6.jpg" width="50" alt="">
													</div>
													<div>
														<span class="c-name">John Kusnaidi</span>
														<p class="font-w600 mb-0">Regular Customer</p>
													</div>
												</div>	
											</div>
											<div class="card-footer border-0 down-arrow pb-0">
												<a href="javascript:void(0);" class="dz-load-more fas fa-chevron-down" id="CustomerList" rel="ajax/customer-list.html"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-xxl-12">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>	
													<h4 class="fs-20 mb-1">Delivery Maps</h4>
													<span>Lorem ipsum dolor sit amet, consectetur</span>
												</div>
												<div class="dropdown custom-dropdown mb-0 ms-3">
													<div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															<path d="M20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0);">Details</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<img src="images/map1.png" class="w-100" alt="">
												<div class="d-flex align-items-center my-4">
													<svg class="me-2 vert-move" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M44.0137 6.54388C42.2281 4.7611 39.4593 4.65722 36.8259 7.28777L28.7931 15.32C27.902 14.9411 26.9876 14.7305 26.2148 14.5211L10.4654 11.0694C7.87258 10.5022 5.30925 13.9917 9.24425 16.2661L21.0359 23.0772L13.5298 32.3533L8.5037 31.9028C6.79647 31.7522 5.41036 33.5628 7.28536 35.4389L15.1209 43.2711C16.9959 45.1461 18.8076 43.7628 18.6537 42.0555L18.2054 37.0294L27.4815 29.5206L34.2931 41.3144C36.5676 45.25 40.057 42.6839 39.4898 40.0939L36.0348 24.3439C35.8293 23.5711 35.6181 22.6572 35.2387 21.7639L43.2681 13.7339C45.9026 11.1011 45.7987 8.32944 44.0137 6.54388Z" fill="#624FD1"></path>
														<path d="M8.3045 18.5694C7.97728 18.5811 7.66784 18.7167 7.43895 18.9517L4.86339 21.5266C4.37228 22.0183 4.37228 22.8172 4.86117 23.3094C5.35339 23.8011 6.15173 23.8044 6.64339 23.3116L9.21895 20.7372C10.0495 19.9355 9.45617 18.5344 8.3045 18.5694Z" fill="#FD683E"></path>
														<path d="M13.8341 21.4261C13.5069 21.4339 13.1975 21.5733 12.9686 21.8072L7.5347 27.2416C7.04248 27.7333 7.0397 28.5283 7.53192 29.0233C8.02359 29.515 8.82192 29.515 9.31414 29.0233L14.748 23.5894C15.5764 22.7911 14.9864 21.3905 13.8341 21.4261Z" fill="#FD683E"></path>
														<path d="M27.8357 35.4295C27.5085 35.4411 27.1963 35.5772 26.9702 35.8117L21.5363 41.2456C21.0041 41.7295 20.9841 42.5595 21.493 43.0684C21.9996 43.5784 22.833 43.5578 23.3157 43.025L28.753 37.5911C29.5746 36.7906 28.9846 35.395 27.8357 35.4295Z" fill="#FD683E"></path>
														<path d="M30.6888 40.9594C30.3616 40.9683 30.0521 41.105 29.8233 41.3383L27.2477 43.9178C26.756 44.4094 26.756 45.2078 27.251 45.6961C27.7427 46.1889 28.541 46.1889 29.0333 45.6961L31.6088 43.1211C32.4305 42.3166 31.8377 40.9222 30.6888 40.9594Z" fill="#FD683E"></path>
													</svg>
													<h5 class="fs-20">Upcoming Shipping Schedule </h5>
												</div>
												<div class="loadmore-content dz-scroll" id="DelieveryListContent">
													<div class="d-sm-flex d-block border-bottom align-items-center mb-2">
														<div class="delivery-customer me-auto mb-2">
															<img src="images/contacts/c33.jpg" alt="">	
															<div>	
																<span class="font-w600 text-black fs-16">John Kusnaidi <span class="text-primary">(4 Items)</span></span>
																<span class="d-block fs-12 font-w600">Will be shipping on 11 : 24 AM</span>
															</div>	
														</div>
														<div class="d-flex align-items-center justify-content-end text-end location mb-2">
															<div>
																<span class="d-block f-s14 font-w400 text-black">Franklin Avenue St. London, ABC 12345</span>
																<span class="text-end f-s14 font-w400 text-black">United Kingdom</span>
															</div>
															<i class="fas fa-map-marker-alt"></i>
														</div>
													</div>
													<div class="d-sm-flex d-block border-bottom align-items-center mb-2">
														<div class="delivery-customer me-auto mb-2">
															<img src="images/contacts/c11.jpg" alt="">	
															<div>	
																<span class="font-w600 text-black fs-16">Margaretha  <span class="text-primary">(2 Items)</span></span>
																<span class="d-block fs-12 font-w600">Will be shipping on 11 : 24 AM</span>
															</div>	
														</div>
														<div class="d-flex align-items-center justify-content-end text-end location mb-2">
															<div>
																<span class="d-block f-s14 font-w400 text-black">Groove Street Families, DEF 244125</span>
																<span class="text-end f-s14 font-w400 text-black">United Kingdom</span>
															</div>
															<i class="fas fa-map-marker-alt"></i>
														</div>
													</div>
													<div class="d-sm-flex d-block border-bottom align-items-center mb-2">
														<div class="delivery-customer me-auto mb-2">
															<img src="images/contacts/c22.jpg" alt="">	
															<div>	
																<span class="font-w600 text-black fs-16">Richard Lee   <span class="text-primary">(4 Items)</span></span>
																<span class="d-block fs-12 font-w600">Will be shipping on 11 : 24 AM</span>
															</div>	
														</div>
														<div class="d-flex align-items-center justify-content-end text-end location mb-2">
															<div>
																<span class="d-block f-s14 font-w400 text-black">Bossman St. 21444 ABC</span>
																<span class="text-end f-s14 font-w400 text-black">United Kingdom</span>
															</div>
															<i class="fas fa-map-marker-alt"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer border-0 down-arrow pb-0">
												<a href="javascript:void(0);" class="dz-load-more fas fa-chevron-down" id="DelieveryList" rel="ajax/delevery.html"></a>
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
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
		
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>