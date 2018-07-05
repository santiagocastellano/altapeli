<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>Flexisel - A responsive jQuery Carousel</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.flexisel.js')}}"></script>
</head>

<body>

<section class="section-box-slidelogo">
  <div class="segments-slidelogo-wrapper">
    <h1>Pact at work in action</h1>
    <p>We're already fuelling hundreds of offices up and down the UK, here are just a few of them:</p>
    
    
    <div class="row between-sm">

  <div class="col-sm-1">
    <div class="box"></div>
  </div>

  <div class="col-xs-12 col-sm-8 col-md-9" style="border: 1px solid black;">
<div class="slidelogo">
      <div class="container-carousel-slider">   
    <ul id="flexiselDemo3">
    <li><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png" alt="d" /></li>
    <li><img src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c535.png" alt="d"/></li>
    <li><img src="http://pedagogia.mxl.uabc.mx/sustentabilidad/YouTube-Transparent-Logo.png" alt="d"/></li>
    <li><img src="http://pedagogia.mxl.uabc.mx/sustentabilidad/YouTube-Transparent-Logo.png" alt="d"/></li>
    <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRWZuLLnjk9iFEXxc2J7sNiNvYdCWtZyHAnRza43NJPTTUoHGoSg" alt="d"/></li>
    <li><img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Microformat-logo.png" alt="d"/></li>                                                      
</ul>
</div>
    </div>  </div>

  <div class="col-sm-1">
    <div class="box"></div>
  </div>

</div>
    
    
    
  </div>
</section>
<style>
section-box-slidelogo{}
.segments-slidelogo-wrapper{text-align: center;}
.container-carousel-slider{max-width:50%;}
#flexiselDemo3 {display:none;}

.nbs-flexisel-container {
    position:relative;
    max-width:100%;
}
.nbs-flexisel-ul {
    position:relative;
    width:99999px;
    margin:0px;
    padding:0px;
    list-style-type:none;   
    overflow: auto;
}

.nbs-flexisel-inner {
    position: relative;
    overflow: hidden;
    float:left;
    width:100%;
    /*padding-left: 60px;*/
    border:1px solid #ccc;

}

.nbs-flexisel-item {
    float:left;
    margin:0px;
    padding:0px;
    cursor:pointer;
    position:relative;
    line-height:0px;
}
.nbs-flexisel-item img {
    max-width: 70%;
    cursor: pointer;
    position: relative;
    margin-top: 10px;
    margin-bottom: 10px;
    filter: grayscale(100%);
    opacity: 0.5;
}

.nbs-flexisel-item img:hover {
    filter: grayscale(0%);
    opacity: 1;
}

/*** Navigation ***/

.nbs-flexisel-nav-left,
.nbs-flexisel-nav-right {   
    position: absolute;
    cursor: pointer;
    z-index: 0;
    top: 50%;
    transform: translateY(-50%);   
    color: #707070;
    filter: grayscale(100%);
    opacity: 0.5;
}
.nbs-flexisel-nav-left:hover,
.nbs-flexisel-nav-right:hover {   
    opacity: 1;
}

.nbs-flexisel-nav-left {left: 10px;}
.nbs-flexisel-nav-left:before {content: url("https://orig00.deviantart.net/0d52/f/2017/348/8/3/arrow_left_op_by_aerolp-dbwp5mv.png") }
.nbs-flexisel-nav-left.disabled {opacity: 1;}

.nbs-flexisel-nav-right {right: 5px;}
.nbs-flexisel-nav-right:before {content: url("https://orig00.deviantart.net/e7c1/f/2017/348/4/b/arrow_right_op_by_aerolp-dbwp5mm.png")}
.nbs-flexisel-nav-right.disabled {opacity: 0.4;}
</style>
<script type="text/javascript">
$(window).load(function() {    
    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 6000,
            pauseOnHover: true
        }        
    });    
});
</script>
  </body>
