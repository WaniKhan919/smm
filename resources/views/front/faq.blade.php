@extends('layout.layout')
@section('container')
<!--page-title starts-->
<div class="page-title-area">
  <div class="container">
    <div class="row height-200 align-items-center">
      <div class="col-lg-12">
        <div class="page-title section-title text-center">
          <h1><span>FAQs</span></h1>
          <div class="site-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--page-title ends-->

<!--faq-area start-->
<div class="faw-area pt-95 pt-sm-77 pb-75">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h3><span>Frequently Asked Questions</span></h3>
        </div>
      </div>
    </div>
    <div class="row bb-ebeb pb-55 mt-40">
      <div class="col-lg-12">
        <div id="accordion">
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingOne">
              <h5 class="mb-0">
                <a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true"
                  aria-controls="collapseOne">
                  What is digital marketing?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>Much requested documentation for Codepress Admin Columns is available now! The documentation section
                  contains usefull information about the usage of Admin Columns, Frequently Asked Questions, Tutorials
                  for developers and Actions/Filters. We will keep updating this in the coming period.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingTwo">
              <h5 class="mb-0">
                <a href="#collapseTwo" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  What does a digital marketer do?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingThree">
              <h5 class="mb-0">
                <a href="#collapseThree" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  Would my business benefit from digital marketing?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingFour">
              <h5 class="mb-0">
                <a href="#collapseFour" class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  What’s the biggest mistake digital marketers make?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingFive">
              <h5 class="mb-0">
                <a href="#collapseFive" class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"
                  aria-expanded="false" aria-controls="collapseFive">
                  Why is SEO important?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading" id="headingSix">
              <h5 class="mb-0">
                <a href="#collapseSix" class="btn btn-link" data-toggle="collapse" data-target="#collapseSix"
                  aria-expanded="false" aria-controls="collapseSix">
                  What is content marketing?
                  <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                  <i class="fa fa-minus pull-right" aria-hidden="true"></i>
                </a>
              </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-70">
      <div class="col-lg-12">
        <div id="accordionTwo">
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingSeven">
              <h5 class="mb-0">
                <a href="#collapseSeven" class="btn btn-link" data-toggle="collapse" aria-expanded="true"
                  aria-controls="collapseSeven">
                  <span>What is digital marketing?</span>
                </a>
              </h5>
            </div>
            <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionTwo">
              <div class="card-body">
                <p>Much requested documentation for Codepress Admin Columns is available now! The documentation section
                  contains usefull information about the usage of Admin Columns, Frequently Asked Questions, Tutorials
                  for developers and Actions/Filters. We will keep updating this in the coming period.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingEight">
              <h5 class="mb-0">
                <a href="#collapseEight" class="btn btn-link" data-toggle="collapse" data-target="#collapseEight"
                  aria-expanded="false" aria-controls="collapseEight">
                  <span>What does a digital marketer do?</span>
                </a>
              </h5>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionTwo">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingNine">
              <h5 class="mb-0">
                <a href="#collapseNine" class="btn btn-link" data-toggle="collapse" data-target="#collapseNine"
                  aria-expanded="false" aria-controls="collapseNine">
                  <span>Would my business benefit from digital marketing?</span>
                </a>
              </h5>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionTwo">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingTen">
              <h5 class="mb-0">
                <a href="#collapseTen" class="btn btn-link" data-toggle="collapse" data-target="#collapseTen"
                  aria-expanded="false" aria-controls="collapseTen">
                  <span>What’s the biggest mistake digital marketers make?</span>
                </a>
              </h5>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionTwo">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingEleven">
              <h5 class="mb-0">
                <a href="#collapseEleven" class="btn btn-link" data-toggle="collapse" data-target="#collapseEleven"
                  aria-expanded="false" aria-controls="collapseEleven">
                  <span>Why is SEO important?</span>
                </a>
              </h5>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionTwo">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
          <!--faq-single-->
          <div class="card single-faq">
            <div class="card-header faq-heading style-2" id="headingTwelve">
              <h5 class="mb-0">
                <a href="#collapseTwelve" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwelve"
                  aria-expanded="false" aria-controls="collapseTwelve">
                  <span>What is content marketing?</span>
                </a>
              </h5>
            </div>
            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionTwo">
              <div class="card-body">
                <p>The graphical control element accordion is a vertically stacked list of items, such as labels or
                  thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that
                  item. There can be zero expanded items, exactly one, or more than one item expanded at a time,
                  depending on the configuration stacked list of items, such as labels or thumbnails.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--faq-area end-->

<!--brands starts-->
<div class="brands-area bg-f3f8f8">
  <div class="container">
    <div class="row height-160 align-items-center">
      <div class="col-lg-12">
        <div class="brands-carousel">
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/1.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/1-hover.png" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/2.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/2-hover.png" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/3.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/3-hover.png" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/4.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/4-hover.png" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/5.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/5-hover.png" alt="" />
            </a>
          </div>
          <div class="brand-item">
            <a href="#">
              <img class="brand-static" src="assets/images/brands/1.png" alt="" />
              <img class="brand-dynamic" src="assets/images/brands/1-hover.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--brands ends-->
@endsection