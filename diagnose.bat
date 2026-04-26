@echo off
echo ===== DIAGNOSTIC PHP ARTISAN SERVE =====
echo.

echo --- PHP Version ---
php -v
echo.

echo --- Current Directory ---
cd
echo.

echo --- Checking vendor folder ---
if exist "vendor\autoload.php" (
    echo [OK] vendor\autoload.php found
) else (
    echo [ERROR] vendor\autoload.php NOT FOUND! Run: composer install
)
echo.

echo --- Checking .env file ---
if exist ".env" (
    echo [OK] .env found
) else (
    echo [WARNING] .env NOT FOUND! Run: copy .env.example .env
)
echo.

echo --- Testing artisan ---
php artisan --version
echo.

echo --- Attempting serve (press Ctrl+C to stop) ---
echo If this crashes, check the error above
php artisan serve --port=8001
echo.

echo --- Diagnostic Complete ---
pause
