<?php
/**
 * koneksi.php
 * Script koneksi ke PostgreSQL via PDO (Supabase Cloud Pooler)
 */

// Data ini diambil persis dari foto Supabase kamu!
$host     = "aws-1-ap-south-1.pooler.supabase.com"; 
$port     = "6543";                                
$dbname   = "postgres";                       
$user     = "postgres.nawvqzysckecvyuvlvfs"; 
$password = "Araffapramana";                  

try {
    // Format DSN PostgreSQL Pooler
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    
    // Membuat instance koneksi PDO baru
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Hapus tanda // di bawah ini jika kamu mau mengetes koneksinya
    // echo "Koneksi ke Supabase Berhasil!";
    
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>