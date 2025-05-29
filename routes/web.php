<?php
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    // Step 1: Base64 convert all images
    $images = [];

    $imagePaths = [
        'bg1' => public_path('assets/images/marta.jpg'),
        'logo' => public_path('assets/images/logo-white.png'),
        'foodtruck' => public_path('assets/images/food-truck-industry.jpg'),
        'section3' => public_path('assets/images/premium_photo.jpg'),
        'handshake' => public_path('assets/images/hand-shake.png'),
        'bulb' => public_path('assets/images/lightbulb.png'),
        'man' => public_path('assets/images/man.png'),
        'speaker' => public_path('assets/images/loud-speaker.png'),
        'food1' => public_path('assets/images/food1.jpg'),
        'food2' => public_path('assets/images/food2.jpg'),
        'food3' => public_path('assets/images/food3.jpg'),
    ];


    foreach ($imagePaths as $key => $path) {
        if (file_exists($path)) {
            $imageData = base64_encode(file_get_contents($path));
            $imageType = pathinfo($path, PATHINFO_EXTENSION);
            $images[$key] = 'data:image/' . $imageType . ';base64,' . $imageData;
        } else {
            $images[$key] = ''; // leave empty if not found
        }
    }

    // Step 2: Load view and pass the images array
    $pdf = Pdf::loadView('brochure', ['images' => $images])
        ->setPaper('a4');

    return $pdf->stream('brochure.pdf');
});


// use Illuminate\Support\Facades\Route;
// use Barryvdh\DomPDF\Facade\Pdf;

// Route::get('/', function () {
//     $options = new \Dompdf\Options();
//     $options->set('isRemoteEnabled', true); // Enable loading images from URLs

//     $pdf = Pdf::loadView('section_g', [])
//         ->setPaper('a4', 'portrait');

//     $pdf->getDomPDF()->setOptions($options); // Apply the options to the DomPDF instance

//     return $pdf->stream();
// });
