#include <iostream>

using namespace std;

int main() {

    char change; bool restart = 1; double cal; double j;
    double q, t, m;

    std::cout << "Escolha o que voce Precisa procurar:" << std::endl << "c; l; Qs(s); Ql(q)    "; 
    cin >> change;

    if (change == 'c' || change == 'C') {
        change = 'c';
    } else if (change == 'l' || change =='L')
    {
        change = 'l';
    } else if (change == 's' || change =='S')
    {
        change = 's';
    } else if (change == 'q' || change =='Q')
    {
        change = 'q';
    }

    switch (change) {

        case 'c':
            std::cout << std::endl << "Insira o valor de Q:   ";
            cin >> q;
            std::cout << std::endl << "Insira o valor de T:   ";
            cin >> t;
            std::cout << std::endl << "Insira o valor de M:   ";
            cin >> m;

            double c;
            c = q / (t * m);
            cal = c;

            std::cout << "O valor de C deu, em cal/g.c: " << c << endl;
            break;

        case 'l':
            std::cout << std::endl << "Insira o valor de Q:   ";
            cin >> q;
            std::cout << std::endl << "Insira o valor de M:   ";
            cin >> m;

            double l;
            l = q / m;
            cal = l;

            std::cout << "O valor de L deu, em cal/g: " << l << endl;
            break;

        case 's':
            std::cout << std::endl << "Insira o valor de C:   ";
            cin >> c;
            std::cout << std::endl << "Insira o valor de T:   ";
            cin >> t;
            std::cout << std::endl << "Insira o valor de M:   ";
            cin >> m;

            double s;
            s = m * c * t;
            cal = s;

            std::cout << "O valor de Qs deu, em cal: " << s << endl;
            break;

        case 'q':
            std::cout << std::endl << "Insira o valor de L:   ";
            cin >> l;
            std::cout << std::endl << "Insira o valor de M:   ";
            cin >> m;

            double l2;
            l2 = m * l;
            cal = l2;

            std::cout << "O valor de Qs deu, em cal: " << l2 << endl;
            break;

        default:
            break;
    }

    std::cout << "Deseja converter o valor encontrado para jaules?    ";
    cin >> change;

    if ( change == 's' || change == 'S') {
        j = cal * 4;
        std::cout << std::endl << "O valor em jaules e:   " << j << endl;
    }

    std::cout << "Realizar uma nova consulta?    ";
    cin >> change;
    std::cout << std::endl;

    if (change == 'n' || change == 'N') {
        restart = 0;
        std::cout << "Finalizando programa..." << std::endl;
    }

    while (restart == 1)
    {   
        std::cout << "Escolha o que voce Precisa procurar:" << std::endl << "c; l; Qs(S); Ql(QL)    "; 
        cin >> change;

        if (change == 'c' || change == 'C') {
            change = 'c';
        } else if (change == 'l' || change =='L')
        {
            change = 'l';
        } else if (change == 's' || change =='S')
        {
            change = 's';
        } else if (change == 'ql' || change =='QL' || change == 'Ql' || change =='qL')
        {
            change = 'q';
        }

        switch (change) {

            case 'c':
                std::cout << std::endl << "Insira o valor de Q:   ";
                cin >> q;
                std::cout << std::endl << "Insira o valor de T:   ";
                cin >> t;
                std::cout << std::endl << "Insira o valor de M:   ";
                cin >> m;

                double c;
                c = q / (t * m);
                cal = c;

                std::cout << "O valor de C deu, em cal/g.c: " << c << endl;
                break;

            case 'l':
                std::cout << std::endl << "Insira o valor de Q:   ";
                cin >> q;
                std::cout << std::endl << "Insira o valor de M:   ";
                cin >> m;

                double l;
                l = q / m;
                cal = l;

                std::cout << "O valor de L deu, cal/g: " << l << endl;
                break;

            case 's':
                std::cout << std::endl << "Insira o valor de C:   ";
                cin >> c;
                std::cout << std::endl << "Insira o valor de T:   ";
                cin >> t;
                std::cout << std::endl << "Insira o valor de M:   ";
                cin >> m;

                double s;
                s = m * c * t;
                cal = s;

                std::cout << "O valor de Qs deu, em cal: " << s << endl;
                break;

            case 'q':
                std::cout << std::endl << "Insira o valor de L:   ";
                cin >> l;
                std::cout << std::endl << "Insira o valor de M:   ";
                cin >> m;

                double l2;
                l2 = m * l;
                cal = l2;

                std::cout << "O valor de Qs deu, em cal: " << l2 << endl;
                break;

            default:
                break;
        }

        std::cout << "Deseja converter o valor encontrado para jaules?    ";
        cin >> change;

        if ( change == 's' || change == 'S') {
            j = cal * 4;
            std::cout << std::endl << "O valor em jaules e:   " << j << endl;
        }

        std::cout << "Realizar uma nova consulta?    ";
        cin >> change;
        std::cout << std::endl;

        if (change == 'n' || change == 'N') {
            restart = 0;
            std::cout << "Finalizando programa..." << std::endl;
        }
    }
    
    return 0;
}
