@extends('layouts.defaulthome') 

@section('content')
    
<div class="container mt-3">
       <!-- <p class="lead text-center mt-5">Announcements</p>-->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
      		<li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
      		<li data-target="#carouselExampleFade" data-slide-to="1"></li>
      		<li data-target="#carouselExampleFade" data-slide-to="2"></li>
      		<li data-target="#carouselExampleFade" data-slide-to="3"></li>
    	</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="/img/g2.jpg" class="d-block w-100" alt="...">
	
				<div class="carousel-caption">
          			<h5>First slide label</h5>
          			<p></p>
        		</div>
			</div>
			<div class="carousel-item">
				<img src="/img/g3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
          			<h5>Second slide label</h5>
          			<p></p>
        		</div>
			</div>
			<div class="carousel-item">
			<img src="/img/g4.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
          			<h5>Third slide label</h5>
          			<p></p>
        		</div>
			</div>
			<div class="carousel-item">
				<img src="/img/g1.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
          			<h5>Forth slide label</h5>
          			<p></p>
        		</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
 	
</div>
</div>

<div class="container mt-3"></div>
        <div class="row">
            
                        <div class="col-12">
                                
                                <h1 class="text-center">Easy Tour- Accomodations</h1>
            
                                <p class="text-center">You'll love all the amenities we offer!</p>
                                
                                <img id="Image-Maps-Com-image-maps-2020-01-19-004427" src="images/acco.jpg" border="0" width="622" height="886" orgWidth="622" orgHeight="886" usemap="#image-maps-2020-01-19-004427" class="mx-auto d-block image-fluid" alt="" />
                                <map name="image-maps-2020-01-19-004427" id="ImageMapsCom-image-maps-2020-01-19-004427">
                                <area  alt="" title="Srilanka middle" href="" shape="rect" coords="185,308,380,577" style="outline:none;" target="_self"  data-toggle="modal"  data-target="#Modalmiddle" />
                                <area  alt="" title=" Srilanka North" href="" shape="rect" coords="66,31,380,300" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalnorth"  />
                                <area  alt="" title="Srilanka South" href="" shape="rect" coords="49,582,500,772" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalsouth"  />
                                <area  alt="" title="Srilanka East" href="" shape="rect" coords="389,306,591,575" style="outline:none;" target="_self"     data-toggle="modal"  data-target="#Modaleast"/>
                                <area  alt="" title="Srilanka West" href="" shape="rect" coords="42,313,180,582" style="outline:none;" target="_self"   data-toggle="modal"  data-target="#Modalwest"  />
                                <area shape="rect" coords="620,884,622,886" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
                                </map>
                        </div>
                       
                    <!--//header row-->
        
    </div>


    
<div class="modal  fade" tabindex="-1" id="Modalsouth" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with EasyTour</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top Accomodations available in southern Sri Lanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Galle</h2>
                    <p class="text-center lead">Aditya Hotel</p>
                    <img src="/images/Galle/Aditya.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : 719/1, Galle Road, Devenigoda, Rathgama 
                     <br>Email : adityavilla@sltnet.lk<br>Contact : 0912267708<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Galle</h2>
                    <p class="text-center lead">Avani Bentota Resort & Spa</p>
                    <img src="/images/Galle/Avani.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : National Holiday Resort, Bentota
                     <br>Email : andradi.avanib@serendibleisure.lk<br>Contact : 0344641464<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Galle</h2>
                    <p class="text-center lead">Ayurveda Paragon</p>
                    <img src="/images/Galle/3.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >No 01, 80615, Talpe
                     <br>Email : ayurvedaparagon@sltnet.lk<br>Contact : 0912283460<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Galle</h2>
                    <p class="text-center lead">Citrus - Hikkaduwa</p>
                    <img src="/images/Galle/citrus.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 400, Galle Road, Hikkaduwa
                     <br>Email : janitha@citrusleisure.com<br>Contact : 0914383244<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Galle</h2>
                    <p class="text-center lead">Coral Rock By Bansei</p>
                    <img src="/images/Galle/Coral.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 340, Gall Road, Hikkaduwa
                     <br>Email : accountant@bansei-resorts.lk<br>Contact : 0912277021<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Matara</h2>
                    <p class="text-center lead">Thirasara Holiday Resort</p>
                    <img src="/images/Galle/Thirasara.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 279, Mahasenpura, Tissamaharamaya.
                     <br>Email : gmpiyasena@gmail.com<br>Contact : 0472237575<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Matara</h2>
                    <p class="text-center lead">The Safari</p>
                    <img src="/images/Galle/Safari.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Tissamaharama
                     <br>Email : rm.safari@ekhohotels.com<br>Contact : 0472237299<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Matara</h2>
                    <p class="text-center lead">The Oasis Hotel</p>
                    <img src="/images/Galle/the.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Sisilasgama, Hambantota.
                     <br>Email : accountant@oasis-ayurveda.de
                     <br>Contact : 0472220650<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Matara</h2>
                    <p class="text-center lead">Shangri-la Hambantota Resort & Spa</p>
                    <img src="/images/Galle/Shangrila.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Sittrakala Watta, Chithragala, Ambalantota
                     <br>Email : vivek.kaushik@shangri-la.com<br>Contact : 0477888888<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Matara</h2>
                    <p class="text-center lead">Hotel Chandrika</p>
                    <img src="/images/Galle/chandrika.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Kataragama Road, Tissamaharama
                     <br>Email : operations@chandrikahotel.com<br>Contact : 0912277021<br> </p>
            </div>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>


           
  <div class="modal  fade" tabindex="-1" id="Modaleast" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with EasyTour</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top Accomodations available in eastern Sri Lanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Baticaloa</h2>
                    <p class="text-center lead">Hotel East Lagoon</p>
                    <img src="/images/Galle/15.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Munai Lane, Uppodai Lake Road, Sinna Uppodai, Baticaloa
                     <br>Email : info@hoteleastlagoon.com<br>Contact : 0652229220<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Baticaloa</h2>
                    <p class="text-center lead">Maalu Maalu Resorts & Spa</p>
                    <img src="/images/Galle/16.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Tourism Zone, Passikudah.
                     <br>Email : ayanthi@theme-resorts.com<br>Contact : 01147064692<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Baticaloa</h2>
                    <p class="text-center lead">Uga Bay Resort & Spa</p>
                    <img src="/images/Galle/17.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Coconut Board Road, Kalkudah, Passikudah.
                     <br>Email : gm-ub@ugaescapes.com<br>Contact : 0655671001<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Baticaloa</h2>
                    <p class="text-center lead">Simla Inn</p>
                    <img src="/images/Galle/18.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Passikudah Road, Kalkudah
                     <br>Email : simlainn@yahoo.com<br>Contact : 0655680448<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Baticaloa</h2>
                    <p class="text-center lead">Riviera Resort</p>
                    <img src="/images/Galle/33.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : 63/14, New Dutch Bar Road, Kallady, Batticaloa
                     <br>Email : darshan@riviera-online.com<br>Contact : 0654929939<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Ampara</h2>
                    <p class="text-center lead">Ocean Beach Hotel</p>
                    <img src="/images/Galle/20.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Sinna Ullai, Pottuvil-18
                     <br>Email : info@arugambayhotel.com<br>Contact : 0632248405<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Ampara</h2>
                    <p class="text-center lead">Palm Groove Holiday Inn</p>
                    <img src="/images/Galle/21.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Arugambay, Potuvil
                     <br>Email : galappaththi@gmail.com<br>Contact : 0632248457<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Ampara</h2>
                    <p class="text-center lead">Siam View Hotel</p>
                    <img src="/images/Galle/22.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Arugambay, Pottuvil.
                     <br>Email : arugam@arugam.com
                     <br>Contact : 0632248464<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Ampara</h2>
                    <p class="text-center lead">Dream Garden</p>
                    <img src="/images/Galle/23.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Whiskey Point, Koddukal, Urani, Pottuvil
                     <br>Email : 47kvkarunaratneaudit@gmail.com<br>Contact : 0778059023<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Ampara</h2>
                    <p class="text-center lead">The Blue Wave Hotel</p>
                    <img src="/images/Galle/24.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : The Blue Wave Hotel Road, Arugambay , Pottuvil 05
                     <br>Email : hasinig2@gmail.com<br>Contact : 0463492992<br> </p>
            </div>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
          
  <div class="modal  fade" tabindex="-1" id="Modalwest" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with EasyTour</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top Accomodations available in western Sri Lanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Colombo</h2>
                    <p class="text-center lead">Cinnamon Grand Hotel</p>
                    <img src="/images/Galle/35.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 77, Galle Road, Colombo 03
                     <br>Email : fazal@cinnamonhotels.com<br>Contact : 0912267708<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Colombo</h2>
                    <p class="text-center lead">Colombo City Hotel</p>
                    <img src="/images/Galle/b.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Level 3, No. 33, Canal Row, Colombo 01.
                     <br>Email : cmb_cityhotels@sltnet.lk<br>Contact : 0115341962<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Colombo</h2>
                    <p class="text-center lead">Galadari Hotel</p>
                    <img src="/images/Galle/c.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 64, Lotus Road, Colombo 01
                     <br>Email : sanjeewa@galadarihotel.lk<br>Contact : 0112544544<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Colombo</h2>
                    <p class="text-center lead">Galle Face Hotel</p>
                    <img src="/images/Galle/d.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 02, Galle Road, Colombo 03
                     <br>Email : rajeeva@gallefacehotel.net<br>Contact : 0112541010<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Colombo</h2>
                    <p class="text-center lead">Mount Lavinia Hotel</p>
                    <img src="/images/Galle/e.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 100, Hotel Road, Mt. Lavinia
                     <br>Email : info@mountlaviniahotel.com<br>Contact : 0112711711<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Gampaha</h2>
                    <p class="text-center lead">Amagi Lagoon Resort And Spa</p>
                    <img src="/images/Galle/10.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : 640/82, Colombo Road, Kurana, Negambo
                     <br>Email : gfc@amagihotels.com<br>Contact : 0312238385<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Gampaha</h2>
                    <p class="text-center lead">Catamaran Beach Hotel</p>
                    <img src="/images/Galle/11.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No: 209, Lewis Place, Negombo
                     <br>Email : hotelaccounts4@lsr-srilanka.com<br>Contact : 0312228805<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Gampaha</h2>
                    <p class="text-center lead">Full Moon Garden Hotel</p>
                    <img src="/images/Galle/12.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >No. 754, Colombo Road, Katunayake.
                     <br>Email : finance@fullmoon.lk
                     <br>Contact : 0112260555<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Gampaha</h2>
                    <p class="text-center lead">Jetwing Ayurveda</p>
                    <img src="/images/Galle/13.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >No. 14, Etthukala, Negombo
                     <br>Email : alex@jetwinghotels.com<br>Contact : 0312276719<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Gampaha</h2>
                    <p class="text-center lead">St. Lachlan Hotel And Suites</p>
                    <img src="/images/Galle/14.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 25, St Anthonys Lane, Ethukala, Negombo
                     <br>Email : pushpani.fernando@gmail.com<br>Contact : 0317500770<br> </p>
            </div>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
           
  <div class="modal  fade" tabindex="-1" id="Modalnorth" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with EasyTour</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top Accomodations available in nothern Sri Lanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Jaffna</h2>
                    <p class="text-center lead">Tilko Jaffna City Hotels</p>
                    <img src="/images/Galle/25.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 70/06, K. K. S Road, Jaffna
                     <br>Email : suthes@tilkohotels.com<br>Contact : 0212225969<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Jaffna</h2>
                    <p class="text-center lead">The Thinnai</p>
                    <img src="/images/Galle/26.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No 86, Palaly Road, Thinnaveli, Jaffna
                     <br>Email : srm@thethinnai.com<br>Contact : 0212030400<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Jaffna</h2>
                    <p class="text-center lead">Subhas Hotel</p>
                    <img src="/images/Galle/27.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : 49, Victoria Road, Jaffna
                     <br>Email : hotelsubhasjaffna@yahoo.com<br>Contact : 0212224923<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Jaffna</h2>
                    <p class="text-center lead">Green Grass Hotel & Restaurant</p>
                    <img src="/images/Galle/29.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 33, Aseervatham Lane, Hospital Road, Jaffna
                     <br>Email : greengrassjaffna@gmail.com<br>Contact : 0212224385<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Jaffna</h2>
                    <p class="text-center lead">Jetwing Jaffna</p>
                    <img src="/images/Galle/30.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 37, Mahathmagandi Road, Jaffna
                     <br>Email : info@mountlaviniahotel.com<br>Contact : 0112345700<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Killinochchi</h2>
                    <p class="text-center lead">Amagi Lagoon Resort And Spa</p>
                    <img src="/images/Galle/30.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address :Udaya Nagar West , Off Kandy Road, Killinochchi
                     <br>Email : gfc@amagihotels.com<br>Contact : 0312238385<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Vauniya</h2>
                    <p class="text-center lead">Catamaran Beach Hotel</p>
                    <img src="/images/Galle/Safari.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No: 209, Lewis Place, Negombo
                     <br>Email : hotelaccounts4@lsr-srilanka.com<br>Contact : 0312228805<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Vauniya</h2>
                    <p class="text-center lead">Full Moon Garden Hotel</p>
                    <img src="/images/Galle/the.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Kandy Road, Paranthan
                     <br>Email : finance@fullmoon.lk
                     <br>Contact : 0112260555<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kilinochchi</h2>
                    <p class="text-center lead">Jetwing Ayurveda</p>
                    <img src="/images/Galle/Shangrila.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 84, 02nd Cross Street, Vauniya
                     <br>Email : alex@jetwinghotels.com<br>Contact : 0312276719<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Mannar</h2>
                    <p class="text-center lead">St. Lachlan Hotel And Suites</p>
                    <img src="/images/Galle/chandrika.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : 10, 1st Lane, Sinnaputhukulam, Mannar
                     <br>Email : pushpani.fernando@gmail.com<br>Contact : 0317500770<br> </p>
            </div>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>



  <div class="modal  fade" tabindex="-1" id="Modalmiddle" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Explore Srilanka with EasyTour</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <p class="lead text-center mt-5">Top Accomodations available in Cental Sri Lanka</p>.
              <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kandy</h2>
                    <p class="text-center lead">Amaara Sky Hotel</p>
                    <img src="/images/Galle/31.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No 72/22, A. B. Damunupola Mawatha, Kandy.
                     <br>Email : joyel@worldlink.lk<br>Contact : 0812228813<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kandy</h2>
                    <p class="text-center lead">Earls Regent Hotel</p>
                    <img src="/images/Galle/32.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 1/40, Devenirajasinghe Road, Peradeniya, Kandy
                     <br>Email : accountant@regentkandy.lk<br>Contact : 0812221144<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kandy</h2>
                    <p class="text-center lead">Helgas Folly</p>
                    <img src="/images/Galle/33.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 70, Rajapihilla Mawatha, Kandy.
                     <br>Email : chalet@sltnet.lk<br>Contact : 0812234571<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kandy</h2>
                    <p class="text-center lead">Hotel Topaz</p>
                    <img src="/images/Galle/34.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Anniwatte, Kandy
                     <br>Email : anurab@topaz.lk<br>Contact : 0817389000<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Kandy</h2>
                    <p class="text-center lead">Mahaweli Reach Hotel</p>
                    <img src="/images/Galle/35.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No. 35, P. B. A. Weerakoon Mawatha, Kandy
                     <br>Email : sonali@mahaweli.com<br>Contact : 0812212624<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Anuradhapura</h2>
                    <p class="text-center lead">Sorowwa Resort And Spa</p>
                    <img src="/images/Galle/36.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Lake Road, Habarane
                     <br>Email : ceo@sorowwa.com<br>Contact : 0662270333<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Anuradhapura</h2>
                    <p class="text-center lead">Cinnamon Lodge</p>
                    <img src="/images/Galle/37.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No: P. O. Box 02, Habarane
                     <br>Email : accountant.lodge@cinnamonhotels.com<br>Contact : 0112306000<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Anuradhapura</h2>
                    <p class="text-center lead">Grand Crown Hotel</p>
                    <img src="/images/Galle/38.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >No. No:891, Milagas Junction, Anuradhapura
                     <br>Email : grandcrownhotel@gmail.com
                     <br>Contact : 0252220661<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Anuradhapura</h2>
                    <p class="text-center lead">Hotel Alakamanda</p>
                    <img src="/images/Galle/39.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : No.11/1, Nagasena Mawatha, Anuradhapura
                     <br>Email : sampathemss@gmail.com<br>Contact : 0255620277<br> </p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <h2 class="text-center">Anuradhapura</h2>
                    <p class="text-center lead">Leopard Den</p>
                    <img src="/images/Galle/40.jpg" class="mx-auto d-block image-fluid" alt="">
                     <br>
                     <p class="text-center" >Address : Wilpattu Junction, Pahalamaragahawewa
                     <br>Email : sureshnishantha3@gmail.com<br>Contact : 0253259128<br> </p>
            </div>
                </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
    

<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
						   <img src="images/about.jpg">
										<div class="w3l-slider-img">
											<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
										</div>
                                       <br><br><br>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>         
   


@endsection 