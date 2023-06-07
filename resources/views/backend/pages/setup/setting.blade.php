@extends('backend.layouts.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
       
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-header-tab" data-toggle="pill" data-target="#v-pills-header" type="button" role="tab" aria-controls="v-pills-header" aria-selected="true">Header Logo</button>

                <button class="nav-link" id="v-pills-information-tab" data-toggle="pill" data-target="#v-pills-information" type="button" role="tab" aria-controls="v-pills-information" aria-selected="false">Information</button>

                <button class="nav-link" id="v-pills-social-tab" data-toggle="pill" data-target="#v-pills-social" type="button" role="tab" aria-controls="v-pills-social" aria-selected="false">Social</button>

                <button class="nav-link" id="v-pills-footer-tab" data-toggle="pill" data-target="#v-pills-footer" type="button" role="tab" aria-controls="v-pills-footer" aria-selected="false">Footer</button>

                <button class="nav-link" id="v-pills-copyright-tab" data-toggle="pill" data-target="#v-pills-copyright" type="button" role="tab" aria-controls="v-pills-copyright" aria-selected="false">Copyright</button>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-header" role="tabpanel" aria-labelledby="v-pills-header-tab">...</div>

                <div class="tab-pane fade" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab">...</div>

                <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">...</div>

                <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">...</div>

                <div class="tab-pane fade" id="v-pills-copyright" role="tabpanel" aria-labelledby="v-pills-copyright-tab">...</div>
              </div>
            </div>
        </div>
               
    </div>
</div>
@endsection