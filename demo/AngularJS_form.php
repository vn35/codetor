<!DOCTYPE html>
<html ng-app="formExample">
<head>
    <meta charset="UTF-8">
    <title>Codeto Editor v1.0</title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>
<body>
<div ng-controller="ExampleController">
  <form novalidate class="simple-form">
    Name: <input type="text" ng-model="user.name" /><br />
    E-mail: <input type="email" ng-model="user.email" /><br />
    Gender: <input type="radio" ng-model="user.gender" value="male" />male
    <input type="radio" ng-model="user.gender" value="female" />female<br />
    <button ng-click="reset()">RESET</button>
    <button ng-click="update(user)">SAVE</button>
  </form>
  <pre>form = {{user | json}}</pre>
  <pre>master = {{master | json}}</pre>
</div>

<script>
  angular.module('formExample', [])
    .controller('ExampleController', ['$scope', function($scope) {
      $scope.master = {};

      $scope.update = function(user) {
        $scope.master = angular.copy(user);
      };

      $scope.reset = function() {
        $scope.user = angular.copy($scope.master);
      };

      $scope.reset();
    }]);
</script>
</body>
</html>
