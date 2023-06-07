<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('frontend/assets/js/vendors.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="js/main.js"></script>



{{-- For product filtering --}}

<script type="text/javascript">


    $("#cash").css({
        "border" : "2px solid #955",
        "border-radius" : "5px",
        "padding" : "5px"
    });

    $(".selectPayment").click(function(){

        var type = $(this).attr("data-type");

        if(type == "online"){

            $("input[name=paymentMethod]").val("online");
            
            $("#inputForm").html("");

            $(this).css({
                "border" : "2px solid #955",
                "border-radius" : "5px",
                "padding" : "5px"
            });

            $(this).addClass("paymentMethod");
            $("#cash").removeClass("paymentMethod");

            $("#cash").css({
                "border" : "none",
                "border-radius" : "0"
            });

        }else if(type == "cash"){

            $("input[name=paymentMethod]").val("cash");

            $("#inputForm").html(`<select class="form-control" name="paymentgetway" required>
                                            <option value="">Select One</option>
                                            <option value="bank">Bank</option>
                                        </select>`);

            $(this).css({
                "border" : "2px solid #955",
                "border-radius" : "5px",
                "padding" : "5px"
            });

            $(this).addClass("paymentMethod");
            $("#online").removeClass("paymentMethod");

            $("#online").css({
                "border" : "none",
                "border-radius" : "0"
            });

        }

    });


    // Customer setting Form Update
    $("#custmerSettings").submit(function(){
      var form = $("#custmerSettings").get(0);
      $.ajax({
        url : "{{ Route('customer.customerUpdate') }}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){
            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#err"+key).text(value).css("color","red");
                });
            }
            if(data.status == "reload"){
                window.location.href = "{{Route('customer.customerSettings')}}"
            }
        }
      });
      return false;
    });


    /*----Customer password update----*/
    
    $("#cuspasschange").submit(function(){
      var form = $("#cuspasschange").get(0);
      $.ajax({
        url : "{{ Route('customer.customerPasswordChange') }}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){
            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#err"+key).text(value).css("color","red");
                });
            }
            if(data.status == "reload"){
                window.location.href = "{{Route('customer.customerSettings')}}"
            }
        }
      });
      return false;
    }); 





    // Membership Info file upload
    $("#MembershipInfo").submit(function(){
        var form = $("#MembershipInfo").get(0);
        $.ajax({
            url : "{{ Route('customer.MyMembershipCreate') }}",
            method: "post",
            data : new FormData(form),
            contentType : false,
            processData : false,
            beforeSend : function(){
                $(document).find(".form-text").text("");
            },
            success: function(data){
                if(data.message == "error"){
                    $.each(data.data, function(key, value){
                        $("#err"+key).text(value).css("color","red");
                    });
                }

                if(data.status == "reload"){
                    window.location.href = "{{Route('customer.MyMembership')}}";
                }
            }

        });
        return false;
    }); 



    $("#customerLoginForm4").submit(function(){

      var form = $("#customerLoginForm4").get(0);

      $.ajax({
        url : "{{route('customerforgotpassword.customerforgot_password')}}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){

            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#err"+key).text(value).css("color","red");
                });
            }


            if(data.messageSend == true){

                $("#sendMsg").css({
                    "display": "none",
                });
                $("#sendMsgShow").css({
                    "display": "block",
                    "color": "green",
                });
                $("#showMg").text(data.message).css({
                    "color": "green",
                });
            }


            if(data.dataNotFound == false){

                $("#errmailPhone").text(data.message).css({
                    "color": "red",
                });
                
            }

            
        }

      });

      return false;

    });    


    $("#customerLoginForm3").submit(function(){

      var form = $("#customerLoginForm3").get(0);

      $.ajax({
        url : "{{route('customerLogin.customer_login')}}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){

            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#err"+key).text(value).css("color","red");
                });
            }


            if(data.customerlogin == false){
                $("#errormsg").text(data.message).css({
                    "color":"red",
                    "font-weight":"bold"
                });
            }
            
            if(data.customerlogin == true){
                window.location = "{{url('/dashboard')}}";
            }else if(data.login == false){
                $("#msg").text(data.message);
            }

            
        }

      });

      return false;

    });



    $("#customerLoginForm1").submit(function(){

      var form = $("#customerLoginForm1").get(0);

      $.ajax({
        url : "{{route('customerRegisstationInsert.registerInsert')}}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){

            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#err"+key).text(value).css("color","red");
                });
            }

            
            if(data.customerReglogin == true){
                window.location = "{{url('/dashboard')}}";
            }else if(data.login == false){
                $("#msg").text(data.message);
            }

            
        }

      });

      return false;

    });


    $("#customerLoginForm2").submit(function(){

      var form = $("#customerLoginForm2").get(0);

      $.ajax({
        url : "{{route('customerCompanyReg.registerInsertCompany')}}",
        method: "post",
        data : new FormData(form),
        contentType : false,
        processData : false,
        beforeSend : function(){
          $(document).find(".form-text").text("");
        },
        success: function(data){

            if(data.message == "error"){
                $.each(data.data, function(key, value){
                    $("#error"+key).text(value).css("color","red");
                });
            }

            if(data.customerReglogin == true){
                window.location = "{{url('/dashboard')}}";
            }else if(data.login == false){
                $("#msg").text(data.message);
            }

            
        }

      });

      return false;

    });

</script>



<script>

    $(".chbox").click(function() {

        var saleData    = [];
        var buyData     = [];
        var rentData    = [];

        $("input:checkbox[name=mycheckbox]:checked").each(function() {

            if ($(this).attr("data-type") == "sale") {
                saleData.push($(this).val())
            } else if ($(this).attr("data-type") == "buy") {
                buyData.push($(this).val())
            } else if ($(this).attr("data-type") == "rent") {
                rentData.push($(this).val())
            }
        });


        $.ajax({
            url: "{{ route('allFiltering.allfiltering') }}",
            method: "get",
            data: {
                "saleData": saleData,
                "buyData": buyData,
                "rentData": rentData
            },
            success: function(data) {




                if (data.saleType == true || data.buyType == true || data.rentType == true) {

                    $("#all_section_filter_disable").css("display", "none");
                    $("#all_section_filter_enable").css("display","block");
                    var htmlData = "";
                    $("#allAdd").html("");

                    if (data.saleType == true) {
                        $.each(data.saleData, function(key, value) {

                            htmlData += `<div class="col-lg-4 col-sm-6 col-xs-6 my-2">
                            <div class="mt-4"><a href="">
                                    <img src="{{ asset('${value.image}') }}" alt=""
                                        class="saleimg">
                                </a>
                            </div>
                            </div>`;
                        });
                    }

                    if (data.buyType == true) {
                        $.each(data.buy_ads, function(key, value) {
                            htmlData += `<div class="col-lg-4 col-sm-6 col-xs-6 my-2">
                            <div class="mt-4"><a href="">
                                    <img src="{{ asset('${value.image}') }}" alt=""
                                        class="saleimg">
                                </a>
                            </div>
                            </div>`;
                        });
                    }


                    if (data.rentType == true) {
                        $.each(data.rent_ads, function(key, value) {

                            htmlData += `<div class="col-lg-4 col-sm-6 col-xs-6 my-2">
                            <div class="mt-4"><a href="">
                                    <img src="{{ asset( '${value.image}') }}" alt=""
                                        class="saleimg">
                                </a>
                            </div>
                            </div>`;

                        });
                    }

                    $("#allAdd").append(htmlData)

                } else {
                    $("#all_section_filter_disable").css("display", "block");
                    $("#all_section_filter_enable").css("display","none");
                }

            }
        });

    });

</script>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "170px";
        document.getElementById("main").style.marginLeft = "5px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if (this.scrollY > 10) {
                $('.sidebar').addClass("sticky");
            } else {
                $('.sidebar').removeClass("sticky");
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if (this.scrollY > 10) {
                $('.sidebar-r').addClass("sticky");
            } else {
                $('.sidebar-r').removeClass("sticky");
            }
        });
    });
</script>




{{-- <script>
    var getWidth = $( window).width();
    
    if(getWidth <= 768){
        $("#mobileScreen").addClass("d-block");
        $("#pcscreen").addClass("d-none");
      }else{
        $("#mobileScreen").addClass("d-none");
        $("#pcscreen").addClass("d-block");
      }
</script> --}}











<!-- For Sale Section -->
<script>
    $(document).ready(function() {
        $(".content").slice(0, 4).show();
        $("#loadMore").on("click", function(e) {
            e.preventDefault();
            $(".content:hidden").slice(0, 4).slideDown();
            if ($(".content:hidden").length == 0) {
                $("#loadMore").text("No Content").addClass("noContent");
            }
        });
    })
</script>
<!-- For Buy Section -->
<script>
    $(document).ready(function() {
        $(".contentBuy").slice(0, 4).show();
        $("#loadMoreBuy").on("click", function(e) {
            e.preventDefault();
            $(".contentBuy:hidden").slice(0, 4).slideDown();
            if ($(".contentBuy:hidden").length == 0) {
                $("#loadMoreBuy").text("No Content").addClass("noContent");
            }
        });
    })
</script>

<!-- For Rent Section -->
<script>
    $(document).ready(function() {
        $(".contentRent").slice(0, 4).show();
        $("#loadMoreRent").on("click", function(e) {
            e.preventDefault();
            $(".contentRent:hidden").slice(0, 4).slideDown();
            if ($(".contentRent:hidden").length == 0) {
                $("#loadMoreRent").text("No Content").addClass("noContent");
            }
        });
    })
</script>

<script>
    $('#search').on('keyup', function() {
        search();
    });

    $('#search').on('focus', function() {
        search();
    });

    function search() {
        var searchKey = $('#search').val();
        if (searchKey.length > 0) {
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('https://sobkisubazar.com/ajax-search', {
                _token: AIZ.data.csrf,
                search: searchKey
            }, function(data) {
                if (data == '0') {
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html(
                        'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                    $('.search-preloader').addClass('d-none');

                } else {
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        } else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }
</script>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    /* When the user scrolls down 20px from the top of the document, show the button */
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        // document.body.scrollTop = 0 ;
        // document.documentElement.scrollTop = 0;
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<script>
    $(document).ready(function() {

        if ($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel({

                loop: true,
                margin: 30,
                autoplay:true,
                autoplayTimeout: 1500,
                nav: false,
                dots: false,
                responsive: {
                    // 0:{items:1},
                    // 575:{items:3},
                    // 767:{items:3},
                    // 768:{items:4},
                    // 992:{items:4},
                    // 1025:{items:5}

                    0: {
                        items: 2
                    },
                    575: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 4
                    },
                    1370: {
                        items: 5
                    }
                }
            });

            if ($('.bbb_viewed_prev').length) {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function() {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next').length) {
                var next = $('.bbb_viewed_next');
                next.on('click', function() {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>

<script>
    $(document).ready(function() {

        if ($('.bbb_viewed_slider_2').length) {
            var viewedSlider = $('.bbb_viewed_slider_2');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 30,
                autoplay:true,
                autoplayTimeout: 2000,
                nav: false,
                dots: false,
                responsive: {

                    0: {
                        items: 2
                    },
                    575: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 4
                    },
                    1370: {
                        items: 5
                    }

                    // 0:{items:1},
                    // 575:{items:2},
                    // 768:{items:3},
                    // 991:{items:3},
                    // 1199:{items:5}
                }
            });

            if ($('.bbb_viewed_prev_2').length) {
                var prev = $('.bbb_viewed_prev_2');
                prev.on('click', function() {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next_2').length) {
                var next = $('.bbb_viewed_next_2');
                next.on('click', function() {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>


<script>
    function change() {
        let results = Array.from(document.querySelectorAll('.result > div'));
        // Hide all results
        results.forEach(function(result) {
            result.style.display = 'none';
        });
        // Filter results to only those that meet ALL requirements:
        Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
            const attrib = input.getAttribute('rel');
            results = results.filter(function(result) {
                return result.classList.contains(attrib);
            });
        });
        // Show those filtered results:
        results.forEach(function(result) {
            result.style.display = 'block';
        });
    }
    change();
</script>

{{-- Customer Profile Settings --}}
<script>
    $('body .as-pf-img .edit-btn').on('click',function(){
        $('#fileinputSettings').trigger('click');
    })
    $('#fileinputSettings').on('change',function(event){

        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imageSettingsPreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    })
</script>

<script type="text/javascript">
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }

    @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}', 'Success!');
        @php
            Session::forget("success");
        @endphp
    @elseif(Session::has('info'))
        toastr.info('{{Session::get('info')}}', 'Info!')
        @php
            Session::forget("info");
        @endphp
    @elseif(Session::has('warning'))
        toastr.warning('{{Session::get('warning')}}', 'Warning!')
        @php
            Session::forget("warning");
        @endphp
    @elseif(Session::has('error'))
        toastr.error('{{Session::get('error')}}', 'Fail!')
        @php
            Session::forget("error");
        @endphp
    @endif


</script>
