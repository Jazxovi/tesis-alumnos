(function(){
    angular.module('app')
        .controller('Padres', padresController);

    function padresController($scope){

        $scope.horarioPadre = function(){
            if ($scope.horaMinPapa == undefined && $scope.horaMaxPapa == undefined) {
                $.notify("Lo sentimos no podemos actualizar con información en blanco", "warn");
            }
            else{
        	   $("#horarioPadre").val($scope.horaMinPapa + " a " + $scope.horaMaxPapa);
            }
        }

        $scope.horarioMadre = function(){
            if ($scope.horaMinMama == undefined && $scope.horaMaxMama == undefined) {
                $.notify("Lo sentimos no podemos actualizar con información en blanco", "warn");
            }
            else{
                $("#horarioMadre").val($scope.horaMinMama + " a " + $scope.horaMaxMama);
            }
        }
    }
}());