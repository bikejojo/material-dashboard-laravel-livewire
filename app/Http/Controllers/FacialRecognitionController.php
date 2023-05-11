<?php

namespace App\Http\Controllers;
use Aws\Rekognition\RekognitionClient;

use Illuminate\Http\Request;

class FacialRecognitionController extends Controller
{
    public function compareImages(Request $request)
    {
        // Obtener la imagen enviada por el usuario
        $image = $request->file('image');

        // Instanciar el cliente de Rekognition
        $client = new RekognitionClient([
            'version' => 'latest',
            'region' => 'us-east-1', // Cambia la región si es necesario
            'credentials' => [
                'key' => 'TU_ACCESS_KEY',
                'secret' => 'TU_SECRET_KEY',
            ],
        ]);

        // Comparar la imagen con otra imagen almacenada en la base de datos
        $result = $client->compareFaces([
            'SimilarityThreshold' => 70,
            'SourceImage' => [
                'Bytes' => file_get_contents($image),
            ],
            'TargetImage' => [
                'S3Object' => [
                    'Bucket' => 'NOMBRE_DEL_BUCKET',
                    'Name' => 'NOMBRE_DEL_ARCHIVO_DE_DESTINO',
                ],
            ],
        ]);

        // Verificar si las imágenes son similares
        if (count($result['FaceMatches']) > 0) {
            // Las imágenes son similares
            // Realiza las acciones necesarias
        } else {
            // Las imágenes no son similares
            // Realiza las acciones necesarias
        }
    }
}
