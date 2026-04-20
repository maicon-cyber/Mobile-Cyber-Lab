# Projeto 01: Auditoria de Superfície em Android 15 (Hardened)

## Descrição
Neste projeto, realizei uma análise de portas abertas em um ambiente mobile restrito.

## Desafios Técnicos
- O Android 15 bloqueia o acesso ao `/proc/net`, impedindo comandos como `ss` e `netstat`.
- Erro encontrado: `Cannot open netlink socket: Permission denied`.

## Solução Prática
Utilizei o **Nmap** para realizar um scan sintético na interface de loopback (127.0.0.1), ignorando as restrições do sistema operacional e validando os serviços ativos.

## Ferramentas Utilizadas
- Termux (Ambiente Linux)
- Nmap (Network Mapper)
- Python 3 (Servidor de teste)
