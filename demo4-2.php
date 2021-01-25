<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<style>
		h1,h2,h3,p,body{
			margin: 0;
		}
		.click{
		    position: absolute;
			top: 55%;
			right: 42%;
			opacity: 0;
			cursor: zoom-in;
			}
			h2{
				color: yellow;
			}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
	<body>
		<!-- <div ng-app="myapp" ng-controller="myctrl">
			<h1>{{welcome}}</h1>
			<h3 ng-bind="welcome"></h3>
			<input ng-model="welcome" />
		</div>
		<script>
		/**
		*  Module
		*
		* Description
		*/
		angular.module('myapp', []).controller('myctrl', function($scope){
			$scope.welcome = "Angular Thân hạnh tài trợ chương trình này!!!";
		});
		</script> -->



		<!-- <div style="background-image: url('http://aodailavender.com/wp-content/uploads/2018/11/ao-dai-truyen-thong-mau-trang-2-ta-4-ta-00-600x900.jpg');background-repeat: no-repeat; background-size: 100%;width: 35vw;height: 100vh; margin: auto;">
		 <div ng-app="myApp" ng-controller="myCtrl">
			<h1>Gọi phương thức</h1>
			<h1 ng-mousemove="count=count + 1" class="click">Đưa chuột vào đây</h1>
			<h2>${{count}}</h2>
		</div>
		<script>
			var app = angular.module('myApp', []);
			app.controller('myCtrl', function($scope){
				$scope.count = 0;
			});
		</script>  -->



		 <!-- <div ng-app="myApp" ng-controller="myCtrl">
			<h1>Gọi phương thức</h1>
			<h1 ng-mousemove="myFunction()" class="click">Đưa chuột vào đây</h1>
			<h2>${{count}}</h2>
		</div>
		<script>
			var app = angular.module('myApp', []);
			app.controller('myCtrl', function($scope){
				$scope.count = 0;
				$scope.myFunction = function(){
					$scope.count++;
				}
			});
		</script> 
		</div> -->
		




		<div ng-app="myapp" >
			<h1>Sự kiện trong AngularJS</h1>
			<div ng-controller="myctrl">
				Nhập tên của bạn:
				<input type="text" value="" ng-model="username">
				<button ng-click='sayHello()'>Click vào em đi</button>
				<hr>
				{{greeting}}
			</div>
			<script>
				var app = /**
				* myapp Module
				*
				* Description
				*/
				angular.module('myapp', []);
				app.controller('myctrl', function($scope){
					$scope.sayHello = function () {
						$scope.greeting = 'Xin chào '+ $scope.username+'!!!';
					};
				});
			</script>
		</div>



		<div ng-app="myapp">
			<h1>Sum</h1>
			<div ng-controller="myctrl">
				Nhập tên của bạn:
				<input type="number" name="" ng-model="giatria">
				<input type="number" name="" ng-model="giatrib">
				<button ng-click="sum()">Tổng</button>
				<input required type="number" ng-model="tong">
			</div>
			<script>
				var app = angular.module('myapp', []);
				app.controller('myctrl', function($scope){
					$scope.sum=function(){
						$scope.tong='';
						$scope.tong=$scope.giatria+$scope.giatrib;
					}	
				});
			</script>
		</div>
	</body>
	</html>									