#include <iostream>
#include <cmath>

using namespace std;

int main() {

    double X; double radX;
    double senX; double cosX; double tgX;
    bool restart; char escolha;

    std::cout << "Defina o valor de X: " << std::endl;
    cin >> X;

    radX = X*3.14159/180;
    double seno = floorf(sin(radX) * 100) / 100; double cosseno = floorf(cos(radX)  * 100) / 100; double tangente = floorf(tan(radX)  * 100) / 100; 
    double cossecante = floorf(asin(radX)  * 100) / 100; double secante = floorf(acos(radX)  * 100) / 100; double cotangente = floorf(atan(radX)  * 100) / 100; 

    std::cout << "O angulo em GRAUS escolhido foi: " << X << std::endl;
    std::cout << "O angulo em RAD escolhido foi: " << radX << std::endl;
    std::cout << "O SENO encontrado, em valor aproximado foi: " << seno << std::endl;
    std::cout << "O COSSENO encontrado, em valor aproximado foi: " << cosseno << std::endl;
    std::cout << "O TANGENTE encontrado, em valor aproximado foi: " << tangente << std::endl;
    std::cout << "O COSSECANTE encontrado, em valor aproximado foi: " << cossecante << std::endl;
    std::cout << "O SECANTE encontrado, em valor aproximado foi: " << secante << std::endl;
    std::cout << "O COTANGENTE encontrado, em valor aproximado foi: " << cotangente << std::endl;

    std::cout << "Mostrar mais valores?(S/N)? " << std::endl;
    cin >> escolha;

    if (escolha == 'N' || escolha == 'n')
    {
        restart = 1;
        std::cout << "Realizar nova consulta?(S/N) " << std::endl;
	    cin >> escolha;
	    if (escolha == 'S' || escolha == 's')
		{
		    restart = 1;
		} else if (escolha == 'N' || escolha == 'n')
		{
		    restart = 0;
		    std::cout << "Finalizando programa..." << std::endl << endl;  
		}
    } else if (escolha == 'S' || escolha == 's')
    {
        restart = 0;
        double seno2x = 2 * seno * cosseno;
        double cos2x = pow(cosseno, 2) - pow(seno, 2);
        std::cout << "Valor de sen2(" << X << ": " << seno2x << std::endl;
	    std::cout << "Valor de cos2(" << X << ": " << cos2x << std::endl;
        std::cout << "Realizar nova consulta?(S/N) " << std::endl;
        cin >> escolha;
        if (escolha == 'S' || escolha == 's')
	    {
	        restart = 1;
	    } else if (escolha == 'N' || escolha == 'n')
	    {
	        restart = 0;
	        std::cout << "Finalizando programa..." << std::endl << endl;  
	    } 
    }



    while (restart == 1) 
    {
        std::cout << "Defina o valor de X: " << std::endl;
        cin >> X;

        radX = X*3.14159/180;
        double seno = floorf(sin(radX) * 100) / 100; double cosseno = floorf(cos(radX)  * 100) / 100; double tangente = floorf(tan(radX)  * 100) / 100; 
        double cossecante = floorf(asin(radX)  * 100) / 100; double secante = floorf(acos(radX)  * 100) / 100; double cotangente = floorf(atan(radX)  * 100) / 100; 

        std::cout << "O angulo em GRAUS escolhido foi: " << X << std::endl;
        std::cout << "O angulo em RAD escolhido foi: " << radX << std::endl;
        std::cout << "O SENO encontrado, em valor aproximado foi: " << seno << std::endl;
        std::cout << "O COSSENO encontrado, em valor aproximado foi: " << cosseno << std::endl;
        std::cout << "O TANGENTE encontrado, em valor aproximado foi: " << tangente << std::endl;
        std::cout << "O COSSECANTE encontrado, em valor aproximado foi: " << cossecante << std::endl;
        std::cout << "O SECANTE encontrado, em valor aproximado foi: " << secante << std::endl;
        std::cout << "O COTANGENTE encontrado, em valor aproximado foi: " << cotangente << std::endl;

        std::cout << "Mostrar mais valores?(S/N)? " << std::endl;
	    cin >> escolha;
	
	    if (escolha == 'N' || escolha == 'n')
	    {
	        restart = 1;
	        std::cout << "Realizar nova consulta?(S/N) " << std::endl;
	        cin >> escolha;
	        if (escolha == 'S' || escolha == 's')
		    {
		        restart = 1;
		    } else if (escolha == 'N' || escolha == 'n')
		    {
		        restart = 0;
		        std::cout << "Finalizando programa..." << std::endl << endl;  
		    }
	    } else if (escolha == 'S' || escolha == 's')
	    {
	        restart = 0;
	        double seno2x = 2 * seno * cosseno;
	        double cos2x = pow(cosseno, 2) - pow(seno, 2);
	        std::cout << "Valor de sen2(" << X << ": " << seno2x << std::endl;
	        std::cout << "Valor de cos2(" << X << ": " << cos2x << std::endl;
	        std::cout << "Realizar nova consulta?(S/N) " << std::endl;
	        cin >> escolha;
	        if (escolha == 'S' || escolha == 's')
		    {
		        restart = 1;
		    } else if (escolha == 'N' || escolha == 'n')
		    {
		        restart = 0;
		        std::cout << "Finalizando programa..." << std::endl << endl;  
		    } 
	    }
    }

    return 0;
}