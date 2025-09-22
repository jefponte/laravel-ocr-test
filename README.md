sudo apt-get install -y tesseract-ocr tesseract-ocr-por tesseract-ocr-eng

composer global require laravel/installer

laravel new ocr-test

composer require thiagoalessio/tesseract_ocr


    $imagePath = storage_path('app/public/documents/nota_fiscal.jpg');
    $text = (new TesseractOCR($imagePath))
        ->lang('por', 'eng')
        ->psm(3)
        ->oem(1)
        ->run();

