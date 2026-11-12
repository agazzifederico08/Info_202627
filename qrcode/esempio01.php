<?php
  // Carica il file indicato.
  // Genera errore se non trovato.
  require 'phpqrcode/qrlib.php';
  
  // Testo da inserire nel Qr code.
  $text = "Primo Qr generato da php!";
  
  // Genera il QR code e lo restituisce come immagine.
  QRcode::png($text);
?>
