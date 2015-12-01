<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/connection.php';

?>
                <section>
                    <h1 style="text-align: center;">Here You Can See Book slideshow.</h1>
                    <div class="container" id="container">

                        <!-- caps, non-existent items -->
                        <span id="slide1" class="cap"></span>
                        <span id="slide2" class="cap"></span>
                        <span id="slide3" class="cap"></span>
                        <span id="slide4" class="cap"></span>
                        <span id="slide5" class="cap"></span>
                        <span id="slide6" class="cap"></span>
                        <span id="slide7" class="cap"></span>
                        <span id="slide8" class="cap"></span>

                        <ul class="slider">
                        <!-- left arrow -->
                            <li class="lArrow">
                                <a href="#slide8" class="a8"></a>
                                <a href="#slide7" class="a7"></a>
                                <a href="#slide6" class="a6"></a>
                                <a href="#slide5" class="a5"></a>
                                <a href="#slide4" class="a4"></a>
                                <a href="#slide3" class="a3"></a>
                                <a href="#slide2" class="a2"></a>
                                <a href="#slide1" class="a1"></a>
                            </li>
                            <!-- slides -->
                            <li class="slides">
                                <img src="/book_library/images/0.jpg" alt="" class="g0" />
                                <img src="/book_library/images/1.jpg" alt="" class="g1" />
                                <img src="/book_library/images/2.png" alt="" class="g2" />
                                <img src="/book_library/images/3.jpg" alt="" class="g3" />
                                <img src="/book_library/images/4.jpg" alt="" class="g4" />
                                <img src="/book_library/images/5.png" alt="" class="g5" />
                                <img src="/book_library/images/6.png" alt="" class="g6" />
                                <img src="/book_library/images/7.jpg" alt="" class="g7" />
                                <img src="/book_library/images/8.jpg" alt="" class="g8" />
                            </li>
                            <!-- right arrow -->
                            <li class="rArrow">
                                <a href="#slide8" class="a8"></a>
                                <a href="#slide7" class="a7"></a>
                                <a href="#slide6" class="a6"></a>
                                <a href="#slide5" class="a5"></a>
                                <a href="#slide4" class="a4"></a>
                                <a href="#slide3" class="a3"></a>
                                <a href="#slide2" class="a2"></a>
                                <a href="#slide1" class="a1"></a>
                            </li>
                            <!-- tracker -->
                            <li class="track">
                                <a href="#slide1" class="tr1"></a>
                                <a href="#slide2" class="tr2"></a>
                                <a href="#slide3" class="tr3"></a>
                                <a href="#slide4" class="tr4"></a>
                                <a href="#slide5" class="tr5"></a>
                                <a href="#slide6" class="tr6"></a>
                                <a href="#slide7" class="tr7"></a>
                                <a href="#slide8" class="tr8"></a>
                            </li>
                        </ul>
                    </div>
		</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/book_library/includes/footer.php';
ob_flush(); 
?>	
