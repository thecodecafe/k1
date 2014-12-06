// lazyload config

angular.module('app')
    /**
   * jQuery plugin config use ui-jq directive , config the js and css files that required
   * key: function name of the jQuery plugin
   * value: array of the css js file located
   */
  .constant('JQ_CONFIG', {
      easyPieChart:   [Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/easypiechart/jquery.easy-pie-chart.js'],
      sparkline:      [Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/sparkline/jquery.sparkline.min.js'],
      plot:           [Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.min.js', 
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.resize.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.tooltip.min.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.spline.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.orderBars.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/charts/flot/jquery.flot.pie.min.js'],
      slimScroll:     [Site.Config.url+'/assets/js/backend/src/vendor/jquery/slimscroll/jquery.slimscroll.min.js'],
      sortable:       [Site.Config.url+'/assets/js/backend/src/vendor/jquery/sortable/jquery.sortable.js'],
      nestable:       [Site.Config.url+'/assets/js/backend/src/vendor/jquery/nestable/jquery.nestable.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/nestable/nestable.css'],
      filestyle:      [Site.Config.url+'/assets/js/backend/src/vendor/jquery/file/bootstrap-filestyle.min.js'],
      slider:         [Site.Config.url+'/assets/js/backend/src/vendor/jquery/slider/bootstrap-slider.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/slider/slider.css'],
      chosen:         [Site.Config.url+'/assets/js/backend/src/vendor/jquery/chosen/chosen.jquery.min.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/chosen/chosen.css'],
      TouchSpin:      [Site.Config.url+'/assets/js/backend/src/vendor/jquery/spinner/jquery.bootstrap-touchspin.min.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/spinner/jquery.bootstrap-touchspin.css'],
      wysiwyg:        [Site.Config.url+'/assets/js/backend/src/vendor/jquery/wysiwyg/bootstrap-wysiwyg.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/wysiwyg/jquery.hotkeys.js'],
      dataTable:      [Site.Config.url+'/assets/js/backend/src/vendor/jquery/datatables/jquery.dataTables.min.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/datatables/dataTables.bootstrap.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/datatables/dataTables.bootstrap.css'],
      vectorMap:      [Site.Config.url+'/assets/js/backend/src/vendor/jquery/jvectormap/jquery-jvectormap.min.js', 
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/jvectormap/jquery-jvectormap-world-mill-en.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/jvectormap/jquery-jvectormap-us-aea-en.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/jvectormap/jquery-jvectormap.css'],
      footable:       [Site.Config.url+'/assets/js/backend/src/vendor/jquery/footable/footable.all.min.js',
                          Site.Config.url+'/assets/js/backend/src/vendor/jquery/footable/footable.core.css']
      }
  )
  // oclazyload config
  .config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
      // We configure ocLazyLoad to use the lib script.js as the async loader
      $ocLazyLoadProvider.config({
          debug: false,
          events: true,
          modules: [
              {
                  name: 'ngGrid',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/ng-grid/ng-grid.min.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/ng-grid/ng-grid.min.css',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/ng-grid/theme.css'
                  ]
              },
              {
                  name: 'ui.select',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-ui-select/select.min.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-ui-select/select.min.css'
                  ]
              },
              {
                  name:'angularFileUpload',
                  files: [
                    Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-file-upload/angular-file-upload.min.js'
                  ]
              },
              {
                  name:'ui.calendar',
                  files: [Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-ui-calendar/calendar.js']
              },
              {
                  name: 'ngImgCrop',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/ngImgCrop/ng-img-crop.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/ngImgCrop/ng-img-crop.css'
                  ]
              },
              {
                  name: 'angularBootstrapNavTree',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-bootstrap-nav-tree/abn_tree_directive.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-bootstrap-nav-tree/abn_tree.css'
                  ]
              },
              {
                  name: 'toaster',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angularjs-toaster/toaster.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angularjs-toaster/toaster.css'
                  ]
              },
              {
                  name: 'textAngular',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/textAngular/textAngular-sanitize.min.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/textAngular/textAngular.min.js'
                  ]
              },
              {
                  name: 'vr.directives.slider',
                  files: [
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-slider/angular-slider.min.js',
                      Site.Config.url+'/assets/js/backend/src/vendor/modules/angular-slider/angular-slider.css'
                  ]
              }
          ]
      });
  }])
;