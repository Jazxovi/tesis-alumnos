(function(){
    angular.module("app").controller("AspectosFamiliares", aspectosFamiliares);
    
    function aspectosFamiliares($scope){
        $scope.read_convivencia     = true;
        $scope.read_esparcimiento   = true;
        $scope.read_comunicacion    = true;
        
        $scope.convivencia = function(tipo){
            $scope.read_convivencia = true;
            $scope.convive_familia  = tipo;
            if(!tipo){
                $scope.read_convivencia = false;
            }
        };
        
        $scope.esparcimiento = function(lugar){
            $scope.read_esparcimiento   = true;
            $scope.lugares              = lugar;
            if(!lugar){
                $scope.read_esparcimiento = false;
            }
        }

        $scope.comunicacion = function(tipo){
            $scope.read_comunicacion    = true;
            $scope.tipo_comunicacion    = tipo;
        }
    }
}());