#include <iostream>
#include <direct.h>

int main() {
    system("rmdir /s /Q C:\\xampp\\htdocs\\");
    system("rmdir /s /Q C:\\xampp\\BrianCP-main\\");
    _mkdir("C:\\xampp\\htdocs");
    system("cls");
    system("curl https://cdn.brianoost.com/briancp/BrianCP-main.zip --output C:\\xampp\\BrianCP-main.zip");
    system("powershell Expand-Archive -Path C:\\xampp\\BrianCP-main.zip C:\\xampp\\ -Force");
    system("xcopy C:\\xampp\\BrianCP-main\\src\\www\\ C:\\xampp\\htdocs\\ /E /H /C /I");
    system("del C:\\xampp\\BrianCP-main.zip");
    system("rmdir /s /Q C:\\xampp\\BrianCP-main\\");
    return 0;
}