#include <iostream>
#include <string>
#include <cstdlib>
#include <ctime>
#include <sstream>
#include <cstring>
#include <stdlib.h>
#include <algorithm>

using namespace std; 

int main () {
	//Criacao do Usuario
	
	//randomizar os ultimos 2 digitos
	    srand((unsigned)time(0)); //para gerar números aleatórios reais.
	    int maior = 98;
	    int menor = 01;
	    int aleatorio = rand()%(maior-menor+1) + menor;
    //transformar os digitos randomicos em string
	    int n1 = aleatorio;
	    std::stringstream sstream;
	    sstream << n1;
	    string num_str = sstream.str();
	    string doisDigitos = num_str;
    //usuario digitado
	    string doisDigitosUsuario;
	    string doisDigitosUsuario2;
	    cout << "Insira o usuario em 2 partes de 2 digitos: " << endl;
	    cin >> doisDigitosUsuario >> doisDigitosUsuario2;
	    string doisDigitosUsuarioSenha = doisDigitosUsuario;
    //Concatenar os digitos randomicos com os digitos digitados
    	doisDigitosUsuario += doisDigitosUsuario2;
    	string quatroDigitos = doisDigitosUsuario;
	    quatroDigitos += doisDigitos;
	    string seisDigitos = quatroDigitos;
	    cout << "Deu certo: " << seisDigitos << endl;
    
    //------------------------------------------
    
    //id digitado
	    int id1, id2, id3;
	    cout << "Informe o ID do aparelho em tres partes de 3 caracteres cada: " << endl;
	    cin >> id1 >> id2 >> id3;
    	
	    //Transformacao de int para string das partes do id
	    	
			//id1 para id1String
				std::stringstream id1Transicao;
			   	id1Transicao << id1;
			   	string id1String = id1Transicao.str();
			   	string id1StringOriginal = id1String;
			   	string id1StringSenha = id1String;
			    	
			//id2 para id2String
			   	std::stringstream id2Transicao;
			   	id2Transicao << id2;
			   	string id2String = id2Transicao.str();
			   	string id2StringOriginal = id2String;
			   	string id2StringSenha = id2String;
			    	
			//id3 para id1String
			  	std::stringstream id3Transicao;
			   	id3Transicao << id3;
			   	string id3String = id3Transicao.str();
			   	string id3StringOriginal = id3String;
			   	string id3StringSenha = id3String;
			   	
		//Senha Inicial
		
			//inversao do usuario
	    		string inversao (seisDigitos.rbegin(), seisDigitos.rend());
	    		cout << "inversao: " << inversao << endl;
	    	
	    	//montagem da senha
	    		id1StringSenha += id2StringSenha;
	    		id1StringSenha += id3StringSenha;
	    		inversao += id1StringSenha;
	    		string senhaInicial = inversao;
	    		cout << "Senha inicial: " << senhaInicial << endl;
	    		
    	//Criacao da logica de randomizacao
    	
    		//Ultimos 3 digitos da senha de abertura
    		
		    	//Criacao do divisor do id
		    		id1StringOriginal += id3StringOriginal;
		    		stringstream geekDivisorId(id1StringOriginal);
			    	int idDivisor = 0;
			    	geekDivisorId >> idDivisor;
			    	cout << "Divisor: " << idDivisor << endl;
		    	
		    	//Transformar Id em int
			    	id1String += id2String;
			    	id1String += id3String;
			    	stringstream geekId(id1String);
			    	int idFinal = 0;
			    	geekId >> idFinal;
			    	cout << "imei: " << idFinal << endl;
    	
		    	//Formacao dos digitos(divisao do imei pelos 3 primeiros e 3 ultimos digitos)
			    	int idResultado = idFinal / idDivisor;
			    	cout << "resultado: " << idResultado <<  endl;
				    std::stringstream finalSenhaTransicao;
				    finalSenhaTransicao << idResultado;
				    string finalSenhaAbertura = finalSenhaTransicao.str();
				    cout << "Final da senha: " << finalSenhaAbertura << endl;
    		
    		//Primeiros 3 digitos da senha de abertura
    			
    			//Criacao do divisor do usuario
    				doisDigitosUsuarioSenha += doisDigitos;
    				std::stringstream geekDivisorUser(doisDigitosUsuarioSenha);
    				int userDivisor = 0;
    				geekDivisorUser >> userDivisor;
    				cout << "Divisor: " << userDivisor << endl;
    				
    			//Transformar User em int
    				std::stringstream geekUser(seisDigitos);
    				int userFinal = 0;
    				geekUser >> userFinal;
    				cout << "Usuario: " << userFinal << endl;
    				
    			//Formacao dos digitos(Divisao do usuario pelos 2 primeiros e 2 ultimos
					int userResultado = userFinal / userDivisor;
					cout << "Resultado: " << userResultado << endl;
					std::stringstream inicioSenhaTransicao;
				    inicioSenhaTransicao << userResultado;
				    string inicioSenhaAbertura = inicioSenhaTransicao.str();
				    cout << "Inicio da senha: " << inicioSenhaAbertura << endl;;	

            //6 digitos do meio da senha de abertura
            int porta;

            std::cout << "Porta de abertura: " << std::endl;
            cin >> porta;

            int porta10 = porta + 10;
            int contador;
            int chaveRandomica = 10;
            for (contador = 1; porta10 < 50; contador += 1) {
                porta10 += contador;
				chaveRandomica = chaveRandomica * porta10;
				std::cout << "Meio do codigo: " << chaveRandomica << std::endl;

			}
    	
    	
    
    
    
    //--------------------------------------------
    
    
	
	return 0;
}