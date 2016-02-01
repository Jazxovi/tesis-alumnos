(function(){
    angular.module("app").controller("antecedentes", antecedentes);
    
    function antecedentes($scope){
        $scope.read_bachillerato    = true;
        $scope.read_razon           = true;
        $scope.read_enfermedad      = true;
        
        $scope.tipoBachillerato = function(tipo){
            $scope.read_bachillerato = true;
            $scope.tipo_bachillerato = tipo;
            if(!tipo){
                 $scope.read_bachillerato = false;
            }
        };
        
        $scope.plantel = function(razon){
            $scope.read_razon   = true;
            $scope.razon        = razon;
            if(!razon){
                $scope.read_razon = false;
            }
        }
        
        $scope.enfermedad = function(respuesta){
               $scope.respuesta = respuesta;   
        }
    }
}());