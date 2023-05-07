# Script de automação, lembre-se de configurar o .env antes de utilizar.
# Este script está configurado para automatizar um ambiente com o pacote XAMPP.

$env:Path += ";C:\xampp\php"
$env:Path += ";C:\xampp\mysql\bin"
$env:Path += ";C:\ProgramData\ComposerSetup\bin"
$env:Path += ";$env:APPDATA\Composer\vendor\bin"
$env:Path += ";$env:APPDATA\npm"

Write-Host ""
Write-Host "Instalando dependências.."
Start-Process composer update -NoNewWindow -Wait

Write-Host ""
Write-Host "Gerando nova chave para o Laravel.."
php artisan key:generate

Write-Host ""
Write-Host "Migrando tabelas para a base de dados.."
php artisan migrate --force

Write-Host ""
$answer = Read-Host "Deseja iniciar o servidor do Laravel? (S/N)"

if ($answer -eq "S") {
    Start-Process explorer "http://127.0.0.1:8000"
    php artisan serve
} else {
    Write-Host ""
    Write-Host "Servidor não iniciado!"
    Write-Host ""
}
