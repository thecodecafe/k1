'use strict';

/**
 * Config for the router
 */
angular.module('app')
  .run(
    ['$rootScope', '$state', '$stateParams',
      function ($rootScope,   $state,   $stateParams) {
          $rootScope.$state = $state;
          $rootScope.$stateParams = $stateParams;        
      }
    ]
  )
  .config(
    ['$stateProvider', '$urlRouterProvider',
      function ($stateProvider,   $urlRouterProvider) {
          var url = Site.Config.assetUrl;
          var tplUrl = Site.Config.tplUrl;

          $urlRouterProvider.otherwise('/app/dashboard');

          $stateProvider
              .state('app', {
                  abstract: true,
                  url: '/app',
                  templateUrl: tplUrl+'app.html'
              })
              .state('app.dashboard', {
                  url: '/dashboard',
                  templateUrl: tplUrl+'dashboard.html'
              })

              .state('apps', {
                  abstract: true,
                  url: '/apps',
                  templateUrl: tplUrl+'layout.html'
              })
               .state('apps.school', {
                  url: '/school',
                  templateUrl: tplUrl+'school.html',
                  resolve: {
                    deps: ['$ocLazyLoad',
                        function( $ocLazyLoad ){
                          return $ocLazyLoad.load('ui.select').then(
                              function(){
                                  return $ocLazyLoad.load([url+'/app/school/school.js', url+"/app/school/school-service.js"]);
                              }
                          );
                    }]
                  }
              })
              .state('apps.lga', {
                url: '/lgas',
                templateUrl: tplUrl+'lgas.html',
                resolve: {
                  deps: ['$ocLazyLoad',
                      function( $ocLazyLoad ) {
                        return $ocLazyLoad.load('ui.select').then(
                            function() {
                              return $ocLazyLoad.load([url+'/app/lgas/lga.js', url+"/app/lgas/lga-service.js"]);
                            }
                        )
                    }]
                }
              })
              .state('apps.cities', {
                url: '/cities',
                templateUrl: tplUrl+'cities.html',
                resolve: {
                  deps: ['$ocLazyLoad',
                      function( $ocLazyLoad ) {
                        return $ocLazyLoad.load('ui.select').then(
                            function() {
                              return $ocLazyLoad.load([url+'/app/cities/city.js', url+"/app/cities/city-service.js"]);
                            }
                        )
                    }]
                }
              })
              .state('apps.industries', {
                url: '/industries',
                templateUrl: tplUrl+'industries.html',
                resolve: {
                  deps: ['$ocLazyLoad', function ( $ocLazyLoad ) {
                    return $ocLazyLoad.load([url+'/app/industries/industries.js', url+'/app/industries/industry.js'])
                  }]
                }
              })

              .state('app.users', {
                url: '/users',
                templateUrl: tplUrl+'users.html',
                resolve: {
                  deps: ['$ocLazyLoad',
                      function( $ocLazyLoad ) {
                        return $ocLazyLoad.load(['ui.select','angularFileUpload']).then(
                          function() {
                            return $ocLazyLoad.load([
                              url+'/app/users/users.js',
                              url+'/app/users/form.js',
                              url+"/app/users/user-service.js",
                              url+"/app/lgas/lga-service.js",
                              url+"/app/cities/city-service.js",
                              url+"/app/school/school-service.js",
                              url+"/app/industries/industry.js",
                            ]);
                          }
                        )
                    }]
                }
              })

              .state('app.users.group', {
                url: '/list/{group}',
                templateUrl: tplUrl+'users.index.html'
              })

              .state('app.users.user', {
                url: '/{user:[0-9]{1,4}}',
                templateUrl: tplUrl+'users.user.html'
              })

              .state('app.users.edit', {
                url: '/{user:[0-9]{1,4}}/edit',
                templateUrl: tplUrl+'users.form.html'
              })

              .state('app.users.create', {
                url: '/create',
                templateUrl: tplUrl+'users.form.html'
              })
      }
    ]
  );