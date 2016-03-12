(function(){
    angular.module('app')
        .controller('Socioeconomico', socioeconomicoController);

    function socioeconomicoController($scope){
        $scope.mostrarP = true;
        $scope.typeP = 'button';
        $scope.mostrarM = true;
        $scope.typeM = 'button';
        $scope.editP = function(){
            $scope.mostrarP = !$scope.mostrarP;
            setTimeout(function(){

            $scope.typeP = 'submit';
            }, 1000);
        }
        $scope.editM = function(){
            $scope.mostrarM = !$scope.mostrarM;
            setTimeout(function(){

            $scope.typeM = 'submit';
            }, 1000);
        }
    }
}());