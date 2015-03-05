'use strict';

/**
 * @ngdoc function
 * @name nodestuffApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the nodestuffApp
 */
angular.module('nodestuffApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
