#include <iostream>
#include <stdlib.h>

int main() {
	system("powershell Set-ExecutionPolicy RemoteSigned && powershell Install-PackageProvider -Name NuGet -Force && powershell Install-Module PSWindowsUpdate -Force && powershell Get-WindowsUpdate && powershell Install-WindowsUpdate -AcceptAll -AutoReboot");
	return 0;
}