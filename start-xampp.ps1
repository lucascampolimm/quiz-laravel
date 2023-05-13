$env:Path += ";C:\xampp\php"
$env:Path += ";C:\xampp\mysql\bin"
$env:Path += ";C:\ProgramData\ComposerSetup\bin"
$env:Path += ";$env:APPDATA\Composer\vendor\bin"
$env:Path += ";$env:APPDATA\npm"

Write-Host "Iniciando XAMPP.."
& "C:\xampp\xampp_start.exe" startapache -NoNewWindow -Wait
& "C:\xampp\xampp_start.exe" startmysql -NoNewWindow -Wait

Write-Host ""
Write-Host "Verificando se os serviços estão em execução.."
Write-Host ""
netstat -ano | Select-String '0.0.0.0:80|0.0.0.0:3306|[::]:80|[::]:3306'
Write-Host ""
