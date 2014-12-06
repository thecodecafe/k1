<!doctype html>
<html lang="en" data-ng-app="app">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta property="envirnoment" content="{{ App::environment() }}"> 
		<title>Admin / Knowledge First</title>

		<!-- Stylesheets -->
		{{ HTML::style('assets/css/bootstrap.css') }}
		{{ HTML::style('assets/css/animate.css') }}
		{{ HTML::style('assets/css/font-awesome.min.css') }}
		{{ HTML::style('assets/css/backend/simple-line-icons.css') }}
		{{ HTML::style('assets/css/backend/font.css') }}
		{{ HTML::style('assets/css/backend/app.css') }}

		<style type="text/css">
		.photo-preview canvas
		{
			background-color: #f3f3f3;
            -webkit-box-shadow: 3px 3px 3px 0 #e3e3e3;
             	-moz-box-shadow: 3px 3px 3px 0 #e3e3e3;
                	box-shadow: 3px 3px 3px 0 #e3e3e3;
            border: 1px solid #c3c3c3;
            height: 200px;
           	margin: 6px 0 0 6px;
		}
		</style>
	</head>

	<body ng-controller="AppCtrl">
		 <div class="app" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}" ui-view></div>

		<script type="text/javascript">
			window.Site = window.Site || {};
			//Config
			Site.Config = Site.Config || {};
			Site.Config.env = "{{ App::environment() }}";
			Site.Config.url = "{{ Config::get('app.url') }}";
			Site.Config.apiUrl = Site.Config.url+"/api/";
			Site.Config.assetUrl = Site.Config.url+"/assets/js/backend/src";
			Site.Config.tplUrl = Site.Config.url+"/assets/js/backend/templates/";

			//Bootstrap data
			Site.data = Site.data || {};
			Site.data.user = '{{ json_encode($user) }}';
			Site.data.states = '{{ json_encode($states->toArray()) }}';
		</script>

		<!-- Google CDN's jQuery fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
		<script>window.jQuery || document.write('<script src="{{ URL::to("assets/js/backend/src/vendor/jquery/jquery.min.js") }}">\x3C/script>')</script>

		<!-- Angular -->
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular.js') }}

		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-animate/angular-animate.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-cookies/angular-cookies.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-resource/angular-resource.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/modules/angular-http-interceptor.js')}}
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-sanitize/angular-sanitize.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-touch/angular-touch.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/angular/angular-ui-router/angular-ui-router.js') }}
		{{ HTML::script('assets/js/backend/src/vendor/angular/ngstorage/ngStorage.js') }}


		<!-- bootstrap -->
	  	{{ HTML::script('assets/js/backend/src/vendor/angular/angular-bootstrap/ui-bootstrap-tpls.js') }}
	  	{{ HTML::script('assets/js/backend/src/vendor/modules/angularjs-toaster/toaster.js') }}
	  	<!-- lazyload -->
	  	{{ HTML::script('assets/js/backend/src/vendor/angular/oclazyload/ocLazyLoad.js') }}


	  	<!-- App -->
	  	{{ HTML::script('assets/js/backend/src/app.js') }}
	  	{{ HTML::script('assets/js/backend/src/config.js') }}
	  	{{ HTML::script('assets/js/backend/src/config.lazyload.js') }}
	  	{{ HTML::script('assets/js/backend/src/config.router.js') }}
	  	{{ HTML::script('assets/js/backend/src/main.js') }}
	  	{{ HTML::script('assets/js/backend/src/services/ui-load.js') }}
	  	{{ HTML::script('assets/js/backend/src/filters/fromNow.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/setnganimate.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-butterbar.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-focus.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-fullscreen.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-jq.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-module.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-nav.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-scroll.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-shift.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-toggleclass.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ui-validate.js') }}
	  	{{ HTML::script('assets/js/backend/src/directives/ng-thumb.js') }}
	  	{{ HTML::script('assets/js/backend/src/controllers/bootstrap.js') }}
	  	<!-- Lazy loading -->
	</body>
</html>