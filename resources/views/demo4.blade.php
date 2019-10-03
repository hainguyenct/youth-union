    <!-- Favicon-->
 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('template/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('template/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('template/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('template/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet')}}" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('template/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{asset('template/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('template/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('template/css/themes/all-themes.css')}}" rel="stylesheet" />
    @extends('layouts.app(demo)')

    @section('content')


    <!-- Google Fonts -->

    <!-- JQuery DataTable Css -->


    @if(Session::has('success_message'))
    <div class="alert alert-success">
    	<span class="glyphicon glyphicon-ok"></span>
    	{!! session('success_message') !!}

    	<button type="button" class="close" data-dismiss="alert" aria-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>

    </div>
    @endif

    				<h2 class="card-inside-title">Basic Examples</h2>
    				<table border="1">
    					<tr>
    						<td><input type="checkbox" id="basic_checkbox_1" checked />
    					<label for="basic_checkbox_1">Default</label></td>
    					
    					
    					
    					</tr>

    					<tr>	
    					<td>
    					<div class="demo-checkbox">
    					
    					<input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
    					<label for="basic_checkbox_2">Filled In</label>
    	
    					</div>
    				</td>
    				</tr>
    				</table>
    				

    				<h2 class="card-inside-title">With Material Design Colors</h2>
    				<div class="demo-checkbox">
    					<input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
    					<label for="md_checkbox_1">RED</label>
    					<input type="checkbox" id="md_checkbox_2" class="chk-col-pink" checked />
    					<label for="md_checkbox_2">PINK</label>
    					<input type="checkbox" id="md_checkbox_3" class="chk-col-purple" checked />
    					<label for="md_checkbox_3">PURPLE</label>
    					<input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple" checked />
    					<label for="md_checkbox_4">DEEP PURPLE</label>
    					<input type="checkbox" id="md_checkbox_5" class="chk-col-indigo" checked />
    					<label for="md_checkbox_5">INDIGO</label>
    					<input type="checkbox" id="md_checkbox_6" class="chk-col-blue" checked />
    					<label for="md_checkbox_6">BLUE</label>
    					<input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue" checked />
    					<label for="md_checkbox_7">LIGHT BLUE</label>
    					<input type="checkbox" id="md_checkbox_8" class="chk-col-cyan" checked />
    					<label for="md_checkbox_8">CYAN</label>
    					<input type="checkbox" id="md_checkbox_9" class="chk-col-teal" checked />
    					<label for="md_checkbox_9">TEAL</label>
    					<input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked />
    					<label for="md_checkbox_10">GREEN</label>
    					<input type="checkbox" id="md_checkbox_11" class="chk-col-light-green" checked />
    					<label for="md_checkbox_11">LIGHT GREEN</label>
    					<input type="checkbox" id="md_checkbox_12" class="chk-col-lime" checked />
    					<label for="md_checkbox_12">LIME</label>
    					<input type="checkbox" id="md_checkbox_13" class="chk-col-yellow" checked />
    					<label for="md_checkbox_13">YELLOW</label>
    					<input type="checkbox" id="md_checkbox_14" class="chk-col-amber" checked />
    					<label for="md_checkbox_14">AMBER</label>
    					<input type="checkbox" id="md_checkbox_15" class="chk-col-orange" checked />
    					<label for="md_checkbox_15">ORANGE</label>
    					<input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange" checked />
    					<label for="md_checkbox_16">DEEP ORANGE</label>
    					<input type="checkbox" id="md_checkbox_17" class="chk-col-brown" checked />
    					<label for="md_checkbox_17">BROWN</label>
    					<input type="checkbox" id="md_checkbox_18" class="chk-col-grey" checked />
    					<label for="md_checkbox_18">GREY</label>
    					<input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey" checked />
    					<label for="md_checkbox_19">BLUE GREY</label>
    					<input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
    					<label for="md_checkbox_20">BLACK</label>
    				</div>

    				<h2 class="card-inside-title">With Material Design Colors - Filled In</h2>
    				<div class="demo-checkbox">
    					<input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked />
    					<label for="md_checkbox_21">RED</label>
    					<input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" checked />
    					<label for="md_checkbox_22">PINK</label>
    					<input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" checked />
    					<label for="md_checkbox_23">PURPLE</label>
    					<input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" checked />
    					<label for="md_checkbox_24">DEEP PURPLE</label>
    					<input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-indigo" checked />
    					<label for="md_checkbox_25">INDIGO</label>
    					<input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-blue" checked />
    					<label for="md_checkbox_26">BLUE</label>
    					<input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-light-blue" checked />
    					<label for="md_checkbox_27">LIGHT BLUE</label>
    					<input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-cyan" checked />
    					<label for="md_checkbox_28">CYAN</label>
    					<input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" checked />
    					<label for="md_checkbox_29">TEAL</label>
    					<input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-green" checked />
    					<label for="md_checkbox_30">GREEN</label>
    					<input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-light-green" checked />
    					<label for="md_checkbox_31">LIGHT GREEN</label>
    					<input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-lime" checked />
    					<label for="md_checkbox_32">LIME</label>
    					<input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
    					<label for="md_checkbox_33">YELLOW</label>
    					<input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-amber" checked />
    					<label for="md_checkbox_34">AMBER</label>
    					<input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-orange" checked />
    					<label for="md_checkbox_35">ORANGE</label>
    					<input type="checkbox" id="md_checkbox_36" class="filled-in chk-col-deep-orange" checked />
    					<label for="md_checkbox_36">DEEP ORANGE</label>
    					<input type="checkbox" id="md_checkbox_37" class="filled-in chk-col-brown" checked />
    					<label for="md_checkbox_37">BROWN</label>
    					<input type="checkbox" id="md_checkbox_38" class="filled-in chk-col-grey" checked />
    					<label for="md_checkbox_38">GREY</label>
    					<input type="checkbox" id="md_checkbox_39" class="filled-in chk-col-blue-grey" checked />
    					<label for="md_checkbox_39">BLUE GREY</label>
    					<input type="checkbox" id="md_checkbox_40" class="filled-in chk-col-black" checked />
    					<label for="md_checkbox_40">BLACK</label>
    				</div>


<!-- Jquery Core Js -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('template/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('template/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('template/plugins/node-waves/waves.js')}}"></script>

<!-- Autosize Plugin Js -->
<script src="{{asset('template/plugins/autosize/autosize.js')}}"></script>

<!-- Moment Plugin Js -->
<script src="{{asset('template/plugins/momentjs/moment.js')}}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{asset('template/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{asset('template/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('template/js/admin.js')}}"></script>
<script src="{{asset('template/js/pages/forms/basic-form-elements.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('template/js/demo.js')}}"></script>


@endsection