#!/bin/bash

# 1. Inicia o servidor Python em segundo plano (&)
# O '>' desvia a saída para não sujar nossa tela
python -m http.server 8080 > /dev/null 2>&1 &

# Guarda o ID do processo (PID) para desligá-lo depois
SERVER_PID=$!

echo "[+] Servidor iniciado com PID: $SERVER_PID"
echo "[+] Aguardando 2 segundos para o serviço subir..."
sleep 2

# 2. Executa o Nmap focado na versão do serviço
echo "[+] Iniciando varredura de versão na porta 8080..."
nmap -sV -p 8080 127.0.0.1 > resultado_scan.txt

# 3. Exibe o resultado na tela
cat resultado_scan.txt

# 4. Finaliza o servidor Python para não gastar bateria/recursos
kill $SERVER_PID
echo "[+] Auditoria finalizada e servidor desligado."
