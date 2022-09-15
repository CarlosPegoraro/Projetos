#include <stdio.h>
#include <string.h>
#include <windows.h>

#define PROG_OTHER 0
#define PROG_GOOGLECHROME 1
#define PROG_NOTEPAD 2
#define PROG_ENTRARNAMATRIX 3 //acho que é o cafe :X
 
void abrirPrograma(int programa, int usearg, const char *arg, const char *oprog){
     char cmd[128];
     cmd[0] = '\0';

     //IR AO PROGRAMA ESCOLHIDO
    switch(programa){
            //PROGRAMA ESCOLHIDO PELO USUARIO DE 'PEDRA FILOSOFAL'
            case PROG_OTHER:
                if(usearg) sprintf(cmd,"start trigonometria.exe %s",oprog,arg);
                else sprintf(cmd,"start trigonometria.exe",oprog);
                system(cmd);
                break;

            //GOOGLE CHROME - NAVEGADOR
            case PROG_GOOGLECHROME:
                if(usearg) sprintf(cmd,"start chrome %s",arg);
                else sprintf(cmd,"start chrome");
                system(cmd);
                break;

            //BLOCO DE NOTAS - EDITOR DE TEXTO
            case PROG_NOTEPAD:
                if(usearg) sprintf(cmd,"start notepad %s",arg);
                else sprintf(cmd,"start notepad");
                system(cmd);
                break;
  
            //UNKNOW
            default:
            break;
}
}

int main(){
    //Variaveis
    int opt = 0;
    char arg[2][128];

    while(1){
    //Limpar tela
    system("cls");
    //Menu
    printf(" -- =- = - =- =- = - = -= - = - = -\n");
    printf("          Abra um programa !\n");
    printf("       - = - =- = -= -=- --=\n");
    printf("       - =   LISTA        -=\n");
    printf("       - 0 - Escolher     -=\n");
    printf("       - 1 - Google chrome-=\n");
    printf("       - 2 - Notepad      -=\n");
    printf("       - 3 - Sair         -=\n");
    scanf("%d",&opt);
    //Escolheu sair
    if(opt == 3) break;
    //Opcao invalida
    if(opt > 3 || opt < 0) continue;

    //Usuario quer escolher o programa
    if(opt == 0){
        printf("\nNome do programa:");
        scanf("%s",arg[1]);
    }
    //Argumento usado para abrir junto ao programa
    printf("\nArgumento(use 'no' para nenhum argumento):");
    scanf("%s",arg[0]);

    printf("Abrindo: %s %s\n", arg[1], arg[0]);
    //Se o usuario nao quiser usar argumento é so escrever no
    if(strcmp(arg[0],"no") == 0)
    abrirPrograma(opt,0,NULL,arg[1]);
    else
    abrirPrograma(opt,1,arg[0],arg[1]);
    }
}