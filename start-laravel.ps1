$env:Path += ";C:\xampp\php"
$env:Path += ";C:\xampp\mysql\bin"
$env:Path += ";C:\ProgramData\ComposerSetup\bin"
$env:Path += ";$env:APPDATA\Composer\vendor\bin"
$env:Path += ";$env:APPDATA\npm"

Write-Host ""
Write-Host "Instalando dependências.."
Write-Host ""
Start-Process composer update -NoNewWindow -Wait

Write-Host ""
Write-Host "Gerando nova chave para o Laravel.."
php artisan key:generate

Write-Host ""
Write-Host "Migrando tabelas para a base de dados.."
php artisan migrate --force

Write-Host ""
Write-Host "Iniciando servidor.."
Start-Process explorer "http://127.0.0.1:8000"
php artisan serve
