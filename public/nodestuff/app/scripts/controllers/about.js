'use strict';

/**
 * @ngdoc function
 * @name nodestuffApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the nodestuffApp
 */
angular.module('nodestuffApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
