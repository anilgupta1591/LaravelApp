@section('footer_script')
<script src="{{ asset('/public/js/jquery-1.10.2.js')}}" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!--   Core JS Files   -->
    <script src="{{ asset('/public/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('public/js/bootstrap-checkbox-radio-switch.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('public/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('public/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
<!--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('public/js/light-bootstrap-dashboard.js')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('public/js/demo.js')}}"></script>
        
        <script src="{{asset('public/js/custom.js')}}"></script>



@endsection