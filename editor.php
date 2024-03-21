<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        /* Featured List2 ---------------------- */
.featured-list2 { background:#f2f7ff; padding:40px 0px; }
.featured-list2 .featured-slider .slick-list { overflow:hidden; }
.featured-list2 .slick-slider1 .slick-prev:before { left:-65px; color:#dadada; }
.featured-list2 .slick-slider1 .slick-next:before { right:-65px; color:#dadada; }
.featured-list2 ul { margin:0px; padding:0px; list-style-type:none; padding-left:50px; }
.featured-list2 ul li .fa { float:left; border-radius:50%; display:inline-block; width:60px; height:60px; line-height:60px; text-align:center; font-size:24px; color:#fff; }
.featured-list2 ul li .detail { margin-left:80px; }
.featured-list2 ul li .detail h4 { margin-bottom:4px; font-size:20px; } 
.featured-list2 ul li.icon1 .fa { background:#00bfe7; }
.featured-list2 ul li.icon2 .fa { background:#00c1a1; }
.featured-list2 ul li.icon3 .fa { background:#FC654C; }
.featured-list2 ul li.icon4 .fa { background:#ff9c00; }
.featured-list2 ul li.icon5 .fa { background:#ed027b; }
.featured-list2 ul li.icon6 .fa { background:#58cf00; }
.featured-list2 ul li.icon7 .fa { background:#00bfe7; }
.featured-list2 ul li.icon8 .fa { background:#00c1a1; }
.featured-list2 ul li.icon9 .fa { background:#FC654C; }
/* Filters ---------------------- */
#filters { padding:20px 0px; border-bottom: 1px solid #e9e9e9; }
#filters.fixed { position:fixed; left:0px; top:0px; width:100%; background:#fff; z-index:100; }

/*--- Slick Slider1 --- */
.slick-slider1 .slick-prev,.slick-slider1 .slick-next { position:absolute;top:50%; font-size:48px; color:#fff; top:50%; margin:0px; margin-top:-20px; text-decoration:none; z-index:10; font-size:0px; line-height:0px; background:transparent; border:none; outline:none;  width:40px; height:40px; }
.slick-slider1 .slick-prev { left:25px;}
.slick-slider1 .slick-prev:before,.slick-slider1 .slick-next:before {  position:absolute; top:17px; font-family: 'simple-line-icons'; color:#fff; display:inline-block; font-size:32px; z-index:1000;}
.slick-slider1 .slick-next { right:25px; }
.slick-slider1 .slick-prev:before { content:"\e07a"; left:0px; }
.slick-slider1 .slick-next:before { content:"\e079"; right:0px; }

.slick-dotted2 { overflow:hidden; }
.slick-dotted2 .slick-prev,.slick-dotted2 .slick-next { display:none !important; } 
.slick-dotted2 .slick-dots {    display: flex; justify-content: center; margin: 0; padding: 1rem 0; list-style-type: none; }    
.slick-dotted2 .slick-dots { position:absolute; left:0px; bottom:8px; width:100%; }
.slick-dotted2 .slick-dots li { margin: 0 0.25rem; padding-left:8px; }
.slick-dotted2 .slick-dots li:first-child { padding-left:0px; }
.slick-dotted2 .slick-dots li button { display: block; width: 14px; height: 14px; padding: 0; border: none;     border-radius: 100%; background-color: #fff; text-indent: -9999px; }
.slick-dotted2 .slick-dots li.slick-active button { background-color: #fc654c; }




    </style>
    </head>
<body>
     
	<!--feature list 2-->
    <div class="featured-list2">
        <div class="container">
            <ul class="featured-slider slick-slider1 slick-initialized slick-slider">
              <!--  <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Prevoius" role="button" style="display:block">

                </button>-->
                <div class="polite" class="slick-list draggable">
                    <div class="slick-track" role="listbox" style="opacity:1; width:3330px; transform:translate3d(-740px, 0px, 0px);">
                        <li class="clearfix icon9 slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide06" style="width:370px;"
                        data-slick-index="-1" aria-hidden="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="detail">
                                <h4>1200+</h4>
                                <p>Fculty</p>
                            </div>

                        </li>

                        <li class="clearfix icon9 slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide06" style="width:370px;"
                        data-slick-index="-1" aria-hidden="true">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
				<div class="detail">
					<h4>1200+ Eminent</h4>
					<p>Faculty</p>
				</div>			

                        </li>

                        <li class="clearfix icon9 slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide06" style="width:370px;"
                        data-slick-index="-1" aria-hidden="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="detail">
                                <h4>1200+</h4>
                                <p>Fculty</p>
                            </div>

                        </li>
                    </div>
                </div>
            </ul>
        <div>
    </div>

    <!--end feature list 2-->

    <li class="clearfix icon9 slick-slide slick-current slick-active" tabindex="-1" role="option" aria-describedby="slick-slide06" style="width:370px;"
                        data-slick-index="0" aria-hidden="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="detail">
                                <h4>1200+</h4>
                                <p>Fculty</p>
                            </div>

                        </li>
</body>
</html>