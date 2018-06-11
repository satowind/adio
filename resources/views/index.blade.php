@extends( 'app.app' )
@section('section')
<div class="container-fluid">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-danger text-center"> Disclaimer</h2>
          </div>
            <div class="modal-body">
              <h5 class="text-danger text-center"> 
              This site is under construction and will be opened officially soon.
              </h5>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



    <div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-bgfit="cover" data-bgposition="center 70%" data-lazyload="img/12.jpg" alt="" data-bgparallax="10">
              <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                {{--  <div class="sl-title-top">Our Loan Offerings</div>  --}}
                <div class="sl-title">Our Loan  <br /><span>Offerings</span></div>
                <p>Our loan products are tailor-made, flexible and affordable! We help you achieve financial freedom!</p><a href="services" class="cws-button ">Learn more</a>
              </div>
            </li>
            <li data-masterspeed="700"  data-transition="fade" ><img src="rs-plugin/assets/loader.gif" data-lazyload="img/13.jpg" data-bgposition="center 45%" alt="" data-bgparallax="10">
              <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-center">
                {{--  <div class="sl-title-top">Business & Financial Advice</div>  --}}
                <div class="sl-title">Business &<span>Financial Advice</span></div>
                <p>Leverage our extensive market and professional knowledge to achieve your business and financial objectives.</p><a href="services" class="cws-button ">Learn more</a>
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade" ><img src="rs-plugin/assets/loader.gif" data-lazyload="img/14.jpg" data-bgposition="center 67%" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-right">
                {{--  <div class="sl-title-top ">Agency Banking</div>  --}}
                <div class="sl-title ">Agency <span>Banking</span></div>
                <p class="">We help banks and other institutions deliver transaction and payment services to your doorsteps!</p><a href="services" class="cws-button ">Learn more</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- page section-->
      <section class="page-section pb-0">
        <div class="container">  
          <div class="row">
            <div class="col-md-8 col-md-offset-2 mb-20">
              <h2 class="title-section mb0 mt-0 text-center">We Are Hybrid Capital </h2>
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="text-center mb-30">Hybrid Capital & Advisory Company Limited (“Hybrid Capital”) is a financial services company engaged in the provision of financial & business advisory; consumer & business loans; and transaction & payment services. The Company leverages innovative technology to make financial services more inclusive, innovative, accessible and affordable for everyone. 
              </p>
            </div>
            <!-- service item-->
            <div class="col-sm-3 mb-sm-40">             
              <div class="service-item icon-center"><i class="fas fa-mobile-alt cws-icon type-1 color-2"></i>
                <h3>Lending via hybridmoni</h3>
                <p class="mb-0">HybridMoni is the arm of (Registered Business name and Trade Mark) of Hybrid Capital engaged in providing quick, affordable and flexible loans ...  <a href="services" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>
              </div>
            </div>
            <!-- service item-->
            <!-- ! service item-->
            <div class="col-sm-3 mb-sm-40">
              <div class="service-item icon-center"><i class="fas fa-money-bill-alt cws-icon type-1 color-2"></i>
                <h3>Agency Banking via hybridbank</h3>
                <p class="mb-0">HybridBhank is a partnership with banks & other financial institutions that helps to bring banking services directly to the doorsteps of everyone. With HybridBhank; individuals, households and businesses do not need to leave their premises or immediate environs to access basic banking services. . <a href="services" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>
              </div>
            </div>
            <!-- service item-->
            <!-- ! service item-->
            <div class="col-sm-3">
              <div class="service-item icon-center"><i class="fas fa-money-check cws-icon type-1 color-2"></i>
                <h3>Advisory Services</h3>
                <p class="mb-0">Business & Financial Advisory which include Market Studies,	Business Plan,	Financial Model,	Strategy Formulation & Audit. 
                </p>
                <p>
	              Capital-raise Advisory & Syndication Agent which include Debt, Equity, Hybrid.  <a href="services" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>
              </div>
            </div>
            <!-- ! service item-->
            <!-- ! service item-->
            <div class="col-sm-3">
              <div class="service-item icon-center"><i class="fas fa-handshake cws-icon type-1 color-2"></i>
                <h3>Partnerships </h3>
                <p class="mb-0">We also partner with	Banks & Insurance Companies,	Shopping Malls & Supermarkets,	Governments & Regulators,	Educational & Religious Institutions,	Gas Stations & Restaurants,	Technology  Companies, transport & electricity companies.  <a href="services" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>
              </div>
            </div>
            <!-- ! service item-->
          </div>
          <div class="cws_divider with-plus long color-line-1 mt-80"></div>
        </div>
      </section>
      <!-- ! page section -->


      <!-- page section services-->
      <section class="page-section pt-80 pb-0">
        <div class="container">
          <div class="row pb-100">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title-section mb0 mt-0 text-center">Our Services</h2>
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <p class="text-center mb-30">We are into Lending via hybridmoni mobile app, Agency Banking via hybridbank and  Advisory Services. we also do customer profilling and we are SME focused.</p>
            </div>
          </div>
        </div>
        <div class="page-section pb-0 pt-0 bg-gray"> 
          <div class="container">
            <div class="row pt-100 pb-0">
              <div class="col-md-4 mb-md-40">
                <div class="service-item icon-left mb-60 alt"><i class="fas fa-mobile-alt cws-icon"></i>
                  <h3>Lending via hybridmoni</h3>
                  <p class="mb-0">HybridMoni is the arm of (Registered Business name and Trade Mark) of Hybrid Capital engaged in providing quick, affordable and flexible loans.</p>
                </div>
                <div class="service-item icon-left alt"><i class="fas fa-money-bill-alt cws-icon"></i>
                  <h3>Agency Banking via hybridbank</h3>
                  <p class="mb-0">HybridBhank is a partnership with banks & other financial institutions that helps to bring banking services directly to the doorsteps of everyone.</p>
                </div>
              </div>
              <div class="col-md-4 flex-item-end mb-md-40"><img src="img/promo-1.png" alt class="mt-minus-170 mt-md-0"></div>
              <div class="col-md-4 mb-md-40">
                <div class="service-item icon-right mb-60 alt"><i class="fas fa-money-check cws-icon"></i>
                  <h3>Advisory Services</h3>
                  <p class="mb-0">Business & Financial Advisory which include Market Studies,	Business Plan,	Financial Model,	Strategy Formulation & Audit. </p>
                </div>
                <div class="service-item icon-right alt"><i class="fas fa-user cws-icon"></i>
                  <h3>Customer Profilling and SME</h3>
                  <p class="mb-0">We work with small and medium enterprises both private and public to serve you better.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- page section about-->
       <!-- call out section-->
      <section class="page-section pt-0 pb-0 bg-main cws_prlx_section"><img src="img/15.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
          
            <div class="callout-wrap"><i class="fas fa-mobile-alt"></i>
              <div class="callout-content">
                <p>Hybridmoni is a powerfull Agency Banking App where you can borrow easily.</p>
              </div><a href="#" class="cws-button white mt-20">Download it now</a>
            </div>
          </div>
        </div>
      </section>
    
     
     
     
      <section class="page-section cws_prlx_section pt-70 pb-70 bb-gray"><img src="img/counter-bg-1.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row cws-multi-col">
            <div class="col-sm-3 col-xs-6 mb-sm-50">
              <!-- counter block-->
              <div class="counter-block style-2 st-color-2 full"><i class="counter-icon fas fa-smile"></i>
                <div class="counter-name-wrap">
                  <div data-count="5510" class="counter">0</div>
                  <div class="counter-name">Happy Clients</div>
                </div>
              </div>
              <!-- ! counter block-->
            </div>
            <div class="col-sm-3 col-xs-6 mb-sm-50">
              <!-- counter block-->
              <div class="counter-block style-2 st-color-2 full"><i class="counter-icon fas fa-trophy"></i>
                <div class="counter-name-wrap">
                  <div data-count="180" class="counter">0</div>
                  <div class="counter-name">Awards Win</div>
                </div>
              </div>
              <!-- counter block-->
            </div>
            <div class="col-sm-3 col-xs-6">
              <!-- counter block-->
              <div class="counter-block style-2 st-color-2 full"><i class="counter-icon fas fa-money-bill-alt"></i>
                <div class="counter-name-wrap">
                  <div data-count="1360" class="counter">0</div>
                  <div class="counter-name">Issued Loans</div>
                </div>
              </div>
              <!-- ! counter block-->
            </div>
            <div class="col-sm-3 col-xs-6">
              <!-- counter block-->
              <div class="counter-block style-2 st-color-2 full"><i class="counter-icon fas fa-handshake"></i>
                <div class="counter-name-wrap">
                  <div data-count="270" class="counter">0</div>
                  <div class="counter-name">Partners</div>
                </div>
              </div>
              <!-- ! counter block-->
            </div>
          </div>
        </div>
      </section>
      <!-- ! section parallax counter-->
      <!---->
      
    </div>
   @endsection