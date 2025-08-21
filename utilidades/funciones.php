<?php

function generateLog($message) {
    // Simple logging function - you can enhance this later
    error_log($message);
}

function guardarData() {
    // Function placeholder
}

function exportarLibrosCSV() {
    try {
        $librosController = new LibroControlador();
        
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="libros_export_' . date('Y-m-d_H-i-s') . '.csv"');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        
        $output = fopen('php://output', 'w');
        
        fwrite($output, "\xEF\xBB\xBF");
        
        fputcsv($output, ['ID', 'Título', 'Autor', 'Género', 'Precio']);
        
        ob_start();
        $librosController->obtenerLibros();
        $jsonData = ob_get_clean();
        
        $libros = json_decode($jsonData, true);
        
        // Write data rows
        if ($libros && is_array($libros)) {
            foreach ($libros as $libro) {
                fputcsv($output, [
                    $libro['id'] ?? '',
                    $libro['titulo'] ?? '',
                    $libro['autor'] ?? '',
                    $libro['genero'] ?? '',
                    $libro['precio'] ?? ''
                ]);
            }
        }
        
        fclose($output);
        exit;
        
    } catch (Exception $e) {
        generateLog("Error exporting CSV: " . $e->getMessage());
        header('HTTP/1.1 500 Internal Server Error');
        echo "Error al exportar CSV: " . $e->getMessage();
        exit;
    }
}

?>