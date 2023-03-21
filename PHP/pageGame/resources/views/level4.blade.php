<x-layout>
    nivel 4
    @php
        $numLeft = rand(0,5);
        $numCenter = rand(0,5);
        $numRight = rand(0,5);

        switch ($numLeft) {
            case '1':
                $routeLeft = "/l1";
                break;
            case '2':
                $routeLeft = "/l2";
                break;
            case '3':
                $routeLeft = "/l3";
                break;
            case '4':
                $routeLeft = "/l4";
                break;
            case '5':
                $routeLeft = "/l5";
                break;

            default:
                "Fudeu!";
                break;
        }
        switch ($numCenter) {
            case '1':
                $routeCenter = "/l1";
                break;
            case '2':
                $routeCenter = "/l2";
                break;
            case '3':
                $routeCenter = "/l3";
                break;
            case '4':
                $routeCenter = "/l4";
                break;
            case '5':
                $routeCenter = "/l5";
                break;

            default:
                "Fudeu!";
                break;
        }
        switch ($numRight) {
            case '1':
                $routeRight = "/l1";
                break;
            case '2':
                $routeRight = "/l2";
                break;
            case '3':
                $routeRight = "/l3";
                break;
            case '4':
                $routeRight = "/l4";
                break;
            case '5':
                $routeRight = "/l5";
                break;

            default:
                "Fudeu!";
                break;
        }
    @endphp
    <a href="{{$routeLeft}}">Esquerda</a>
    <a href="{{$routeCenter}}">Centro</a>
    <a href="{{$routeRight}}">Direita</a>
</x-layout>
