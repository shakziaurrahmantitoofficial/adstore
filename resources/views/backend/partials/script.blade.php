

    <script src="{{ asset('backend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ asset('backend/assets/js/line-chart.js') }}"></script>
    <!-- all pie chart -->
    <script src="{{ asset('backend/assets/js/pie-chart.js') }}"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>


    {{-- Site Setting --}}
    <script>
        $('body .imageSelect').on('change',function(event){
            let isThis = this;
            let reader = new FileReader();
            reader.onload = function(){
                let output = isThis.closest('.imageChange').querySelector('.imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        })
        $('body .headerSettings').on('change',function(event){
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.querySelector('.headerSettingsPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        })
        $('body .footerSettings').on('change',function(event){
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.querySelector('.footerSettingsPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        })
        $('body .copyrightSettings').on('change',function(event){
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.querySelector('.copyrightSettingsPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        })


        // Setting form submit
        $(".SettingFormSubmit1").submit(function(){
            var form = $(".SettingFormSubmit1").get(0);
            $.ajax({
                url : "{{route('settings.update.header')}}",
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
                        window.location.href = "{{Route('settings.page')}}";
                    }
                }
            });
            return false;
        });
        $(".SettingFormSubmit2").submit(function(){
            var form = $(".SettingFormSubmit2").get(0);
            $.ajax({
                url : "{{route('settings.update.information')}}",
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
                        window.location.href = "{{Route('settings.page')}}";
                    }
                }
            });
            return false;
        });
        $(".SettingFormSubmit3").submit(function(){
            var form = $(".SettingFormSubmit3").get(0);
            $.ajax({
                url : "{{route('settings.update.social')}}",
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
                        window.location.href = "{{Route('settings.page')}}";
                    }
                }
            });
            return false;
        });
        $(".SettingFormSubmit4").submit(function(){
            var form = $(".SettingFormSubmit4").get(0);
            $.ajax({
                url : "{{route('settings.update.footer')}}",
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
                        window.location.href = "{{Route('settings.page')}}";
                    }
                }
            });
            return false;
        });
        $(".SettingFormSubmit5").submit(function(){
            var form = $(".SettingFormSubmit5").get(0);
            $.ajax({
                url : "{{route('settings.update.copyright')}}",
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
                        window.location.href = "{{Route('settings.page')}}";
                    }
                }
            });
            return false;
        });
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



     