var app = angular.module('myApp',[]);
app.controller('myController',function($scope,$http){
    //row = 'row_'+1;
//              $scope.row1 = true;
    $scope.deleteRecord = function(item){
       url =  item.target.attributes.data.value;
       id = item.target.attributes.id.value;
        $http({
          url:url+'/'+id,
          method:'POST',
          }).then(function(response){
              row = 'row_'+id;
              $scope.row = true;
          });
    }
});

