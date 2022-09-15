#include <iostream>
#include <cmath>
#include <stdio.h>
#include <string.h>
#include <windows.h>

using namespace std;

#define TRIGONOMETRIA 0
#define FLUXOCALOR 1

void abrirPrograma(int programa, int usearg, const char *arg, const char *oprog){
	
	char cmd[128];
     cmd[0] = '\0';
	
    switch(programa){
            case TRIGONOMETRIA:
                if(usearg) sprintf(cmd,"start Trigonometria.exe %s",oprog,arg);
                else sprintf(cmd,"start D:\\Meus_Programas\\C++\\Meus Projetos\\Matematica\\Calculadoras\\Trigonometria.exe",oprog);
                system(cmd);
                break;

			case FLUXOCALOR:
				if(usearg) sprintf(cmd,"start CalorSL.exe %s",oprog,arg);
                else sprintf(cmd,"start D:\\Meus_Programas\\C++\\Meus Projetos\\Matematica\\Calculadoras\\CalorSL.exe",oprog);
                system(cmd);
                break;
                
            default:
            break;
}
}

int main() {
	
	double x, y, resultado, dados;
	char operacao, limpar;
	bool reiniciar = 1;
	int opt = 0;
    char arg[2][128];
	
	cout << "Escoha o valor de X: " << endl;
	cin >> x;
	cout << "Escolha o valor de Y: " << endl;
	cin >> y;
	cout << "Escolha a operacao usando os sinais(+,-,,/,*(e),raiz(r),rad(p)" << endl << 
			"trigonometria(t), Fluxo de Calor(c),limpar(l),finalizar(f))" << endl;
	cin >> operacao;
	
	switch (operacao) {
		
		case '+':
			resultado = x + y;
			cout << "Resultado da soma e: " << resultado << endl << endl;
			dados = resultado;
			break;
		
		case '-':
			resultado = x - y;
			cout << "Resultado da subtracao e: " << resultado << endl << endl;
			dados = resultado;
			break;
			
		case '*':
			resultado = x * y;
			cout << "Resultado da multiplicacao e: " << resultado << endl << endl;
			dados = resultado;
			break;
			
		case '/':
			resultado = x / y;
			cout << "Resultado da divisao e: " << resultado << endl << endl;
			dados = resultado;
			break;
			
		case 'e':
			resultado = pow(x, y) ;
			cout << "Resultado da expoentizacao e: " << resultado << endl << endl;
			dados = resultado;
			break;
		
		case 'r':
			resultado = sqrt(x);
			cout << "Resultado da raiz quadrada e: " << resultado << endl << endl;
			dados = resultado;
			break;
			
		case 'p':
			resultado = x*3.14159/180;
			cout << "Resultado da soma e: " << resultado << endl << endl;
			dados = resultado;
			break;
			
		case 't':
			if(opt == 0){
        	printf("");
        	scanf("Trigonometria.exe",arg[1]);
	    	}
		
		    printf("", arg[1], arg[0]);
		    //Se o usuario nao quiser usar argumento é so escrever no
		    if(strcmp(arg[0],"no") == 0) {
		    abrirPrograma(opt,0,NULL,arg[1]);
		    } else {
		    abrirPrograma(opt,1,arg[0],arg[1]);
		    }
			break;

		case 'c':
			opt = 1;
			if(opt == 1){
        	printf("");
        	scanf("CalorSL.exe",arg[1]);
	    	}
		
		    printf("", arg[1], arg[0]);
		    //Se o usuario nao quiser usar argumento é so escrever no
		    if(strcmp(arg[0],"no") == 0) {
		    abrirPrograma(opt,0,NULL,arg[1]);
		    } else {
		    abrirPrograma(opt,1,arg[0],arg[1]);
		    }
			break;
			
			
		case 'l':
			dados = 0;
			cout << "A memoria foi limpa" << endl << endl;
			std::cout << "Escolha o valor de Y: " << std::endl;
			cin >> y;
			dados = y;
			break;
			
		case 'f':
			cout << "Finalizando sistema" << endl << endl;
			reiniciar = 0;
			break;
	}
	
	while (reiniciar == 1) {
		
		cout << "Escoha o valor de X: " << endl;
		cin >> x;
		cout << "Escolha a operacao usando os sinais(+,-,,/,*(e),raiz(r),rad(p)" << endl << 
			"trigonometria(t), Fluxo de Calor(c),limpar(l),finalizar(f))" << endl;
		cin >> operacao;
		
		switch(operacao) {
			
			case '+':
				resultado = dados + x;
				cout << "Resultado da soma e: " << resultado << endl << endl;
				dados = resultado;
				break;
			
			case '-':
				resultado = dados - x;
				cout << "Resultado da subtracao e: " << resultado << endl << endl;
				dados = resultado;
				break;
				
			case '*':
				resultado = dados * x;
				cout << "Resultado da multiplicacao e: " << resultado << endl << endl;
				dados = resultado;
				break;
				
			case '/':
				resultado = dados / x;
				cout << "Resultado da divisao e: " << resultado << endl << endl;
				dados = resultado;
				break;
				
			case 'e':
				resultado = pow(dados, x) ;
				cout << "Resultado da expoentizacao e: " << resultado << endl << endl;
				dados = resultado;
				break;
			
			case 'r':
				resultado = sqrt(x);
				cout << "Resultado da raiz quadrada e: " << resultado << endl << endl;
				dados = resultado;
				break;
				
			case 'p':
				resultado = x*3.14159/180;
				cout << "Resultado da soma e: " << resultado << endl << endl;
				dados = resultado;
				break;
				
			case 't':
				if(opt == 0){
				printf("");
				scanf("Trigonometria.exe",arg[1]);
				}
			
				printf("", arg[1], arg[0]);
				//Se o usuario nao quiser usar argumento é so escrever no
				if(strcmp(arg[0],"no") == 0) {
				abrirPrograma(opt,0,NULL,arg[1]);
				} else {
				abrirPrograma(opt,1,arg[0],arg[1]);
				}
				break;

			case 'c':
				if(opt == 1){
				printf("");
				scanf("CalorSL.exe",arg[1]);
				}
			
				printf("", arg[1], arg[0]);
				//Se o usuario nao quiser usar argumento é so escrever no
				if(strcmp(arg[0],"no") == 0) {
				abrirPrograma(opt,0,NULL,arg[1]);
				} else {
				abrirPrograma(opt,1,arg[0],arg[1]);
				}
				break;
				
			case 'l':
				dados = 0;
				cout << "A memoria foi limpa" << endl << endl;
				std::cout << "Escolha o valor de Y: " << std::endl;
				cin >> y;
				dados = y;
				break;
				
			case 'f':
				cout << "Finalizando sistema" << endl << endl;
				reiniciar = 0;
				break;
		}	
	}
	return 0;
}