$env:Path += ";C:\xampp\php"
$env:Path += ";C:\xampp\mysql\bin"
$env:Path += ";C:\ProgramData\ComposerSetup\bin"
$env:Path += ";$env:APPDATA\Composer\vendor\bin"
$env:Path += ";$env:APPDATA\npm"

$server = "localhost"
$database = "laravel_react"
$username = "lucas"
$password = "1234"

$mysqlCommand = "mysql.exe -u root -p -e `"CREATE USER '$username'@'$server' IDENTIFIED BY '$password'; GRANT ALL PRIVILEGES ON *.* TO '$username'@'$server' WITH GRANT OPTION; FLUSH PRIVILEGES;`""
Invoke-Expression -Command $mysqlCommand

$sql = @"
CREATE DATABASE $database CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
"@

$mysqlCommand = "mysql.exe -u $username -p$password -h $server -e `"$sql`""
Invoke-Expression -Command $mysqlCommand

$sqlCheckDatabase = "SHOW DATABASES LIKE '$database'"
$checkDatabaseCommand = "mysql.exe -u $username -p$password -h $server -e `"$sqlCheckDatabase`""
$result = Invoke-Expression -Command $checkDatabaseCommand

if ($result -match $database) {
    Write-Host ""
    Write-Host "O banco de dados $database foi criado com sucesso!"
    Write-Host ""
} else {
    Write-Host ""
    Write-Host "Falha ao criar o banco de dados $database."
    Write-Host ""
}

$checkUserCommand = "mysql.exe -u root -p -e `"SELECT user FROM mysql.user WHERE user = '$username' AND host = '$server'`""
$output = Invoke-Expression -Command $checkUserCommand

if ($output -match $username) {
    Write-Host ""
    Write-Host "O usuário $username foi criado com sucesso!"
} else {
    Write-Host ""
    Write-Host "Falha ao criar o usuário $username."
}
